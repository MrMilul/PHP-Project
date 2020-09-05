
<nav id='nav1' class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <a href="#" class="navbar-brand"><i class="fab fa-php"></i></a>
    <a href="#" class="navbar-brand"><i class="fab fa-bootstrap"></i></i></a>
          <div class="container">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#div1"
                    area-control='div1' area-label='Menu'>
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-start" id='div1'>
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                              <a href="home" class="nav-link">Home</a>
                         </li>
                         <li class="nav-item"><a href="contact" class="nav-link ">Contact Us</a></li>
                   
                         <li id='login' class="nav-item">
                             <?php if(!is_user_loged_in()):?>
                             <a href="login" class="nav-link" >Login</a>
                             <?php else:?>
                             <a href="dashboard"  class="nav-link">Dashboard</a>
                             <?php endif;?>
                         </li>
                         <?php if (is_user_loged_in()): ?>
                         <li class="nav-item"><a href="logout" class="nav-link ">Logout</a></li>
                         <?php endif;?>
                    </ul>
               </div>
          </div>
     </nav>