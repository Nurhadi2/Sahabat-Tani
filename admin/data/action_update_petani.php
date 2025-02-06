<?php
include '../../inc/connect.php';

$id_petani = $_POST["id_petani"];
$nama = $_POST["Nama_Petani"];
$alamat = $_POST["Alamat"];
$luas = $_POST["Luas_Tanah"];
$keterangan =$_POST["Keterangan"];


if(isset($_POST['ajukan'])){
  $sql ="UPDATE tabel_petani SET Nama_Petani='$nama', Alamat='$alamat', Luas_Tanah='$luas',
  Keterangan='$keterangan' WHERE id_petani='$id_petani' ";
  mysqli_query($connect,$sql);

  echo '<script language="javascript"> location.href ="'.$base_url.'/admin/petani"; </script>';
  return;


}

else

{

}

?>
