<?php


function validateskill($user, $errors){

    if (empty($user["skill"])) {
        array_push($errors, 'skill is required');
    }

    if (empty($user["rating"])) {
        array_push($errors, 'rating is required');
    }

    $existingSkill = selectOne('skills', ['skill' => $user["skill"]]);
    if($existingSkill){

        if (isset($user['update-skill']) && $existingSkill['id'] != $user['id']) {
            array_push($errors, 'skill already exists');
        }

        if (isset($user['create-skill'])) {
            array_push($errors, 'Skills already exists');
        }
        
    }

    return $errors;
}



?>