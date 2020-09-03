<?php

function user_count(){
    global $db; 
    $result = $db->query("SELECT * FROM users");
    $count = 0;
    while($row = $result->fetch_assoc()){
        $count++;
    };
    return $count;
}

function get_user($username){
    if(!$username){
        return;
    }
    global $db;
    $result = $db->query("
            SELECT * FROM users
            WHERE username = '$username' ");
    
    $row = $result->fetch_assoc();
    
    return $row;
}

function user_exist($username){
    
    $name = get_user($username);
    return isset($name['id']); 
}

function add_user($userdata){
    $username = $userdata['username']; 
    if(!$username){
        return;
    }
    $password = sha1($userdata['password']);
    $email = ($userdata['email']);
    $firstname = ($userdata['firstname']);
    $lastname = ($userdata['lastname']);
    
    global $db;
    if(!user_exist($username)){
     $result = $db->query(" 
             INSERT INTO users (username, password, email, firstname, lastname)
             VALUES ('$username', '$password', '$email', '$firstname', '$lastname')");
    }else{
       $result = $db->query(" 
            UPDATE users 
            SET password = '$password', email = '$email', firstname = '$firstname', lastname = '$lastname'
                WHERE username = '$username'");
               
    }
            
}

function user_update($userdata){
    add_user($userdata);
}

function delete_user($username){
    if(!user_exist($username)){
        return; 
    }
    global $db;
    $result = $db->query(" 
        DELETE FROM users 
        WHERE username = '$username'");
    
}



