<?php

function get_user_message($name, $email, $message){
    if(empty($name)){
        return; 
    }
    global $db;
    $db->query(" 
             INSERT INTO message (name, email, message)
             VALUES ('$name', '$email', '$message')");
}