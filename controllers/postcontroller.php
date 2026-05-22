<?php

require_once 'models/Post.php';
require_once 'models/Category.php';

$postModel = new Post();
$categoryModel = new Category();

$conn = (new Database())->connect();

$page = isset($_GET['page']) ? $_GET['page'] : 'post';

switch ($page) {

    case 'post':

        $posts = $postModel->getPosts();

        require_once 'views/posts/index.php';

        break;

    case 'show-post':

        $id = $_GET['id'];

        $post = $postModel->getPostById($id);

        require_once 'views/posts/show.php';

        break;


    case 'create-post':

        $categories = $categoryModel->getCategories();

        require_once 'views/posts/create.php';

        break;


    case 'store-post':

        $title = $_POST['title'];
        $content = $_POST['content'];
    $category_id = isset($_POST['category_id'])
    ? $_POST['category_id']
    : NULL;

if(empty($category_id)){

    die('Kategori harus dipilih');
}

        mysqli_query(
            $conn,
            "
            INSERT INTO posts(
                category_id,
                title,
                content
            )
            VALUES(
                '$category_id',
                '$title',
                '$content'
            )
            "
        );

        header('Location: ?page=post');

        break;


    case 'edit-post':

        $id = $_GET['id'];

        $post = $postModel->getPostById($id);

        $categories = $categoryModel->getCategories();

        require_once 'views/posts/edit.php';

        break;

    case 'update-post':

        $id = $_GET['id'];

        $title = $_POST['title'];
        $content = $_POST['content'];
    $category_id = isset($_POST['category_id'])
    ? $_POST['category_id']
    : NULL;

if(empty($category_id)){

    die('Kategori harus dipilih');
}

        mysqli_query(
            $conn,
            "
            UPDATE posts
            SET
                category_id = '$category_id',
                title = '$title',
                content = '$content'
            WHERE id = '$id'
            "
        );

        header('Location: ?page=post');

        break;


    case 'delete-post':

        $id = $_GET['id'];

        mysqli_query(
            $conn,
            "
            DELETE FROM posts
            WHERE id = '$id'
            "
        );

        header('Location: ?page=post');

        break;
}