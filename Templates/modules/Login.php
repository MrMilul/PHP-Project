<?php 
function get_title(){
    return "Login";
}

function get_content(){?>

<div class="modal fade" id="mymodal">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header ">
                         <div class="modal-title">
                              <h4 class=' text-primary'>Login</h4>
                         </div>
                         <button class='close' data-dismiss='modal'>&times;</button>
                    </div>
                    <div class="modal-body">
                         <form action="">
                              <div class="form-group">
                                   <input type="text" class='form-control' placeholder='Username' required>
                              </div>
                              <div class="form-group">
                                   <input type="password" class='form-control' placeholder='Password' required>
                              </div>
                              <div class="form-group form-check">
                                   <input type="checkbox" class='from-check-input' id='chk'>
                                   <label for="chk" class='form-check-label'>Remember Me</label>

                              </div>
                              <div class="form-group">
                                   <button type='submit' class='btn btn-primary btn-block'>Login</button>
                              </div>
                         </form>
                    </div>
                    <div class="modal-footer">
                         <button class='col btn'>Forget Password</button>
                         <button class='col btn'>Sign In</button>

                    </div>
               </div>
          </div>
     </div>

<?php }