<?php

function render_page(){
    include_once ('Templates/header.php');
      $req = requested_url();
    include_once  ("Templates/modules/".$req.".php");
   include_once ('Templates/nav.php');
    get_content();
    
   
    include_once ('Templates/body.php');
    
}
