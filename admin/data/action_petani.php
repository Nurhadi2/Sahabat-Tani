<?php
include '../../inc/connect.php';


$nama = $_POST['nama_petani'];
$alamat = $_POST['alamat'];
$luas = $_POST['luas_tanah'];
$keterangan = $_POST['keterangan'];





if(isset($_POST['ajukan'])){
  $sql  = "INSERT INTO tabel_petani (Nama_Petani,Alamat,Luas_Tanah,Keterangan) values ('$nama','$alamat','$luas','$keterangan') ";
  mysqli_query($connect,$sql);

  echo '<script language="javascript"> location.href ="'.$base_url.'/admin/petani"; </script>';
  return;


}

else

{

}

?>
