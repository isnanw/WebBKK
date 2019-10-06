<?php
  $no = 4;
  $sql = $koneksi->query("select * from tbl_about where no='$no'");
  $tampil = $sql->fetch_assoc();
?>

<h2>Profiles</h2><hr>
<div class="panel-body">
  <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
  <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
  <a href="?page=about&aksi=ubah&no=4"><button class="btn btn-primary"><i class="fa fa-edit "></i> Update Data</button></a>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-red">
      <div class="panel-heading"><b>SEJARAH</b></div>
<!-- /.panel-heading -->
<div class="panel-body">
	<div><?php echo $tampil['Sejarah']; ?></div>
</div>

<!-- .panel-body -->
</div></div>
</form>
  <div class="col-lg-6">
    <div class="panel panel-red">
      <div class="panel-heading"><b>BKK</b></div>
      <!-- /.panel-heading -->
      <div class="panel-body">
      	<div><?php echo $tampil['BKK']; ?></div>
  </div>
<!-- .panel-body -->
</div></div>
  <div class="col-lg-6">
    <div class="panel panel-red">
      <div class="panel-heading"><b>GAMBAR</b></div>
      <!-- /.panel-heading -->
      <div class="panel-body">
      	<img width="200" height="100" src="page/about/img/<?php echo $tampil['Gambar']; ?>"><br>
  		</div>
<!-- .panel-body -->
    </div>
  </div>
  <div class="col-lg-6">
    <div class="panel panel-red">
      <div class="panel-heading"><b>VISI</b></div>
  		<!-- /.panel-heading -->
      <div class="panel-body">
      	<div><?php echo $tampil['Visi']; ?></div><br><br>    
      </div>
      <!-- .panel-body -->
    </div>
  </div>
  
  <div class="col-lg-6">
    <div class="panel panel-red">
      <div class="panel-heading"><b>MISI</b></div>
      <!-- /.panel-heading -->
      <div class="panel-body">
      	<div><?php echo $tampil['Misi']; ?></div>
  </div>
<!-- .panel-body -->
</div></div>
</body>
<footer>
  <div class="col-lg-12">
    <hr>
  </div>
</footer>

