<?php
function validateUser($post, $errors){
    

    if (empty($post["title"])) {
        array_push($errors, 'title is required');
    }

    if (empty($post["content"])) {
        array_push($errors, 'content is required');
    }

    if (empty($post["category"])) {
        array_push($errors, 'category is required');
    }

    if ($post["link"]) {
        array_push($errors, 'link is required');
    }
    
    //checking if an email already exist
    // $existingUser = selectOne('users', ['email' => $post["email"]]);
    // if($existingUser){

    //     if (isset($post['update-user']) && $existingUser['id'] != $post['id']) {
    //         array_push($errors, 'Email already exists');
    //     }

    //     if (isset($post['register-btn']) || isset($post['create-admin']) ) {
    //         array_push($errors, 'Email already exists');
    //     }
        
    // }

    // dump($errors);

    return $errors;
}