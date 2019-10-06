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
  <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label>Gambar</label><br>
        <img id="uploadPreview" style="width: 300px; height: 150px;" src="../admin/page/artikel/img/<?php echo $tampil['gambar']; ?>"/><br>
        <input required="" id="uploadImage" type="file" name="img" onchange="PreviewImage()" />
      </div>
      <div class="form-group">
        <label>Judul Artikel</label>
        <input class="form-control" name="judul" value="<?php echo $tampil['judul']; ?>" />
      </div>
      <div class="form-group">
        <label>Deskripsi Singkat</label>
        <input class="form-control" name="deskripsiSingkat" value="<?php echo $tampil['deskripsi_singkat']; ?>" />
      </div>

      <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10">
          <?php echo $tampil['deskripsi']; ?>
        </textarea>
      </div>
      <div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"><hr>
      </div>
    </form>
  </div>
</div>

<?php
$judul = @$_POST['judul'];
$deskripsiSingkat = @$_POST['deskripsiSingkat'];
$deskripsi = @$_POST['deskripsi'];

if (isset($_POST['simpan'])) {
  $nama = $_FILES['img']['name'];
  $asal = $_FILES['img']['tmp_name'];
  unlink("../admin/page/artikel/img/" . $tampil['gambar']);
  move_uploaded_file($asal, "../admin/page/artikel/img/" . $nama);

  $sql = $koneksi->query("UPDATE tbl_artikel set judul='$judul', deskripsi_singkat='$deskripsiSingkat', deskripsi='$deskripsi', gambar='$nama' where id_artikel='$id_artikel'");

  if ($sql) {
    ?>
		<script type="text/javascript">
			alert ('Data Berasil Diupdate');
			window.location.href="?page=artikel"
		</script>
		<?php

}
} elseif (@$simpan) {
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