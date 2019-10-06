<?php
  $no = @$_GET['no'];
  $sql = $koneksi->query("select * from tbl_loker where no='$no'");
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
        <div class="col-md-6">
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
	                <label>Gambar</label><br>
                    <img id="uploadPreview" style="width: 450px; height: 150px;" src="page/loker/img/<?php echo $tampil['Gambar'];?>"/>
	                <input required="" id="uploadImage" type="file" name="image" onchange="PreviewImage()" />
                </div>

	            <div class="form-group">
                    <label>Perusahaan</label>
                    <input class="form-control" name="Perusahaan" value="<?php echo $tampil['Perusahaan'];?>" />
				</div>

                <div class="form-group">
                    <label>Posisi</label>
                    <input class="form-control" name="Posisi" value="<?php echo $tampil['Posisi'];?>" />
                </div>

                <div class="form-group">
                    <label>Lokasi</label>
                    <input class="form-control" name="Lokasi" value="<?php echo $tampil['Lokasi'];?>" />
                </div>
				
                <div class="form-group">
                    <label>Jurusan</label>
                    <input class="form-control" name="Jurusan" value="<?php echo $tampil['Jurusan'];?>" />
                </div>
				</div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Deskripsi Singkat</label>
                    <input maxlength="150" class="form-control" name="DeskripsiSingkat" value="<?php echo $tampil['DeskripsiSingkat'];?>" />
				</div>

				<div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="Deskripsi" rows="7">
                    	<?php 
                    		echo $tampil['Deskripsi'];
                    	?>
                    </textarea>
                </div>
				
                <div class="form-group">
                    <label>Persyaratan</label>
                    <textarea class="form-control" name="Persyaratan" rows="7">
                    	<?php 
                    		echo $tampil['Persyaratan'];
                    	?>
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
	$Perusahaan = @$_POST['Perusahaan'];
	$Jurusan = @$_POST['Jurusan'];
    $Posisi = @$_POST['Posisi'];
    $Lokasi = @$_POST['Lokasi'];
	$DeskripsiSingkat = @$_POST['DeskripsiSingkat'];
	$Deskripsi = @$_POST['Deskripsi'];
	$Persyaratan = @$_POST['Persyaratan'];
	$simpan = @$_POST['simpan'];

	if (isset($_POST['simpan'])){
        $nama = $_FILES['image']['name'];
        $asal = $_FILES['image']['tmp_name'];

        unlink("page/loker/img/".$tampil['Gambar']);
        move_uploaded_file($asal, "page/loker/img/".$nama);

		$sql = $koneksi->query("update tbl_loker set Perusahaan='$Perusahaan', Jurusan='$Jurusan', Posisi='$Posisi', Lokasi='$Lokasi', DeskripsiSingkat='$DeskripsiSingkat', Deskripsi='$Deskripsi', Persyaratan='$Persyaratan', Gambar='$nama' where no='$no'");

		if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data Berasil Diupdate');
			window.location.href="?page=loker"
		</script>
		<?php
		}
 	}elseif ($simpan) {
 			echo "gagal upload";
	}
?>