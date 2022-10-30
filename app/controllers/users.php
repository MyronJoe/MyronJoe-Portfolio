<?php
include ROOT_PATH . "/app/database/db.php";
$table = 'users';

if (isset($_POST['register-btn'])) {
    unset($_POST['register-btn'], $_POST['confirm_password']);
    
    $_POST['admin'] = 1;

    // dump($_POST);
    $user_id = create($table, $_POST);
    $_SESSION['message'] = "Admin user created successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/index.php");
    exit();
}

?>