<?php
error_reporting(0);
include ("<?php echo $base_url; ?>inc/connect.php");
// include ("action_petani.php");
?>
<div class="card-body">
                     <h5 style="text-align: center;">Tambah Berita</h5>
                     <br>
                    <form action="<?php echo $base_url; ?>/admin/data/action_berita.php" method="POST" enctype="multipart/form-data">
                     
                        <div class="form-row">
                        <div class="col">   
                        <input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita" autofocus required>
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
                               <textarea name="deskripsi_berita" id="deskripsiBerita" class="form-control" placeholder="Deskripsi Berita" rows="20" ></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                             <input type="date" name="tanggal_input" class="form-control" placeholder="Tanggal Berita" autofocus required>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="kategori_berita" class="form-control" placeholder="Kategori Berita" autofocus required>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                              <input type="file" name="gambar_berita" class="form-control" placeholder="Gambar Berita"  autofocus required>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary" name="ajukan" value="Tambah Data"
                        onclick="return confirm('Apakah <?php echo $_SESSION['username']; ?>, yakin data sudah benar ?')">


                        
                    </form>
</div>