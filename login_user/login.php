<?php
error_reporting(E_ALL ^ E_NOTICE);
$msg = $_GET['msg'];
?>
<!doctype html>
<html lang="en">
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

    <title>Login Sahabat Tani</title>
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
              <div class="mb-4">
              <h3>Sign In</h3>
            </div>
            <form action="action_login_user.php" method="post">
            <?php
                    if ($msg!="")
                    {
                        echo '<div class="alert bg-red alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        username atau password anda salah
                        </div>';
                    }
                    else
                    {

                    }
                    
            ?>
            <div class="form-group first">
                <label for="email">email</label>
                <input type="email" name="email" class="form-control" id="email">

              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" minlength="6">
                
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

              <div class="d-flex mb-5 align-items-center">
                <div style="color:rgb(138, 120, 120); position: relative; top: 2px; font-size: 14px;">Belum punya akun? </div>
                <span class="ml-auto"><a href="register.php" class="forgot-pass">Register</a></span> 
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

    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/examples/sign-in.js"></script>
  </body>
</html>