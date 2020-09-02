<?php

function home_url(){
    return "/home"; 
}

function requested_url(){
    
    if(isset($_SERVER ["REDIRECT_URL"])){
        
        $request_ulr = substr($_SERVER ["REDIRECT_URL"],strpos($_SERVER ["REDIRECT_URL"], '/', 1)+1);
        
    }else{
        $request_ulr = home_url();
      }
    
   return $request_ulr;
}
