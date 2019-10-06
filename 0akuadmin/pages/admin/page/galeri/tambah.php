<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
oFReader.onload = function (oFREvent){
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
      			Galeri
          </div>
          <!-- /.panel-heading -->
	          <div class="panel-body">
	              <div class="col-lg-12">
			            <form role="form" action="" method="POST" enctype="multipart/form-data">
			            <div class="form-group"></div>
								  <div class="form-group">
										<label>Gambar</label><br>
										<img id="uploadPreview" style="width: 300px; height: 150px;" />
										<input id="uploadImage" type="file" name="gambar" onchange=PreviewImage(this.id) />
										<br>
									</div>
									<div class="form-group">
			            	<label>Judul</label><br>
			            	<input class="form-control" type="text" name="judul" placeholder="Galeri" />
			            </div>
									<div class="form-group">
			            	<label>Deskripsi</label><br>
			            	<textarea rows="5" class="form-control" name="deskripsi"></textarea>
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
$Judul = @$_POST['judul'];
$Deskripsi =@$_POST['deskripsi'];

	if (isset($_POST['simpan'])){
		$nama = $_FILES['gambar']['name'];
    $asal = $_FILES['gambar']['tmp_name'];
    $ukuran = $_FILES['gambar']['size'];
    if ($ukuran < 1000000) {    
    move_uploaded_file($asal, "page/galeri/img/".$nama);
    
    		$sql = $koneksi->query("INSERT into tbl_galeri (Gambar, Judul, Deskripsi) values ('$nama','$Judul','$Deskripsi')");

				if ($sql) {
				?>
				<script type="text/javascript">
					alert ('Data Berasil Disimpan');
					window.location.href="?page=galeri"
				</script>
				<?php
				}elseif (@$simpan) {
		 			echo "gagal upload";
			}
    }else{
    echo "<script>alert('Ukuran Gmbar Telrlalu Besar');</script>";
    }
		}

?>
