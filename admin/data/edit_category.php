<?php
error_reporting(0);
include ("../../inc/connect.php");
$id=$_GET["id"];
$result = mysqli_query($connect, "SELECT * FROM table_category where id_category = $id");
while($user_data = mysqli_fetch_array($result) )
{
    $id_category = $user_data["id_category"];
    $nama = $user_data["nama"];
    $foto = $user_data["foto"];
    $harga = $user_data["harga"];
    $waktu = $user_data["waktu"];
    $kontak = $user_data["kontak"];
    $lokasi = $user_data["lokasi"];
    $maps = $user_data["maps"];
    $deskripsi = $user_data["deskripsi"];
    $kategori = $user_data["kategori"];
}

?>
<div class="card-body">
                     <h5 style="text-align: center;">Edit Data Category</h5>
                     <br>
                    <form  method="POST" enctype="multipart/form-data" action="<?php echo $base_url; ?>/admin/data/action_category_update.php">
                    <input type="hidden"  name="id_category"  value='<?php echo $id_category; ?>' /> 


                     
                    <div class="form-row">
                        <div class="col">   
                        <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="text" name="harga" class="form-control" value="<?php echo $harga; ?>" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">   
                        <input type="date" name="waktu" class="form-control" value="<?php echo $waktu; ?>" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="text" name="kontak" class="form-control" value="<?php echo $kontak; ?>" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="text" name="lokasi" class="form-control" value="<?php echo $lokasi; ?>" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="text" name="maps" class="form-control" value="<?php echo $maps; ?>" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">   
                        <input type="text" name="kategori" class="form-control" value="<?php echo $kategori; ?>" autofocus required>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="file" name="foto" class="form-control" value="<?php echo $foto; ?>" autofocus>
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col">
                        <input type="text" name="deskripsi" class="form-control" value="<?php echo $deskripsi; ?>" autofocus required>
                        </div>
                        </div>
                        <br>
    
                        <div class="form-group">
                        </div>
                        <input type="submit" class="btn btn-primary" name="ajukan" value="Update Data"
                        onclick="return confirm('Apakah <?php echo $_SESSION['username']; ?> yakin update data ?')">
                        
                    </form>
</div>