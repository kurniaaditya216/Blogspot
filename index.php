<?php

session_start();

require_once 'config/Database.php';
require_once 'helpers/function.php';

$page = isset($_GET['page'])
    ? $_GET['page']
    : 'post';

switch ($page) {

   
    case 'post':

    case 'show-post':

    case 'create-post':

    case 'store-post':

    case 'edit-post':

    case 'update-post':

    case 'delete-post':

        require_once 'controllers/PostController.php';

        break;

  
    case 'category':

    case 'create-category':

    case 'store-category':

    case 'delete-category':

        require_once 'controllers/CategoryController.php';

        break;

    default:

        require_once 'controllers/PostController.php';

        break;
}