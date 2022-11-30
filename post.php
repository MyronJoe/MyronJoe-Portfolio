<?php
require_once 'path.php';
require_once(ROOT_PATH . "/app/includes/header.php");
require_once(ROOT_PATH . "/app/controllers/post.php");

if (isset($_GET['p_id'])) {
    $post = selectOne('posts', ["id" => $_GET['p_id']]);
}

dump($post);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>