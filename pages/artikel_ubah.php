<?php
  $id_artikel = @$_GET['id_artikel'];
  $sql = $koneksi->query("SELECT * from tbl_artikel where id_artikel='$id_artikel'");
  $tampil = $sql->fetch_assoc();
?>

<script type="text/javascript">
  function PreviewImage() {
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
  oFReader.onload = function (oFRnews){
  document.getElementById("uploadPreview").src = oFRnews.target.result;
};
};
</script>

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
    <h1 class="mt-4 mb-3">Ubah Artikel</h1>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="?page=profilku"> Artikel</a>
    </li>
    <li class="breadcrumb-item active">Ubah Artikel</li>
  </ol>
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="" enctype="multipart/form-data">

            <div class="form-group">
              <label>Gambar</label><br>
              <img id="uploadPreview" style="width: 300px; height: 150px;" src="0akuadmin/pages/admin/page/artikel/img/<?php echo $tampil['gambar'];?>"/><br>
              <input required="" id="uploadImage" type="file" name="img" onchange="PreviewImage()" />
            </div>
	          <div class="form-group">
              <label>Judul Artikel</label>
              <input class="form-control" name="judul" value="<?php echo $tampil['judul'];?>" />
				    </div>
    				<div class="form-group">
              <label>Deskripsi Singkat</label>
              <input class="form-control" name="deskripsi_singkat" value="<?php echo $tampil['deskripsi_singkat'];?>" />
    				</div>

				    <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" name="deskripsi" rows="10">
                <?php echo $tampil['deskripsi'];?>
              </textarea>
            </div>
            <div>
              <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"><hr>
            </div>
          </form>
        </div>
    </div>
</div></div></div></div>

<?php
	$judul = @$_POST['judul'];
	$deskripsi_singkat = @$_POST['deskripsi_singkat'];
	$deskripsi = @$_POST['deskripsi'];

	if (isset($_POST['simpan'])){
        $nama = $_FILES['img']['name'];
        $asal = $_FILES['img']['tmp_name'];
        unlink("0akuadmin/pages/admin/page/artikel/img/".$tampil['gambar']);
        move_uploaded_file($asal, "0akuadmin/pages/admin/page/artikel/img/".$nama);

		$sql = $koneksi->query("UPDATE tbl_artikel set judul='$judul', deskripsi_singkat='$deskripsi_singkat', deskripsi='$deskripsi', gambar='$nama' where id_artikel='$id_artikel'");

		if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data Berasil Diupdate');
			window.location.href="?page=profilku"
		</script>
		<?php
		}
  }elseif (@$simpan) {
    echo "gagal upload";
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