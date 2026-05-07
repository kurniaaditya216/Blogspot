<?php

require_once 'config/Database.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'post';

switch ($page) {

    case 'post':
        require_once 'controllers/PostController.php';
        break;

    default:
        require_once 'controllers/PostController.php';
        break;
}