<?php
  $no = @$_GET['no'];
  $sql = $koneksi->query("select * from tbl_galeri where no='$no'");
  $tampil = $sql->fetch_assoc();
?>
<div class="panel-body">
 	<button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
  <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
</div>
<div class="panel panel-primary">
<div class="panel-heading">
	Edit Data
</div>
<div class="panel-body">
  <div class="row">
    <div class="col-md-12">
      <form method="POST" action="" enctype="multipart/form-data">
<script type="text/javascript">
    function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
    oFReader.onload = function (oFREvent){
  document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
	    <div class="form-group">
        <label>Galeri</label><br>
          <img id="uploadPreview" style="width: 300px; height: 150px;" src="page/galeri/img/<?php echo $tampil['Gambar'];?>"/>
        <input required="" id="uploadImage" type="file" name="Gambar" onchange="PreviewImage()" />
      </div>
    <div class="form-group">
      <label>Judul</label>
      <input class="form-control" name="Judul" value="<?php echo $tampil['Judul'];?>" />
		</div>
		<div class="form-group">
      <label>Deskripsi</label>
      <textarea class="form-control" name="Deskripsi" rows="9">
	     	<?php echo $tampil['Deskripsi'];?>
      </textarea>
    </div>
			<div>
       	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
      </div>
     	</form>
    </div>
  </div>
</div></div></div></div>

<?php
	if (isset($_POST['simpan'])){
    $judul = $_POST['Judul'];
    $deskripsi = $_POST['Deskripsi'];
    $nama = $_FILES['Gambar']['name'];
    $asal = $_FILES['Gambar']['tmp_name'];
    $ukuran = $_FILES['Gambar']['size'];

    if ($ukuran <= 1000000) {        
      unlink("page/galeri/img/".$tampil['Gambar']);
      move_uploaded_file($asal, "page/galeri/img/".$nama);

      $sql = $koneksi->query("update tbl_galeri set Gambar='$nama', Judul='$judul', Deskripsi='$deskripsi' where no='$no'");
      if ($sql) {
?>
      <script type="text/javascript">
        alert ('Data Berasil Diupdate');
        window.location.href="?page=galeri"
      </script>
<?php
      }
    }
      else{
          echo "<script> alert ('Gambar Terlalu Besar');</script>";
      }       
  }
?>