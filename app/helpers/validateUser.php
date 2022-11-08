<?php
function validateUser($user, $errors){
    

    if (empty($user["username"])) {
        array_push($errors, 'username is required');
    }

    if (empty($user["email"])) {
        array_push($errors, 'email is required');
    }

    if (empty($user["password"])) {
        array_push($errors, 'password is required');
    }

    if ($user["confirm_password"] !== $user["password"]) {
        array_push($errors, 'password does not match');
    }
    
    //checking if an email already exist
    $existingUser = selectOne('users', ['email' => $user["email"]]);
    if($existingUser){

        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }

        if (isset($user['register-btn']) || isset($user['create-admin']) ) {
            array_push($errors, 'Email already exists');
        }
        
    }

    return $errors;
}

function validateLogin($user, $errors){

    if (empty($user["email"])) {
        array_push($errors, 'email is required');
    }

    if (empty($user["password"])) {
        array_push($errors, 'password is required');
    }

    return $errors;
}

function validateUpdate($user, $errors){
    

    if (empty($user["username"])) {
        array_push($errors, 'username is required');
    }

    if (empty($user["email"])) {
        array_push($errors, 'email is required');
    }

    if (empty($user["mobile_num"])) {
        array_push($errors, 'Mobile Number is required');
    }

    if (empty($user["about_me"])) {
        array_push($errors, 'Say somthing about your self');
    }

    if (empty($user["status"])) {
        array_push($errors, 'What is your status');
    }

    if (empty($user["password"])) {
        array_push($errors, 'password is required');
    }

    if ($user["confirm_password"] !== $user["password"]) {
        array_push($errors, 'password does not match');
    }
    
    //checking if an email already exist
    $existingUser = selectOne('users', ['email' => $user["email"]]);
    if($existingUser){

        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }

        if (isset($user['register-btn']) || isset($user['create-admin']) ) {
            array_push($errors, 'Email already exists');
        }
        
    }

    return $errors;
}

?>