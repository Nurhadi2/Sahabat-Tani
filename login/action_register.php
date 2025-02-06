
<?php

    session_start();

    include ('../inc/connect.php');

    $username	= $_POST['user'];
    $email      = $_POST['email'];
    $password	= md5(trim($_POST['password']));
    $submit     = $_POST['submit'];

    if (isset($submit))
    {

        //insert into database
        $sql        = "INSERT INTO table_user (username,password,email) values ('$username','$password','$email') ";
        mysqli_query($connect,$sql) or die(mysqli_error($connect));

        echo '<script language="javascript"> location.href ="'.$base_url.'/login/register.php?msg=success"; </script>';

    }

    else

    {
        echo '<script language="javascript"> location.href ="'.$base_url.'/login/register.php?msg=error"; </script>';
    }

?>
