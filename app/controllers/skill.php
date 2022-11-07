<?php
include ROOT_PATH . "/app/database/db.php";
include(ROOT_PATH . '/app/helpers/validateskill.php');
include(ROOT_PATH . '/app/helpers/accesscontrol.php');

$table = 'skills';
$errors = [];
$skill = '';
$rating = '';
$id = '';

$skills = selectAll($table);


//add skills
if (isset($_POST['create-skill'])) {
    adminOnly();
    $errors = validateskill($_POST, $errors);

    if (count($errors) === 0) {
        unset($_POST['create-skill']);
        
        $user_id = create($table, $_POST);
        $_SESSION['message'] = "Skill created successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/skills/index.php");
        exit();
        // dump($_POST);

    }else{

        $skill = $_POST['skill'];
        $rating = $_POST['rating'];
    }

}

//Editing skills
if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);
    $id = $user['id'];
    $skill = $user['skill'];
    $rating = $user['rating'];
}

if (isset($_POST['update-skill'])) {
    adminOnly();
    $errors = validateskill($_POST, $errors);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['id'], $_POST['update-skill']);

        $count = update($table, $id, $_POST);
        $_SESSION['message'] = "Skill updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/skills/index.php");
        exit();

    }else{
        $skill = $_POST['skill'];
        $rating = $_POST['rating'];
    }

}

//delete skills
if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "Skill deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/skills/index.php");
    exit();
}

?>