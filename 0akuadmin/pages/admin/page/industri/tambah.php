<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>

  <div id="wrapper">
  <!-- Page Content -->
    <div class="row">
	    <div class="panel-body">
       	<button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
        <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
      </div>
      <div class="col-lg-12">
        <div class="panel panel-primary">
          <div class="panel-heading">Tambah Data Industri</div>
          <!-- /.panel-heading -->
            <div class="panel-body">
              <div class="dataTable_wrapper">
                <div class="col-lg-6">
                  <form role="form" action="" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>Gambar</label><br>
										<img id="uploadPreview" style="width: 450px; height: 150px;" />
										<input id="uploadImage" type="file" name="gambar" onchange="PreviewImage();" /><br>
                  </div>
                  <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input class="form-control" type="text" name="Nama" placeholder="Nama Perusahaan">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                  	<input class="form-control" type="text" name="Alamat" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <label>No HP</label>
                  	<input class="form-control" type="text" name="NoHp" placeholder="Nomer yang bisa dihubungi">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Deskripsi Singkat</label>
                  	<input maxlength="100" class="form-control" type="text" name="DeskripsiSingkat" placeholder="Isikan Deskripsi Singkat Untuk Tampilan Depan">
                  </div>
                  <div class="form-group">
                  	<label>Deskripsi</label>
                    <textarea class="form-control" rows="13" name="Deskripsi"></textarea>
                  </div>
                  <div class="form-group">
                  	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary"> 
                    <button type="reset" class="btn btn-default" onClick="history.go(0)">Reset</button>
                    <button type="submit" class="btn btn-danger" onClick="history.go(-1)">Batal</button>
                  </div>                                       
                 	</form>
                </div>
              </div>
            <!-- /.table-responsive -->
            </div>
          <!-- /.panel-body -->
          </div>
        <!-- /.panel -->
        </div>
      </div>
    </div>
  </div>
</div>

<?php
	$Nama = @$_POST['Nama'];
	$Alamat = @$_POST['Alamat'];
	$NoHp = @$_POST['NoHp'];
    $DeskripsiSingkat = @$_POST['DeskripsiSingkat'];
	$Deskripsi = @$_POST['Deskripsi'];
	
	if (isset($_POST['simpan'])){
        $nama = $_FILES['gambar']['name'];
        $asal = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($asal, "page/industri/img/".$nama);	
		$sql = $koneksi->query("insert into tbl_industri (Nama, Alamat, NoHp, DeskripsiSingkat, Deskripsi, Gambar) values('$Nama', '$Alamat','$NoHp','$DeskripsiSingkat','$Deskripsi','$nama')");

		if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data Berasil Disimpan');
			window.location.href="?page=industri"
		</script>
		<?php
		}
 	}elseif (@$simpan) {
 			echo "gagal upload";
	}

?>
