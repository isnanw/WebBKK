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
  $sql = $koneksi->query("select * from tbl_about where No='4'");
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
        <div class="col-md-12">
	        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
              <label>Gambar</label><br>
              <img id="uploadPreview" style="width: 300px; height: 150px;" src="page/about/img/<?php echo $tampil['Gambar'];?>"/>
              <input required="" id="uploadImage" type="file" name="gambar" onchange="PreviewImage()" />
            </div><hr>

						<div class="form-group">
              <label>Sejarah</label>
              <textarea class="form-control" name="Sejarah" rows="5">
             		<?php echo $tampil['Sejarah'];?>
              </textarea>
            </div><hr>

            <div class="form-group">
              <label>BKK SMKN 1 Kra</label>
              <textarea class="form-control" name="BKK" rows="15">
             		<?php echo $tampil['BKK'];?>
              </textarea>
            </div><hr>

            <div class="form-group">
              <label>Visi</label>
              <textarea class="form-control" name="Visi" rows="3">
             		<?php echo $tampil['Visi'];?>
              </textarea>
            </div><hr>

            <div class="form-group">
              <label>Misi</label>
              <textarea class="form-control" name="Misi" rows="5">
             		<?php echo $tampil['Misi'];?>
              </textarea>
            </div><hr>

            <div>
            	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            </div>
          </form>
        </div>
    </div>
</div></div></div></div>

<?php
  $no = 4;
	$Sejarah = @$_POST['Sejarah'];
	$BKK = @$_POST['BKK'];
  $Visi = @$_POST['Visi'];
	$Misi = @$_POST['Misi'];
	$simpan = @$_POST['simpan'];

	if (isset($_POST['simpan'])){
    $nama = $_FILES['gambar']['name'];
    $asal = $_FILES['gambar']['tmp_name'];

    unlink("page/about/img/".$tampil['Gambar']);
    move_uploaded_file($asal, "page/about/img/".$nama);

		$sql = $koneksi->query("UPDATE tbl_about set Sejarah='$Sejarah', BKK='$BKK', Visi='$Visi', Misi='$Misi', Gambar='$nama' where no='$no'");

		if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data Berasil Diupdate');
			window.location.href="?page=about"
		</script>
		<?php
		}
 	}elseif ($simpan) {
 			echo "gagal upload";
	}
?>