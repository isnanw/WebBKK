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
      			Gambar Slide
          </div>
          <!-- /.panel-heading -->
	          <div class="panel-body">
	            <div class="dataTable_wrapper">
	              <div class="col-lg-12">
			            <form role="form" action="" method="POST" enctype="multipart/form-data">
								  <div class="form-group">
									<label>Gambar</label></br>
									<img id="uploadPreview" style="width: 300px; height: 150px;" />
									<input required="" id="uploadImage" type="file" name="gambar" onchange="PreviewImage();" />
									<br>
									<label>Title</label><br>
									<input type="text" name="Title" placeholder="Title" class="form-control" /><br>
									<label>Deskripsi</label>
									<input type="text" name="Deskripsi" placeholder="Deskripsi" class="form-control" />
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
$Title = @$_POST['Title'];
$Deskripsi = @$_POST['Deskripsi'];

	if (isset($_POST['simpan'])){
		$nama = $_FILES['gambar']['name'];
    $asal = $_FILES['gambar']['tmp_name'];
    $ukuran = $_FILES['gambar']['size'];

    if ($ukuran < 1000000) {
		  move_uploaded_file($asal, "page/slide/img/".$nama);
	  
			$sql = $koneksi->query("insert into tbl_slide (Title, Deskripsi, Gambar) values('$Title','$Deskripsi','$nama')");

			if ($sql) {
?>
			<script type="text/javascript">
				alert ('Data Berasil Disimpan');
				window.location.href="?page=slide"
			</script>
<?php
				}
		 	}elseif (@$simpan) {
		 			echo "gagal upload";
			}else{
				echo "<script> alert('Ukuran Gambar Terlalu Besar');</script>";
			}	
    }

?>
