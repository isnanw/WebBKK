<script type="text/javascript">
    function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
    oFReader.onload = function (oFREvent){
  document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>

<?php
  $no = @$_GET['no'];
  $sql = $koneksi->query("select * from tbl_industri where no='$no'");
  $tampil = $sql->fetch_assoc();
?>

<div class="panel-body">
 	<button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
  <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">Edit Data</div>
		<div class="panel-body">
    	<div class="row">
        <div class="col-md-6">
	        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
              <label>Gambar</label><br>
              <img id="uploadPreview" style="width: 300px; height: 150px;" src="page/industri/img/<?php echo $tampil['Gambar'];?>"/>
              <input required="" id="uploadImage" type="file" name="gambar" onchange="PreviewImage()" />
            </div>

            <div class="form-group">
              <label>Nama Perusahaan</label>
              <input class="form-control" name="Nama" value="<?php echo $tampil['Nama'];?>" />
						</div>

						<div class="form-group">
        		  <label>Alamat</label>
              <input class="form-control" name="Alamat" value="<?php echo $tampil['Alamat'];?>" />
						</div>

						<div class="form-group">
              <label>No HP</label>
              <input class="form-control" name="NoHp" value="<?php echo $tampil['NoHp'];?>" />
						</div>
					</div>
					<div class="col-md-6">
            <div class="form-group">
              <label>Deskripsi Singkat</label>
              <input maxlength="100" class="form-control" name="DeskripsiSingkat" value="<?php echo $tampil['DeskripsiSingkat'];?>" />
            </div>
				
						<div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" name="Deskripsi" rows="13">
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
	$Nama = @$_POST['Nama'];
	$Alamat = @$_POST['Alamat'];
  $DeskripsiSingkat = @$_POST['DeskripsiSingkat'];
	$Deskripsi = @$_POST['Deskripsi'];
	$NoHp = @$_POST['NoHp'];
	$simpan = @$_POST['simpan'];

	if (isset($_POST['simpan'])){
    $nama = $_FILES['gambar']['name'];
    $asal = $_FILES['gambar']['tmp_name'];

    unlink("page/industri/img/".$tampil['Gambar']);
    move_uploaded_file($asal, "page/industri/img/".$nama);

		$sql = $koneksi->query("update tbl_industri set Nama='$Nama', Alamat='$Alamat', NoHp='$NoHp', DeskripsiSingkat='$DeskripsiSingkat', Deskripsi='$Deskripsi', Gambar='$nama' where no='$no'");

		if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data Berasil Diupdate');
			window.location.href="?page=industri"
		</script>
		<?php
		}
 	}elseif ($simpan) {
 			echo "gagal upload";
	}
?>