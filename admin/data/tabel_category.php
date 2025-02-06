<?php
include ("../../inc/connect.php");

if (isset($_GET['id']))
{
    $id_delete = $_GET['id'];
    
    
    mysqli_query($connect,"delete from table_category where id_category='$id_delete'");


}
?>
<div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="input-category">
                                            <i class="zmdi zmdi-plus"></i>add item</a>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                <div class="container-fluid">
 
   
                                <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>nama</th>
											<th>foto</th>
                                            <th>harga</th>
                                            <th>waktu</th>
                                            <th>kontak</th>
                                            <th>lokasi</th>
                                            <th>maps</th>
                                            <th>deskripsi</th>
                                            <th>kategori</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                     <?php
                                        $no     =1;
                                        include ("../../inc/connect.php");
                                        $sql    = "SELECT * from table_category";
                                        $result = mysqli_query($connect,$sql);
                                        while ($data =mysqli_fetch_array($result))
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['nama'];?></td>
											<td>
                                            <?php
                                                if (!empty($data['foto']))
                                                    {
                                                    $foto = $data['foto'];
                                                    echo  "<image height='95px' width='95px' src='".$base_url."/admin/images/".$foto."'> </image>";
                                                    }
                                                    else 
                                                    {
                                                    echo  "<image height='95px' width='95px' src='".$base_url."/admin/images/noimage.png'; ?> </image>";

                                                    }
                                            ?>
                                            
                                            </td>
                                            <td><?php echo $data['harga'];?></td>
                                            <td><?php echo $data['waktu'];?></td>
                                            <td><?php echo $data['kontak'];?></td>
											<td><?php echo $data['lokasi'];?></td>
                                            <td><?php echo $data['maps'];?></td>
                                            <td><?php echo $data['deskripsi'];?></td>
                                            <td><?php echo $data['kategori'];?></td>
                                            <td>
                                            <span> <a href='<?php echo $base_url ?>/admin/edit-category/<?php echo $data['id_category'];?>' class='btn btn-info btn-sm waves-effect'><i class='fas fa-edit'>&emsp;Edit</i></a> </span>
                                            <span> <a href='<?php echo $base_url ?>/admin/category/delete/<?php echo $data['id_category'];?>' class='btn btn-danger btn-sm waves-effect' onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?') "><i class='fas fa-trash'>&emsp;Hapus</i></a> </span>
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