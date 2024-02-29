<?php
function randomPassword($user_number){
    $password ="";
    $possible_characters ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!%&().,";
    
    for ($i=0; $i < $user_number; $i++){
       $n= rand(0, strlen($possible_characters)-2);
       $password .= $possible_characters[$n];
    }
    return $password;
}