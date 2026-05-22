<?php

require_once 'models/Category.php';

$categoryModel = new Category();

$conn = (new Database())->connect();

$page = isset($_GET['page']) ? $_GET['page'] : 'category';

switch ($page) {

    // =========================
    // TAMPILKAN KATEGORI
    // =========================
    case 'category':

        $categories = $categoryModel->getCategories();

        require_once 'views/categories/index.php';

        break;

    // =========================
    // FORM CREATE CATEGORY
    // =========================
    case 'create-category':

        require_once 'views/categories/create.php';

        break;

    // =========================
    // SIMPAN CATEGORY
    // =========================
    case 'store-category':

        $name = $_POST['name'];

        $slug = strtolower(
            str_replace(' ', '-', $name)
        );

        mysqli_query(
            $conn,
            "
            INSERT INTO categories(
                name,
                slug
            )
            VALUES(
                '$name',
                '$slug'
            )
            "
        );

        header('Location: ?page=category');

        break;

    // =========================
    // HAPUS CATEGORY
    // =========================
    case 'delete-category':

        $id = $_GET['id'];

        mysqli_query(
            $conn,
            "
            DELETE FROM categories
            WHERE id = '$id'
            "
        );

        header('Location: ?page=category');

        break;
}