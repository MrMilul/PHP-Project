<?php

function authentication_required(){
    return true; 
}

function get_title(){
    return "dashbord";
}

function get_content (){?>
    <div class="container">
         <h3>dashboard page ...</h3>
    </div>
<?php }