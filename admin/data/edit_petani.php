<?php
error_reporting(0);
include ("../../inc/connect.php");
$id=$_GET["id"];
$result = mysqli_query($connect, "SELECT * FROM tabel_petani where id_petani = $id");
while($user_data = mysqli_fetch_array($result) )
{
    $id_petani = $user_data ["id_petani"];
    $nama = $user_data["Nama_Petani"];
    $alamat = $user_data["Alamat"];
    $luas = $user_data["Luas_Tanah"];
    $keterangan = $user_data["Keterangan"];
}
?>
<div class="card-body">
                     <h5 style="text-align: center;">Edit Data Petani</h5>
                     <br>
                    <form action="<?php echo $base_url; ?>/admin/data/action_update_petani.php" method="POST">
                    <input type="hidden" name="id_petani" value="<?php echo $id_petani; ?>">
                     
                        <div class="form-row">
                        <div class="col">   
                        <input type="text" name="Nama_Petani" class="form-control" value="<?php echo $nama; ?>" autofocus required>
                        </div>
                        <div class="col">
                        <input type="text" name="Alamat" class="form-control" value="<?php echo  $alamat; ?>" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="text" name="Luas_Tanah" class="form-control" value="<?php echo $luas; ?>" autofocus required>
                        </div>
                        <div class="col">
                        <input type="text" name="Keterangan" class="form-control" value="<?php echo $keterangan; ?>" autofocus required>
                        </div>
                        </div>
                        <br>
    
                        <div class="form-group">
                        </div>
                        <input type="submit" class="btn btn-primary" name="ajukan" value="Update Data"
                        onclick="return confirm('Apakah <?php echo $_SESSION['username']; ?> yakin update data ?')">


                        
                    </form>
</div>