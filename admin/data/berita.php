<?php
include ("../../inc/connect.php");

if (isset($_GET['id']))
{
    $id_delete = $_GET['id'];
    
    
    mysqli_query($connect,"delete from tb_berita where id='$id_delete'");


}
?>
<div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Berita</h3>
                                
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Berita</th>
                                            <th>Gambar Berita</th>
                                            <th>Deskripsi Berita</th>
                                            <th>Diposting Oleh</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                     <?php
                                        $no     =1;
                                        include ("../../inc/connect.php");
                                        $sql    = "SELECT * from tb_berita";
                                        $result = mysqli_query($connect,$sql);
                                        while ($data =mysqli_fetch_array($result))
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['judul_berita'];?></td>
											<td>
                                                <img src="<?= $base_url?>/admin/images/<?php echo $data['gambar_berita'];?>" alt="gambar berita" width="200">
                                            </td>
                                            <td>
                                                <?php echo
                                                    str_word_count($data['deskripsi_berita']) > 70 ?  substr($data['deskripsi_berita'], 0,100)."...." : $data['deskripsi_berita'] ;
                                                ?>
                                            </td>
                                            <td><?php echo $data['nama_user'];?></td>
                                            <td>
                                            <span> <a href='<?php echo $base_url ?>/admin/edit-berita/<?php echo $data['id'];?>' class='btn btn-info btn-sm waves-effect'><i class='fas fa-edit'>&emsp;Edit</i></a> </span>
                                            <span> <a href='<?php echo $base_url ?>/admin/berita/delete/<?php echo $data['id'];?>' class='btn btn-danger btn-sm waves-effect' onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?') "><i class='fas fa-trash'>&emsp;Hapus</i></a> </span>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
</div>