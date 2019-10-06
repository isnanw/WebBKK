<?php
  $no = @$_GET['no'];
  $sql = $koneksi->query("select * from tbl_slide where no='$no'");
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
            <img id="uploadPreview" style="width: 300px; height: 150px;" src="page/slide/img/<?php echo $tampil['Gambar'];?>"/>
            <input required="" id="uploadImage" type="file" name="img" onchange="PreviewImage()" />
            <label>Title</label><br>
            <input class="form-control" type="text" name="Title" value="<?php echo $tampil['Title']; ?>" required="">
            <label>Diskripsi</label><br>
            <input class="form-control" type="text" name="Deskripsi" value="<?php echo $tampil['Deskripsi']; ?>" required="">
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
$Deskripsi = @$_POST['Deskripsi'];
$simpan = @$_POST['simpan'];

	if (isset($_POST['simpan'])){
        $nama = $_FILES['img']['name'];
        $asal = $_FILES['img']['tmp_name'];
        $ukuran = $_FILES['img']['size'];

        if ($ukuran < 1000000) {
        unlink("page/slide/img/".$tampil['Gambar']);
        move_uploaded_file($asal, "page/slide/img/".$nama);
        $sql = $koneksi->query("update tbl_slide set Title='$Title', Deskripsi='$Deskripsi', Gambar='$nama' where no='$no'");
        if ($sql) {
    ?>
        <script type="text/javascript">
            alert ('Data Berasil Diupdate');
            window.location.href="?page=slide"
        </script>
    <?php
        }else {
            echo "<script> alert('Gambar Terlalu Besar');</script>";
        }
        }    
    }
        
?>