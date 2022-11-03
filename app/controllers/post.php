<?php
include ROOT_PATH . "/app/database/db.php";
include(ROOT_PATH . '/app/helpers/validatePost.php');

$table = 'posts';
$errors = [];

$id = '';
$title = '';
$content = '';
$category = '';
$link = '';
$published = '';
$blog = '';
$image = '';



if (isset($_POST['create-post'])) {
    $errors = validatePost($_POST, $errors);

    if (count($errors) === 0) {
        dump($_POST);


    }else{
        $title = $_POST['title'];
        $content = $_POST['content'];
        $category = $_POST['category'];
        $link = $_POST['link'];
        $blog = isset($_POST['blog']) ? 1 : 0;;
        $published = isset($_POST['published']) ? 1 : 0;
    }
    
}



?>