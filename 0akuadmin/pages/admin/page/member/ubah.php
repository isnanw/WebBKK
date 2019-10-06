<?php
  $id_member = @$_GET['id_member'];
  $sql = $koneksi->query("SELECT*from tbl_member where id_member='$id_member'");
  $tampil=$sql->fetch_assoc();
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

</script>
  <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label>Foto Profil</label><br>
        <img id="uploadPreview" style="width: 150px; height: 150px;" src="page/member/img/<?php echo $tampil['gambar']; ?>"/><br>
        <input required="" id="uploadImage" type="file" name="img" onchange="PreviewImage()" />
      </div>
      <div class="form-group">
        <label>Username</label>
        <input readonly class="form-control" name="username" value="<?php echo $tampil['username']; ?>" />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $tampil['email']; ?>" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="pass" value="<?php echo $tampil['password']; ?>" />
      </div>
      <div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"><hr>
      </div>
    </form>
  </div>
</div>

<?php
$username = @$_POST['username'];
$email = @$_POST['email'];
$pass = @$_POST['pass'];

if (isset($_POST['simpan'])) {
  $nama = $_FILES['img']['name'];
  $asal = $_FILES['img']['tmp_name'];
  unlink("page/member/img/" . $tampil['gambar']);
  move_uploaded_file($asal, "page/member/img/" . $nama);

  $sql = $koneksi->query("UPDATE tbl_member set username='$username', email='$email', password='$pass', gambar='$nama' where id_member='$id_member'");

  if ($sql) {
    ?>
		<script type="text/javascript">
			alert ('Data Berasil Diupdate');
			window.location.href="?page=member"
		</script>
		<?php

}
} elseif (@$simpan) {
  echo "gagal upload";
}
?>