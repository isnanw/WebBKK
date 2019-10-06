<h2>Data Our Clients</h2><hr>
<div class="row">
    <div class="panel-body">
                <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
                <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
                <a href="?page=our&aksi=tambah"><button type="button" class="btn btn-danger"><i class="fa fa-plus"></i> Tambah Data</button></a>
              </div>
    <div class="col-md-12">
        <!-- Advanced Tables -->
            <div class="panel panel-primary">
                
                    <div class="panel-body">                        
                        <div class="table-responsive">
                            <table class="table dataTable table-bordered" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th width="50">No</th>
                                        <th width="200">Title</th>
                                        <th width="300">Gambar</th>
                                        <th width="100">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
    $no = 1;
    $sql = $koneksi->query("select * from tbl_logo");
    while ($data= $sql->fetch_assoc()){
?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['Title']; ?></td>
                                    <td width="100"><img width="100" height="50" src="page/our/img/<?php echo $data['Gambar']; ?>"></td>
                                    <td>
                                        <a href="?page=our&aksi=ubah&id=<?php echo $data['id']; ?>"><button class="btn btn-outline btn-primary"><i class="fa fa-edit "></i></button></a>
                                        <a onclick="return confirm('Anda Yakin Akan Menghapus Data?')" href="?page=our&aksi=hapus&id=<?php echo $data['id']; ?>"><button class="btn btn-outline btn-danger"><i class="fa fa-times "></i></button></a>
                                        
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
   </body>
</html>

