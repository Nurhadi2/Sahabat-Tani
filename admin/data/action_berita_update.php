<?php
include '../../inc/connect.php';

$id = $_POST['id'];
$nama = $_POST['nama_user'];
$judul_berita = $_POST['judul_berita'];
$deskripsi_berita = $_POST['deskripsi_berita'];
$kategori_berita = $_POST['kategori_berita'];
$tanggal_input = $_POST['tanggal_input'];


$foto  = $_FILES['gambar_berita']['name'];
$foto_tmp  = $_FILES['gambar_berita']['tmp_name'];
$foto_size = $_FILES['gambar_berita']['size'];

$foto_baru	= date('dmYHis')."-SAHABAT_TANI-".$foto;

if (isset($_POST['ajukan'])){


    if (!empty($foto))
    {

    //remove old foto first
    // $sql_foto    = "SELECT * from table_category where id_category='$id_category' ";
    // $result_foto = mysqli_query($connect,$sql_foto);
    // $data_foto   = mysqli_fetch_array($result_foto);

    #path
    $path = $_SERVER['DOCUMENT_ROOT'] . '/admin/images/'.$foto;
    //echo "hasil: ".$path;
    chmod($path,777);
    unlink($path);


    //update database
    $sql ="UPDATE tb_berita SET nama_user='$nama', gambar_berita='$foto_baru', judul_berita='$judul_berita', tanggal_input='$tanggal_input', kategori_berita='$kategori_berita',
    deskripsi_berita='$deskripsi_berita' WHERE id='$id' ";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));

   //upload to folder
   $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/admin/images/';
   move_uploaded_file($foto_tmp, $uploadfile . $foto_baru);

    }

    else
    {

    //update database
    $sql ="UPDATE tb_berita SET nama_user='$nama',  judul_berita='$judul_berita', tanggal_input='$tanggal_input', kategori_berita='$kategori_berita',
    deskripsi_berita='$deskripsi_berita' WHERE id='$id' ";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));


    }


    echo '<script language="javascript"> location.href ="'.$base_url.'/admin/berita"; </script>';


}

else

{


}




















// if(isset($_POST['ajukan'])){
//   $sql ="UPDATE table_category SET nama='$nama', foto='$foto', harga='$harga', waktu='$waktu', kontak='$kontak',
//   lokasi='$lokasi', maps='$maps', deskripsi='$deskripsi', kategori='$kategori' WHERE id_category='$id_category' ";
//   mysqli_query($connect,$sql);

//   echo '<script language="javascript"> location.href ="'.$base_url.'/admin/category"; </script>';
//   return;


// }

// else

// {

// }



?>
