<?php
include '../../inc/connect.php';


$nama = $_POST['nama'];
$harga = $_POST['harga'];
$waktu = $_POST['waktu'];
$kontak = $_POST['kontak'];
$lokasi = $_POST['lokasi'];
$maps = $_POST['maps'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];


$foto  = $_FILES['foto']['name'];
$foto_tmp  = $_FILES['foto']['tmp_name'];
$foto_size = $_FILES['foto']['size'];

$foto_baru	= date('dmYHis')."-SAHABAT_TANI-".$foto;



if(isset($_POST['ajukan'])){
  $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/sahabat_tani/admin/images/';
  move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile . $foto_baru);

  $sql  = "INSERT INTO table_category (nama, foto, harga, waktu, kontak, lokasi, maps, deskripsi, kategori) values ('$nama','$foto_baru','$harga','$waktu','$kontak','$lokasi','$maps','$deskripsi','$kategori') ";
  mysqli_query($connect,$sql);



  echo '<script language="javascript"> location.href ="'.$base_url.'/user/category"; </script>';
  return;


}

else

{

}

?>
