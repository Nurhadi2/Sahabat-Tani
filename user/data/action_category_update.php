<?php
include '../../inc/connect.php';

$id_category = $_POST['id_category'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$waktu = $_POST['waktu'];
$kontak = $_POST['kontak'];
$lokasi = $_POST['lokasi'];
$maps = $_POST['maps'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];

//image
$foto      = $_FILES['foto']['name'];
$foto_tmp  = $_FILES['foto']['tmp_name'];
$foto_size = $_FILES['foto']['size'];

// Rename image
$update_foto 	= date('dmYHis')."-sahabattani-".$foto;

if (isset($_POST['ajukan'])){


    if (!empty($foto))
    {
    #path
    $path = $_SERVER['DOCUMENT_ROOT'] . '/sahabat_tani/admin/images/'.$foto;
    //echo "hasil: ".$path;

    //update database
    $sql ="UPDATE table_category SET nama='$nama', foto='$update_foto', harga='$harga', waktu='$waktu', kontak='$kontak',
    lokasi='$lokasi', maps='$maps', deskripsi='$deskripsi', kategori='$kategori' WHERE id_category='$id_category' ";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));

    //upload to folder
    $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/sahabat_tani/admin/images/';
    move_uploaded_file($foto_tmp, $uploadfile . $update_foto);
    //echo $uploadfile.$new_foto;

    }

    else
    {

    //update database
    $sql ="UPDATE table_category SET nama='$nama', harga='$harga', waktu='$waktu', kontak='$kontak',
    lokasi='$lokasi', maps='$maps', deskripsi='$deskripsi', kategori='$kategori' WHERE id_category='$id_category' ";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));


    }


    echo '<script language="javascript"> location.href ="'.$base_url.'/user/category"; </script>';


}

else

{


}
?>
