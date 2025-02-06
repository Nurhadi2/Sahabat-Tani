<?php

error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];

?>

<!doctype html>
<html lang="en">

      <?php

      include('../inc/connect.php');

      ?> 

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Register Sahabat Tani</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <img src="images/welcome.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4 msg">
              <h3>Register</h3>
            </div>
            <form method="POST" action="<?= $base_url ?>/login_user/action_register_user.php">
                      <?php
                        if ($msg =="error")
                        {
                            echo '<div class="alert bg-red alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            Ada kesalahan terjadi
                            </div>';
                        }
                        else if ($msg =="success")
                        {
                            echo '<div class="alert bg-green alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            Sukses mendaftar silahkan login.
                            </div>';
                        }
                        else 
                        {

                        }
                      
                      ?>
              <div class="form-group first">
                <label for="username">username</label>
                <input type="text" name="user" class="form-control" id="username" required>
                <!-- name="user" untuk menangkap user yang ada di action_regester.php  -->
              </div>

              <div class="form-group first">
                <label for="username">email</label>
                <input type="email" name="email" class="form-control" id="username" required>
              </div>

              <div class="form-group first">
                <label for="username">password</label>
                <input type="password" name="password" class="form-control" id="password" minlength="6" required>
              </div>

              <div class="form-group first">
                <label for="password">confirm password</label>
                <input type="password" name="confirm" class="form-control" id="password" minlength="6" required> 
              </div>

              <input type="submit" name="submit" value="Register" class="btn btn-block btn-primary">
              
              <div class="d-flex mb-5 align-items-center">
                <div style="color:rgb(138, 120, 120); position: relative; top: 2px; font-size: 14px;">Sudah punya akun? </div>
                <span class="ml-auto"><a href="login.php" class="forgot-pass">Log In</a></span> 
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>