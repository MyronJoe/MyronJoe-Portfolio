<?php 

function usersOnly($redirect = '/index.php'){
    if (empty($_SESSION["id"])) {
        $_SESSION['message'] = 'Login required';
        $_SESSION['type'] = 'danger';
        header('location: ' .BASE_URL . $redirect);
        exit();
    }
}


function adminOnly($redirect = '/index.php'){
    if (empty($_SESSION["id"]) || empty($_SESSION["admin"])) {
        $_SESSION['message'] = 'You are not authorized';
        $_SESSION['type'] = 'danger';
        header('location: ' .BASE_URL . $redirect);
        exit();
    }
}

function ultimateAdminOnly($redirect = '/admin/users/index.php'){
    if (empty($_SESSION["id"]) || empty($_SESSION["admin"]) || empty($_SESSION["ultimateAdmin"])) {
        $_SESSION['message'] = 'You are not authorized';
        $_SESSION['type'] = 'danger';
        header('location: ' .BASE_URL . $redirect);
        exit();
    }
}


function allreadyLogedIn($redirect = '/index.php'){
    if (!empty($_SESSION["id"])) {
        header('location: ' .BASE_URL . $redirect);
        exit();
    }
}


?>