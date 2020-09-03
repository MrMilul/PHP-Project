<?php

define('SESSION_EXPIRE_TIME', 24*3600);

session_start();

$current_user = null; 
$current_user_id = null; 

function get_current_user_data(){
    global $current_user; 
    return $current_user;
}
function get_current_user_id(){
    global $current_user_id; 
    return $current_user_id;
    
}

function is_user_loged_in(){
    global $current_user_id; 
    if(isset($current_user_id)){
        return true;
    }
    return false;
}

function clear_user_session(){
    unset($_SESSION['useername']);
    unset($_SESSION['password']);
    unset($_SESSION['last_access']);
    unset($_SESSION['id']);
}

//function check_previous_login(){
//    $last_access = $_SESSION['last_access'];
//    if(time()- $last_access > SESSION_EXPIRE_TIME){
//        clear_user_session();
//        return;
//    }
//    
//}


function user_logout(){
    global $current_user;
    global $current_user_id; 
    clear_user_session();
    $current_user = null;
    $current_user_id = null;
}

function user_login($username, $password){
    
    user_logout();
    
    $userdata = get_user($username);
    if($username !== $userdata['username'] && sha1($password) !== $userdata['password']){
        return false;
    }
    global $current_user;
    global $current_user_id;
    
    $current_user = $userdata['username'];
    $current_user_id = $userdata['id'];
    
    $_SESSION['username'] = $current_user;
    $_SESSION['password'] = $userdata['password'];
    $_SESSION['id'] = $current_user_id;
    $_SESSION['last_access'] = time();
    
    
}
