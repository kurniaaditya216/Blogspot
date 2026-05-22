<?php

require_once 'config/Database.php';

class User {

    private $conn;

    public function __construct()
    {
        $database = new Database();

        $this->conn = $database->connect();
    }

    // =========================
    // GET ALL USERS
    // =========================
    public function getUsers()
    {
        $query = mysqli_query(
            $this->conn,
            "
            SELECT *
            FROM users
            ORDER BY id DESC
            "
        );

        return $query;
    }

    // =========================
    // GET USER BY ID
    // =========================
    public function getUserById($id)
    {
        $query = mysqli_query(
            $this->conn,
            "
            SELECT *
            FROM users
            WHERE id = '$id'
            "
        );

        return mysqli_fetch_assoc($query);
    }

    // =========================
    // GET USER BY EMAIL
    // =========================
    public function getUserByEmail($email)
    {
        $query = mysqli_query(
            $this->conn,
            "
            SELECT *
            FROM users
            WHERE email = '$email'
            "
        );

        return mysqli_fetch_assoc($query);
    }

    // =========================
    // REGISTER USER
    // =========================
    public function register($data)
    {
        $name = htmlspecialchars($data['name']);
        $email = htmlspecialchars($data['email']);

        $password = password_hash(
            $data['password'],
            PASSWORD_DEFAULT
        );

        $query = mysqli_query(
            $this->conn,
            "
            INSERT INTO users(
                name,
                email,
                password
            )
            VALUES(
                '$name',
                '$email',
                '$password'
            )
            "
        );

        return $query;
    }

    // =========================
    // LOGIN USER
    // =========================
    public function login($email, $password)
    {
        $user = $this->getUserByEmail($email);

        if(!$user){

            return false;
        }

        if(password_verify($password, $user['password'])){

            $_SESSION['login'] = true;

            $_SESSION['user_id'] = $user['id'];

            $_SESSION['user_name'] = $user['name'];

            $_SESSION['user_email'] = $user['email'];

            return true;
        }

        return false;
    }

    // =========================
    // LOGOUT USER
    // =========================
    public function logout()
    {
        session_unset();

        session_destroy();

        return true;
    }

    // =========================
    // CHECK LOGIN
    // =========================
    public function checkLogin()
    {
        return isset($_SESSION['login']);
    }

    // =========================
    // UPDATE USER
    // =========================
    public function update($id, $data)
    {
        $name = htmlspecialchars($data['name']);

        $email = htmlspecialchars($data['email']);

        $query = mysqli_query(
            $this->conn,
            "
            UPDATE users
            SET
                name = '$name',
                email = '$email'
            WHERE id = '$id'
            "
        );

        return $query;
    }

    // =========================
    // DELETE USER
    // =========================
    public function delete($id)
    {
        $query = mysqli_query(
            $this->conn,
            "
            DELETE FROM users
            WHERE id = '$id'
            "
        );

        return $query;
    }
}