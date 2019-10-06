<script type="text/javascript">
	function PreviewImage() {
	var oFReader = new FileReader();
	oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
	oFReader.onload = function (oFRnews){
  document.getElementById("uploadPreview").src = oFRnews.target.result;
};
};
</script>

<!--==========================
      Nav Section
============================-->
<section id="featured-services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 box"><br></div>
    </div>
  </div>
</section>

<div class="container">
<!-- Page Heading/Breadcrumbs -->
  <div class="w3-animate-zoom">
    <h1 class="mt-4 mb-3">Tambah Artikel</h1>
  </div><hr>
<div class="col-lg-12">
	<div class="row">
<div class="col-lg-12 col-md-12"><br>
<form role="form" action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label>Gambar</label></br>
    <img id="uploadPreview" style="width: 300px; height: 150px;" /><br>
    <input id="uploadImage" type="file" name="img" onchange="PreviewImage();" />
  </div>
  <div class="form-group">
    <label>Judul</label>
    <input class="form-control" type="text" name="judul" placeholder="Judul Artikel">
  </div>
  <div class="form-group">
    <label>Deskripsi Singkat</label>
    <input  class="form-control" type="text" name="deskripsi_singkat" placeholder="Masukkan Deskripsi Singkat" maxlength="150">
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <textarea class="form-control" rows="15" name="deskripsi" placeholder="Deskripsi Lengkap"></textarea>
  </div>
  <div class="form-group">
    <input type="submit" name="tambah" value="Simpan" class="btn btn-primary"> 
    <button type="reset" class="btn btn-default" onClick="history.go(0)">Reset</button>
    <button type="submit" class="btn btn-danger" onClick="history.go(-1)">Batal</button>
  </div>                                       
</form>
</div>
</div>
</div>
</div>
<?php
$judul = @$_POST['judul'];
$deskripsi_singkat = @$_POST['deskripsi_singkat'];
$deskripsi = @$_POST['deskripsi'];

if (isset($_POST['tambah'])) {
  $nama = $_FILES['img']['name'];
  $asal = $_FILES['img']['tmp_name'];
  $ukuran = $_FILES['img']['size'];
  if ($ukuran < 1000000) {
    move_uploaded_file($asal,"0akuadmin/pages/admin/page/artikel/img/".$nama);

    $sql = $koneksi->query("INSERT into tbl_artikel (username, gambar, judul, deskripsi_singkat, deskripsi) values ('".$_SESSION['login']."','$nama','$judul','$deskripsi_singkat','$deskripsi')");

    if ($sql) {
    ?>
    <script type="text/javascript">
			alert ('Data Berasil Disimpan');
			window.location.href="?page=artikel"
    </script>
    <?php
    }else {
      echo "GAGAL UPLOAD";
    }
  }else {
  echo "<script>alert('Ukuran Gmbar Telrlalu Besar');</script>";
  }
}
?>

<!-- tinyMCE -->
<script type="text/javascript" src="0akuadmin/js/tinymce/tiny_mce.js"></script>

<script type="text/javascript">
      tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
    });
</script>