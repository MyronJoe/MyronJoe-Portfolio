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

$posts = selectAll($table);



if (isset($_POST['create-post'])) {
    $errors = validatePost($_POST, $errors);

    if (count($errors) === 0) {
        unset($_POST['create-post']);

        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['blog'] = isset($_POST['blog']) ? 1 : 0;
        
        $_POST['user_id'] = 1;

        $post_id = create($table, $_POST);


    }else{
        $title = $_POST['title'];
        $content = $_POST['content'];
        $category = $_POST['category'];
        $link = $_POST['link'];
        $blog = isset($_POST['blog']) ? 1 : 0;;
        $published = isset($_POST['published']) ? 1 : 0;
    }
    
}

//update podt

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $post = selectOne($table, ['id' => $id]);
    // dump($post);

    $id = $post['title'];
    $title = $post['title'];
    $content = $post['content'];
    $category = $post['category'];
    $link = $post['link'];
    $blog = $post['blog'];
    $published = $post['published'];
}




?>