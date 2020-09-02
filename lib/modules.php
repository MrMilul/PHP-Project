<?php

function render_page(){
     
    include_once ('Templates/header.php');
   include_once ('Templates/nav.php');
  
    get_content();
    
    include_once ('Templates/body.php');
    
}

function load_page(){
    $modole = requested_url(); 
    if(empty($modole)){
        return '/home';
    }
    if(file_exists("Templates/modules/".$modole.".php")){
        include_once  ("Templates/modules/".$modole.".php");
    }else{
        include_once  ("Templates/modules/notfound.php");
    }
    
    render_page();
    
}

