<?php
function validatePost($post, $errors){
    

    if (empty($post["title"])) {
        array_push($errors, 'title is required');
    }

    if (empty($post["content"])) {
        array_push($errors, 'content is required');
    }

    if (empty($post["category"])) {
        array_push($errors, 'category is required');
    }

    if (empty($post["link"])) {
        array_push($errors, 'link is required');
    }
    
    //checking if a Title already exist
    $existinPost = selectOne('posts', ['title' => $post["title"]]);
    if($existinPost){

        if (isset($post['update-post']) && $existinPost['id'] != $post['id']) {
            array_push($errors, 'Title already exists');
        }

        if (isset($post['create-post'])) {
            array_push($errors, 'Title already exists');
        }
        
    }

    // dump($errors);

    return $errors;
}