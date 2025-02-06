<?php
include '../../inc/connect.php';


$nama = $_POST['nama_user'];
$judul_berita = $_POST['judul_berita'];
$deskripsi_berita = $_POST['deskripsi_berita'];
$kategori_berita = $_POST['kategori_berita'];
$tanggal_input = $_POST['tanggal_input'];


$foto  = $_FILES['gambar_berita']['name'];
$foto_tmp  = $_FILES['gambar_berita']['tmp_name'];
$foto_size = $_FILES['gambar_berita']['size'];

$foto_baru	= date('dmYHis')."-SAHABAT_TANI-".$foto;



if(isset($_POST['ajukan'])){
  $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/admin/images/';
  move_uploaded_file($_FILES['gambar_berita']['tmp_name'], $uploadfile . $foto_baru);

  $sql  = "INSERT INTO tb_berita (nama_user, judul_berita, deskripsi_berita, tanggal_input, gambar_berita, kategori_berita) values ('$nama','$judul_berita','$deskripsi_berita','$tanggal_input','$foto_baru','$kategori_berita') ";
  mysqli_query($connect,$sql);



  echo '<script language="javascript"> location.href ="'.$base_url.'/admin/berita"; </script>';
  return;


}

else

{

}

?>
