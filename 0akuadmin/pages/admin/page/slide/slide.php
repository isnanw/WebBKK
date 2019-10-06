<h2>Data Slide</h2><hr>
<div class="row">
    <div class="panel-body">
                <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
                <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
                <a href="?page=slide&aksi=tambah"><button type="button" class="btn btn-danger"><i class="fa fa-plus"></i> Tambah Data</button></a>
              </div>
    <div class="col-md-12">
        <!-- Advanced Tables -->
            <div class="panel panel-primary">
                
                    <div class="panel-body">                        
                        <div class="table-responsive">
                            <table class="table dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Gambar</th>
                                        <th>Diskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
    $no = 1;
    $sql = $koneksi->query("select * from tbl_slide");
    while ($data= $sql->fetch_assoc()){
?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td width="150"><?php echo $data['Title']; ?></td>
                                    <td width="200"><img width="200" height="100" src="page/slide/img/<?php echo $data['Gambar']; ?>"></td>
                                    <td><?php echo $data['Deskripsi']; ?></td>
                                    <td width="100">
                                        <a href="?page=slide&aksi=ubah&no=<?php echo $data['No']; ?>"><button class="btn btn-outline btn-primary"><i class="fa fa-edit "></i></button></a>
                                        <a onclick="return confirm('Anda Yakin Akan Menghapus Data?')" href="?page=slide&aksi=hapus&no=<?php echo $data['No']; ?>"><button class="btn btn-outline btn-danger"><i class="fa fa-times "></i></button></a>
                                        
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