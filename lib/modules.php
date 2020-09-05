<?php

function render_page(){
    if(function_exists('proccess')){
         proccess();
     }
    include_once ('Templates/header.php');
   include_once ('Templates/nav.php');
  
    get_content();
    
    include_once ('Templates/body.php');
    
}

function load_page(){
    $modole = requested_url(); 
    if(empty($modole)){
        $modole = 'home';
    }
    if($modole == 'index'){
        redirect_to(home_url('/home'));
    }
    if ($modole == 'login' && is_user_loged_in()){
        redirect_to(home_url('/home'));
    }
    if(file_exists("Templates/modules/".$modole.".php")){
        include_once  ("Templates/modules/".$modole.".php");
            if(is_authentication_required() && !is_user_loged_in()){
                redirect_to(home_url('/login'));
            }
    }else{
        include_once  ("Templates/modules/notfound.php");
    }
    
    render_page();
    
}

function is_authentication_required(){
    if (function_exists('authentication_required')){
        return authentication_required();
    }
    return false;
}

