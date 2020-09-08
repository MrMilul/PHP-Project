<?php
function get_title(){
    return 'Register';
}

 function get_content (){?>
<div class="container col-4 mt-5">
    <form method="post">
             <div class="form-group">
                <label for="exampleInputPassword1">First Name</label>
                <input type="text" name='firstname' class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Family Name</label>
                <input type="text" name='lastname' class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" >Username</label>
                <input type="text" name='username' class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" >Password</label>
                <input type="password" name='password' class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Email address</label>
                <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
           
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

 <?php }
 
 function proccess(){
     
     $userdata = [];
     if (!isset($_POST)){
         return;
     }
     if (isset($_POST['firstname'])){
         $userdata['firstname'] = $_POST['firstname'];
     }
     if (isset($_POST['lastname'])){
         $userdata['lastname'] = $_POST['lastname'];
     }
     if (isset($_POST['username'])){
         $userdata['username'] = $_POST['username'];
         if (user_exist($userdata['username'])){
         message('You already registered!', 'warning');
         return; 
     }
     }
     if (isset($_POST['password'])){
         $userdata['password'] = $_POST['password'];
     }
     if (isset($_POST['email'])){
         $userdata['email'] = $_POST['email'];
     }
     
     
     
     user_logout();
     
     add_user($userdata);
      
 }
 
 
 
 