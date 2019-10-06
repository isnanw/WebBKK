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
                <div class="panel-heading">
                    Tambah Data Loker
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <div class="col-lg-6">
                        <form role="form" action="" method="POST" enctype="multipart/form-data">
		      		        <div class="form-group">
			     			<label>Gambar</label><br>
							<img id="uploadPreview" style="width: 150px; height: 150px;" />
							<input required="" id="uploadImage" type="file" name="gambar" onchange="PreviewImage();" />
				    		<br>
					        </div>
                       		<div class="form-group">
                                <input placeholder="Nama Perusahaan" required="" class="form-control" type="text" name="Perusahaan">
                            </div>
                    		<div class="form-group">
                                <input placeholder="Jurusan yang diambil" required="" class="form-control" type="text" name="Jurusan">
                            </div>
                            <div class="form-group">
                                <input placeholder="Posisi Pekerjaan" required="" class="form-control" type="text" name="Posisi">
                            </div>
                            <div class="form-group">
                                <input placeholder="Lokasi Perusahaan" required="" class="form-control" type="text" name="Lokasi">
                            </div>
                            <div class="form-group">
                                <input placeholder="Deskripsi Singkat" maxlength="150" class="form-control" type="text" name="DeskripsiSingkat">
                            </div>
                            </div>
                            <div class="col-lg-6">

                            <div class="form-group">
                                <label>Deskripsi Lengkap</label>
                                <textarea class="form-control" rows="8" name="Deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Persyaratan</label>
                                <textarea class="form-control" rows="8" name="Persyaratan"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"> 
                                <button type="reset" class="btn btn-default" onClick="history.go(0)">Reset</button>
                                <button type="submit" class="btn btn-danger" onClick="history.go(-1)">Batal</button>
                            </div>                                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<?php
	$Perusahaan = @$_POST['Perusahaan'];
	$Jurusan = @$_POST['Jurusan'];
    $Posisi = @$_POST['Posisi'];
    $Lokasi = @$_POST['Lokasi'];
	$DeskripsiSingkat = @$_POST['DeskripsiSingkat'];
	$Deskripsi = @$_POST['Deskripsi'];
	$Persyaratan = @$_POST['Persyaratan'];

	if (isset($_POST['simpan'])){
        $nama = $_FILES['gambar']['name'];
        $asal = $_FILES['gambar']['tmp_name'];
        $ukuran = $_FILES['gambar']['size'];
            if ($ukuran < 1000000) {    
            move_uploaded_file($asal, "page/loker/img/".$nama);
            echo "Gambar berhasil di upload";
            }else{
            echo "Ukuran terlalu besar say";
        }
		
		$sql = $koneksi->query("INSERT into tbl_loker (Perusahaan, Jurusan, Posisi, Lokasi, DeskripsiSingkat, Deskripsi, Gambar, Persyaratan) values('$Perusahaan', '$Jurusan','$Posisi','$Lokasi','$DeskripsiSingkat','$Deskripsi','$nama','$Persyaratan')");

		if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data Berasil Disimpan');
			window.location.href="?page=loker"
		</script>
		<?php
		}
 	}elseif (@$simpan) {
 			echo "gagal upload";
	}

?>
