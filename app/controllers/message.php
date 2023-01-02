<?php 
include ROOT_PATH . "/app/database/db.php";
include(ROOT_PATH . '/app/helpers/validateMessage.php');
include(ROOT_PATH . '/app/helpers/accesscontrol.php');

$table = 'message';
$errors = [];
$name = '';
$email = '';
$number = '';
$content = '';
$id = '';
$messages = selectAll($table);

if (isset($_POST['message-btn'])) {
    $errors = validateMeaasge($_POST, $errors);
    
    if (count($errors) === 0) {
        unset($_POST['message-btn']);

        $count = create($table, $_POST);
        $_SESSION['message'] = "Your message has been sent. Thank you!";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/index.php");
        exit();
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $content = $_POST['content'];
    }
}

if (isset($_GET['id'])) {

    $msg = selectOne($table, ['id' => $_GET['id']]);
    $name = $msg['name'];
    $email = $msg['email'];
    $number = $msg['number'];
    $content = $msg['content'];
}

//delete messages
if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "Message deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/messages/index.php");
    exit();
}

?>