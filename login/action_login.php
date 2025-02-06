<?php

    session_start();

    include ('../inc/connect.php');

    $email	= $_POST['email'];
    $password	= md5(trim($_POST['password']));

    //get email from database
    $sql		= "select  * from table_user where email='$email' and password='$password' ";
    $sql_login	= mysqli_query($connect,$sql) or die(mysqli_error());
    $hasil 		= mysqli_fetch_array($sql_login);


    if(mysqli_num_rows($sql_login) == 1) 
        {

            $_SESSION['username'] = $hasil['username'];
            $_SESSION['email'] = $hasil['email'];

?>
        <script language ="javascript">location.href ="<?= $base_url ?>/admin/index.php"; </script>
<?php

        }
    else {

?>

        <script language ="javascript">location.href ="<?= $base_url ?>/login/login.php?msg=error"; </script>
    
    
<?php


    /*echo '<div class="alert bg-red alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                username atau password anda salah
            </div>';
    */
    }

?>
