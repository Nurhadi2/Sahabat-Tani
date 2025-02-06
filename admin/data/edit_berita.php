<?php
error_reporting(0);
include ("<?php echo $base_url; ?>inc/connect.php");
$id=$_GET["id"];
$result = mysqli_query($connect, "SELECT * FROM tb_berita where id = $id");
while($berita = mysqli_fetch_array($result) )
{
    $id_berita = $berita["id"];
    $judulBerita = $berita["judul_berita"];
    $deskripsiBerita = $berita["deskripsi_berita"];
    $gambarBerita = $berita["gambar_berita"];
    $kategoriBerita = $berita["kategori_berita"];
    $tanggalInput = $berita["tanggal_input"];
    $namaUser = $berita["nama_user"];
}
?>
<div class="card-body">
                     <h5 style="text-align: center;">Edit Berita</h5>
                     <br>
                    <form method="POST" enctype="multipart/form-data" action="<?php echo $base_url; ?>/admin/data/action_berita_update.php">
                    <input type="hidden"  name="id"  value='<?php echo $id; ?>' /> 
                        <div class="form-row">
                        <div class="col">   
                        <input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita" value="<?= $judulBerita?>" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="text" value=" <?= $_SESSION['username']; ?>" name="nama_user" class="form-control" placeholder="Nama Pembuat" readonly required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">   
                               <textarea name="deskripsi_berita" class="form-control" placeholder="Deskripsi Berita" rows="20" ><?= $deskripsiBerita?></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                             <input type="date" name="tanggal_input" class="form-control" placeholder="Tanggal Berita" value="<?= $tanggalInput?>" autofocus required>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="kategori_berita" value="<?= $kategoriBerita?>" class="form-control" placeholder="Kategori Berita" autofocus required>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col"> 
                                <img src="<?= $base_url?>/admin/images/<?php echo $gambarBerita?>" alt="gambar berita lama" width="100">
                                <input type="file" name="gambar_berita" class="form-control" placeholder="Gambar Berita"  autofocus >
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary" name="ajukan" value="Edit Data"
                        onclick="return confirm('Apakah <?php echo $_SESSION['username']; ?>, yakin data sudah benar ?')">


                        
                    </form>
</div>