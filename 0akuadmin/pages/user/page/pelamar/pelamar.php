<h2>Data Pesan</h2><hr>
  <div class="row">
    <div class="panel-body">
    <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
    <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
  </div>
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-primary">
<div class="panel-heading">Tables</div>
<div class="panel-body">                        
<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th width="60px">No</th>
            <th>id_lamar</th>
            <th>Nama</th>
            <th>Sekolah</th>
            <th>Jurusan</th>
            <th width="60px">TB</th>
            <th width="60px">BB</th>
            <th width="75px">Nilai</th>
            <th>Perusahaan</th>
            <th>Posisi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
<?php
$no = 1;
$sql = $koneksi->query("select * from tbl_pelamar");
while ($data = $sql->fetch_assoc()) {
?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id_pelamar']."/"; echo $data['id_lamar']; ?></td>
            <td><?php echo $data['NamaLengkap']; ?></td>
            <td><?php echo $data['Sekolah']; ?></td>
            <td><?php echo $data['Jurusan']; ?></td>
            <td><?php echo $data['TB']; ?></td>
            <td><?php echo $data['BB']; ?></td>
            <td><?php echo $data['Nilai']; ?></td>
            <td><?php echo $data['Perusahaan']; ?></td>
            <td><?php echo $data['Posisi']; ?></td>
            <td>
            <a onclick="return confirm('Anda Yakin Akan Menghapus Data?')" href="?page=pelamar&aksi=hapus&id_pelamar=<?php echo $data['id_pelamar']; ?>"><button class="btn btn-outline btn-danger"><i class="fa fa-times "></i></button></a>                  
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
