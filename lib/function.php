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


function redirect_to($url){
    header("Location:$url");
    die();
}

function message($message, $color='danger'){?>
    <div class="alert alert-<?php echo $color?> alert-dismissible fade show" role="alert">
        <strong><?php echo "$message"?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php }


 
