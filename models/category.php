<?php

require_once 'config/Database.php';

class Category {

    private $conn;

    public function __construct()
    {
        $database = new Database();

        $this->conn = $database->connect();
    }

    public function getCategories()
    {
        $query = mysqli_query(
            $this->conn,
            "SELECT * FROM categories ORDER BY id DESC"
        );

        return $query;
    }

    public function getCategoryById($id)
    {
        $query = mysqli_query(
            $this->conn,
            "SELECT * FROM categories WHERE id='$id'"
        );

        return mysqli_fetch_assoc($query);
    }
}