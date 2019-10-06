<?php
  $no = @$_GET['id'];
  $sql = $koneksi->query("select * from tbl_logo where id='$no'");
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
          <label>Gambar</label><br>
          <img id="uploadPreview" style="width: 300px; height: 150px;" src="page/our/img/<?php echo $tampil['Gambar'];?>"/>
          <input required="" id="uploadImage" type="file" name="img" onchange="PreviewImage()" />
          <label>Title</label><br>
          <input class="form-control" type="text" name="Title" value="<?php echo $tampil['Title']; ?>" required="">
        </div>

				<div>
                	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div></div></div></div>

<?php
$Title = @$_POST['Title'];
$simpan = @$_POST['simpan'];

	if (isset($_POST['simpan'])){
        $nama = $_FILES['img']['name'];
        $asal = $_FILES['img']['tmp_name'];
        $ukuran = $_FILES['img']['size'];

        if ($ukuran < 1000000) {
        unlink("page/our/img/".$tampil['Gambar']);
        move_uploaded_file($asal, "page/our/img/".$nama);
        $sql = $koneksi->query("update tbl_logo set Title='$Title', Gambar='$nama' where id='$no'");
        if ($sql) {
    ?>
        <script type="text/javascript">
            alert ('Data Berasil Diupdate');
            window.location.href="?page=our"
        </script>
    <?php
        }else {
            echo "<script> alert('Gambar Terlalu Besar');</script>";
        }
        }    
    }
        
?>