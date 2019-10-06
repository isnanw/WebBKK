<h2>Data Pelamar</h2><hr>
  <div class="row">
    <div class="panel-body">
    <select class="form-select"  onchange="selectper(this.value)">
        <option value="">Pilih Perusahaan</option>
      <?php
        $sql = $koneksi->query("select * from tbl_loker");
        while ($dataa = $sql->fetch_assoc()) {
            ?>
            <option value="<?php echo $dataa['No']; ?>" id="per_<?php echo $dataa['No']; ?>"><?php echo $dataa['Perusahaan']; ?></option>
            <?php
        }
        ?>
    </select>
    <?php
    if (isset($_GET['perusahaan'])) {
        ?>
      <script>
       document.getElementById("per_<?php echo $_GET['perusahaan']; ?>").selected = true;
       </script>
       <a href="page/pelamar/laporan.php?perusahaan=<?php echo $_GET['perusahaan']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Laporan </button></a>
       <?php
    }
       else{
           ?>
           <a href="page/pelamar/laporan.php?perusahaan=all"><button type="button" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Laporan </button></a>
       <?php
        }?>
  </div>
  <script>
      var per;
      function selectper(per) {
              window.location = '<?php echo "?page=" . $_GET['page'] . "&perusahaan="; ?>'+per;
      }
  </script>
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
if(isset($_GET['perusahaan'])){
    if($_GET['perusahaan'] == ""){
        $sql = $koneksi->query("select * from tbl_pelamar");
    }
    else{
        $sql = $koneksi->query("select * from tbl_pelamar where id_loker='" . $_GET['perusahaan'] . "'");
    }
}
else{
    $sql = $koneksi->query("select * from tbl_pelamar");
}

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
