<?php


function validateMeaasge($user, $errors){

    if (empty($user["name"])) {
        array_push($errors, 'Name is required');
    }

    if (empty($user["email"])) {
        array_push($errors, 'Email is required');
    }

    if (empty($user["number"])) {
        array_push($errors, 'Mobile number is required');
    }

    if (empty($user["content"])) {
        array_push($errors, 'Message content is required');
    }

    

    return $errors;
}



?>