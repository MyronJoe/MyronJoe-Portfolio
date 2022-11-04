<?php
include ROOT_PATH . "/app/database/db.php";
include(ROOT_PATH . '/app/helpers/validateuser.php');
$table = 'users';

$errors = [];
$username = '';
$email = '';
$password = '';
$confirm_password = '';
$id = '';
$admin = '';
$mobile_num = '';
$about_me = '';
$status = '';

$allUsers = selectAll($table);


//function that logs the user in
function loginUser($user){
    $_SESSION['id'] = $user["id"];
    $_SESSION['username'] = $user["username"];
    $_SESSION['email'] = $user["email"];
    $_SESSION['admin'] = $user["admin"];
    $_SESSION['message'] = "You are now logged in";
    $_SESSION['type'] = "success";
    
    if ($_SESSION['id']) {
        header("location: " . BASE_URL . "/index.php");
        exit();
    }

    // if ($_SESSION['admin']) {
    //     header("location: " . BASE_URL . "/admin/dashboard.php");
    // }else{
    //     header("location: " . BASE_URL . "/index.php");
    // }
    // exit();
}


if (isset($_POST['register-btn'])) {
    $errors = validateUser($_POST, $errors);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['confirm_password']);
        $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $_POST['admin'] = 0;
        $_POST['status'] = 'User Status';
        $_POST['mobile_num'] = '+123...78';
        $_POST['about_me'] = 'Update Bio';

        $user_id = create($table, $_POST);
        $_SESSION['message'] = "User created successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/index.php");
        exit();
    }else{
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
    }
}

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST, $errors);

    if (count($errors) === 0) {
        $user = selectOne($table, ['email' => $_POST['email']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        }else{
            array_push($errors, 'Check email and password');
        }
    }
    $email = $_POST["email"];
    $password = $_POST["password"];
}

//Update user

if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);

    // dump($user);

    $id = $user['id'];
    $username = $user['username'];
    $email = $user['email'];
    $admin = $user['admin'];
    $mobile_num = $user['mobile_num'];
    $about_me = $user['about_me'];
    $status = $user['status'];
}

if (isset($_POST['update-user'])) {

    // dump($_FILES['image']);

    $errors = validateUpdate($_POST, $errors);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['id'], $_POST['update-user'], $_POST['confirm_password']);
        $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = update($table, $id, $_POST);
        $_SESSION['message'] = "User updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/users/index.php");
        exit();

    }else{
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile_num = $_POST['mobile_num'];
        $about_me = $_POST['about_me'];
        $status = $_POST['status'];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $admin = isset($_POST['admin']) ? 1 : 0;
    }
}

//delete user
if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "User deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/users/index.php");
    exit();
}

?>