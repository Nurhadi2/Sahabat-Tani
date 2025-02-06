<?php
error_reporting(0);
include ("<?php echo $base_url; ?>inc/connect.php");
// include ("action_petani.php");
?>
<div class="card-body">
                     <h5 style="text-align: center;">Tambah Data Petani</h5>
                     <br>
                    <form action="<?php echo $base_url; ?>/admin/data/action_petani.php" method="POST">
                     
                        <div class="form-row">
                        <div class="col">   
                        <input type="text" name="nama_petani" class="form-control" placeholder="Nama Petani" autofocus required>
                        </div>
                        <div class="col">
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="text" name="luas_tanah" class="form-control" placeholder="Luas Tanah" autofocus required>
                        </div>
                        <div class="col">
                        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" autofocus required>
                        </div>
                        </div>
                        <br>
    
                        <div class="form-group">
                        </div>
                        <input type="submit" class="btn btn-primary" name="ajukan" value="Tambah Data"
                        onclick="return confirm('Apakah <?php echo $_SESSION['username']; ?>, yakin data sudah benar ?')">
                        
                    </form>
</div>