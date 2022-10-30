<?php
include ROOT_PATH . "/app/database/db.php";
include(ROOT_PATH . '/app/helpers/validateuser.php');
$table = 'users';

$errors = [];
$username = '';
$email = '';
$password = '';
$confirm_password = '';


if (isset($_POST['register-btn'])) {
    $errors = validateUser($_POST, $errors);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['confirm_password']);
        $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $_POST['admin'] = 1;
        $_POST['status'] = 'User';
        $_POST['mobile_num'] = '+12345678';
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

?>