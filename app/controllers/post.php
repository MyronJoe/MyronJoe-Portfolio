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

    if (!empty($_FILES['image']['name'])) {
        
        $imageName = time() . "_" . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images" . $imageName;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $imageName;
        }else{
            array_push($errors, 'Image failed to upload');
        }
        // dump($imageName);
    }else{
        array_push($errors, 'Image is requierd');
    }

    if (count($errors) === 0) {
        unset($_POST['create-post']);
        $_POST['user_id'] =  $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['blog'] = isset($_POST['blog']) ? 1 : 0;
        
        $post_id = create($table, $_POST);
        $_SESSION['message'] = 'Post created successfully';
        $_SESSION["type"] = "success";
        header('location: '. BASE_URL . '/admin/posts/index.php');
        exit();

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
    $id = $post['id'];
    $title = $post['title'];
    $content = $post['content'];
    $category = $post['category'];
    $link = $post['link'];
    $blog = $post['blog'];
    $published = $post['published'];
}

if (isset($_POST['update-post'])) {
    $errors = validatePost($_POST, $errors);

    if (!empty($_FILES['image']['name'])) {
        
        $imageName = time() . "_" . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images" . $imageName;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $imageName;
        }else{
            array_push($errors, 'Image failed to upload');
        }
        // dump($imageName);
    }else{
        array_push($errors, 'Image is requierd');
    }

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);

        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['blog'] = isset($_POST['blog']) ? 1 : 0;

        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Post updated successfully';
        $_SESSION["type"] = "success";
        header('location: '. BASE_URL . '/admin/posts/index.php');
        exit();


    }else{
        $title = $_POST['title'];
        $content = $_POST['content'];
        $category = $_POST['category'];
        $link = $_POST['link'];
        $blog = isset($_POST['blog']) ? 1 : 0;;
        $published = isset($_POST['published']) ? 1 : 0;
    }
    
}


//Delete Post
if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Post deleted successfully';
    $_SESSION["type"] = "success";
    header('location: '. BASE_URL . '/admin/posts/index.php');
    exit();
}

//function for Published and Unpublished Post
if (isset($_GET['published']) && isset($_GET['p_id'])) {
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];

    //updating the published post in the post table
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = 'Post Publish State Changed';
    $_SESSION["type"] = "success";
    header('location: '. BASE_URL . '/admin/posts/index.php');
    exit();
}



?>