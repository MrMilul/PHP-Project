<?php 
function get_title(){
    return "Login";
}

function get_content(){?>
   
<div class="container col-md-6">
<div class="card text-center">
  <div class="card-header text-primary font-bold">Login</div>
  <div class="card-body">
      <form action="" method="post" >
            <div class="form-group">
                 <input name='username' type="text" class='form-control' placeholder='Username' required>
            </div>
            <div class="form-group">
                 <input  name='password' type="password" class='form-control' placeholder='Password' required>
            </div>
            <div class="form-group form-check">
                 <input type="checkbox" class='from-check-input' id='chk'>
                 <label for="chk" class='form-check-label'>Remember Me</label>

            </div>
            <div class="form-group">
                 <button type='submit' name='login' class='btn btn-primary btn-block'>Login</button>
            </div>
    </form>
    
  </div>
  <div class="card-footer d-flex justify-content-center">
    <a href="forgetpass" class="btn btn-primary mx-4">Forget Password</a>
    <a href="register" class="btn btn-primary">Register</a>
  </div>
</div>
    </div>
<?php }

function proccess(){
    if(!isset($_POST)){
        return;
    }
    if(isset($_POST['username'])){
        $username = $_POST['username']; 
    }
    if(isset($_POST['password'])){
        $password = $_POST['password']; 
    }
//    if(empty($username)){
//        message('Pleae Fill the Username ');
//    }
}