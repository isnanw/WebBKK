<h2>Lowongan Pekerjaan</h2><hr>
<div class="row">
    <div class="panel-body">
        <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
        <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
        <a href="?page=loker&aksi=tambah"><button type="button" class="btn btn-danger"><i class="fa fa-plus"></i> Tambah Data</button></a>
    </div>
<div class="col-md-12">
<!-- Advanced Tables -->
    <div class="panel panel-primary">
        <div class="panel-heading">Tables</div>
            <div class="panel-body">                        
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th width="60">No</th>
                        <th width="100" height="50">Gambar</th>
                        <th width="100">Perusahaan</th>
                        <th>Jurusan</th>
                        <th>Posisi</th>
                        <th>Lokasi</th>
                        <th width="110">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
    $no = 1;
    $sql = $koneksi->query("select * from tbl_loker");
    while ($data= $sql->fetch_assoc()){
?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><img width="80" height="80" src="page/loker/img/<?php echo $data['Gambar']; ?>"></td>
                        <td width="200"><?php echo $data['Perusahaan']; ?></td>
                        <td><?php echo $data['Jurusan']; ?></td>
                        <td><?php echo $data['Posisi']; ?></td>
                        <td><?php echo $data['Lokasi']; ?></td>
                        <td>
                        <a href="?page=loker&aksi=ubah&no=<?php echo $data['No']; ?>"><button class="btn btn-outline btn-primary"><i class="fa fa-edit "></i></button></a>
                        <a onclick="return confirm('Anda Yakin Akan Menghapus Data?')" href="?page=loker&aksi=del&no=<?php echo $data['No']; ?>"><button class="btn btn-outline btn-danger"><i class="fa fa-times "></i></button></a>
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