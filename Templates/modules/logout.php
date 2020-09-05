<?php



function proccess(){
    user_logout();
    redirect_to(home_url('/login'));
 }

