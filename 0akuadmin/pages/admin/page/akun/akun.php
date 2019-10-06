<h2>Data Akun</h2><hr>
<div class="row">
    <div class="panel-body">
                <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
                <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
                <a href="?page=akun&aksi=tambah"><button type="button" class="btn btn-danger"><i class="fa fa-plus"></i> Tambah Data</button></a>
              </div>
    <div class="col-md-12">
        <!-- Advanced Tables -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Tables                    
                </div>
                    <div class="panel-body">                        
                        <div class="table-responsive">
                            <table class="table dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
    $no = 1;
    $sql = $koneksi->query("select * from tbl_user");
    while ($data= $sql->fetch_assoc()){
?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td><?php echo $data['level']; ?></td>
                                    <td>
                                        <a href="?page=akun&aksi=ubah&no=<?php echo $data['No']; ?>"><button class="btn btn-outline btn-primary"><i class="fa fa-edit "></i></button></a>
                                        <a onclick="return confirm('Anda Yakin Akan Menghapus Data?')" href="?page=akun&aksi=hapus&no=<?php echo $data['No']; ?>"><button class="btn btn-outline btn-danger"><i class="fa fa-times "></i></button></a>
                                        
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
