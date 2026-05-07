<?php

require_once 'config/Database.php';

class Post {

    private $conn;

    public function __construct() {

        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getPosts() {

        $query = mysqli_query($this->conn,
            "SELECT * FROM posts ORDER BY id DESC"
        );

        return $query;
    }

    public function getPostById($id) {

        $query = mysqli_query($this->conn,
            "SELECT * FROM posts WHERE id='$id'"
        );

        return mysqli_fetch_assoc($query);
    }
}