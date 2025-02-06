<?php
include '../inc/connect.php';


$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];




if(isset($_POST['ajukan'])){
    $sql  = "INSERT INTO tabel_pesan (nama,email,subjek,pesan) values ('$nama','$email','$subjek','$pesan') ";
    mysqli_query($connect,$sql);
  
    echo '<script language="javascript"> location.href ="../contact.php"; </script>';
    return;

  }
  
  else
  
  {
  
  }
  
  ?>