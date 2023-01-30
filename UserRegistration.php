<?php
include('db_connection.php');
if(isset($_POST['rSignup'])){
    $userName = $_POST['rName'];
    $userEmail = $_POST['rEmail'];
    $userPass = $_POST['rPassword'];
    
}
?>
<div class="container pt-5">
        <h2 class="text-center">Create an Account</h2>
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <form action="" method="POST">
                    <div class="form-group">
                        <i class="fas fa-user"></i> <label for="Name" class="font-weight-bold pl-2">Name</label>
                        <input type="text" class="form-control" name="rName" placeholder="Type your name here">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-user"></i> <label for="Email" class="font-weight-bold pl-2">Email</label>
                        <input type="email" class="form-control" name="rEmail" placeholder="Type your email here">
                        <small class="form-text"> We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i> <label for="Password" class="font-weight-bold pl-2">Password</label>
                        <input type="password" class="form-control" name="rPassword"
                            placeholder="Type your password here">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-block btn-danger mt-5 shadow-sm font-weight-bold"
                            name="rSignup">Sign Up</button>
                    </div>
                    <em style="font-size:12px;">Note - By clicking Sign Up you agree to our terms, Date policy and
                        Cookie Policy</em>
                </form>
            </div>
           </div>
         </div>