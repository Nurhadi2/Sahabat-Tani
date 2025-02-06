<?php
error_reporting(0);
include ("<?php echo $base_url; ?>inc/connect.php");
// include ("action_petani.php");
?>
<div class="card-body">
                     <h5 style="text-align: center;">Tambah Data Category</h5>
                     <br>
                    <form action="<?php echo $base_url; ?>/admin/data/action_category.php" method="POST" enctype="multipart/form-data">
                     
                        <div class="form-row">
                        <div class="col">   
                        <input type="text" name="nama" class="form-control" placeholder="nama" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="number" name="harga" class="form-control" placeholder="harga" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">   
                                <input type="date" name="waktu" class="form-control" placeholder="waktu" autofocus required>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="number" name="kontak" class="form-control" placeholder="kontak" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="text" name="lokasi" class="form-control" placeholder="lokasi" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="text" name="maps" class="form-control" placeholder="maps" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">   
                        <input type="text" name="kategori" class="form-control" placeholder="kategori" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="file" name="foto" class="form-control" placeholder="foto" accept="image/png, image/jpeg" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <textarea class="form-control" name="deskripsi" rows="5" placeholder="deskripsi" autofocus required></textarea>
                        </div>
                        </div>
                        <br>
    
                        <div class="form-group">
                        </div>
                        <input type="submit" class="btn btn-primary" name="ajukan" value="Tambah Data"
                        onclick="return confirm('Apakah <?php echo $_SESSION['username']; ?>, yakin data sudah benar ?')">


                        
                    </form>
</div>