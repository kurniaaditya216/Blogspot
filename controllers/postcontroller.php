<?php

require_once 'models/Post.php';

$postModel = new Post();

if (isset($_GET['id'])) {

    $post = $postModel->getPostById($_GET['id']);

    require_once 'views/posts/show.php';

} else {

    $posts = $postModel->getPosts();

    require_once 'views/posts/index.php';
}