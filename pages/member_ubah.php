<?php
  $id_artikel = @$_GET['id_artikel'];
  $sql = $koneksi->query("SELECT * from tbl_member where username='".$_SESSION['login']."'");
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
    <h1 class="mt-4 mb-3">Ubah Profil</h1>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item">
      <a href="?page=profilku"> Artikel</a>
    </li>
    <li class="breadcrumb-item active">Ubah Profil</li>
  </ol>
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="" enctype="multipart/form-data">

            <div class="form-group">
              <label>Gambar</label><br>
              <img id="uploadPreview" style="width: 300px; height: 150px;" src="pages/img/<?php echo $tampil['gambar']; ?>"/><br>
              <input required="" id="uploadImage" type="file" name="img" onchange="PreviewImage()" />
            </div>
	          <div class="form-group">
              <label>Username</label>
              <input readonly="" class="form-control" name="username" value="<?php echo $tampil['username']; ?>" />
				    </div>
    				<div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $tampil['email']; ?>" />
    				</div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" value="<?php echo $tampil['password']; ?>" />
    				</div>
            <div>
             	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary"><hr>
            </div>
          </form>
          </div>

<?php
$username = @$_POST['username'];
$password = @$_POST['password'];
$email = @$_POST['email'];

if (isset($_POST['simpan'])) {
  $nama = $_FILES['img']['name'];
  $asal = $_FILES['img']['tmp_name'];
  $ukuran = $_FILES['img']['size'];
  if ($ukuran < 1000000) {
    move_uploaded_file($asal, "pages/img/" . $nama);

    $sql = $koneksi->query("UPDATE tbl_member set gambar='$nama',email='$email',password='$password' where username='".$_SESSION['login']."'");

    if ($sql) {
      ?>
    <script type="text/javascript">
      alert ('Berhasil Daftar Member. Silahkan Login !!!');
      window.location.href="?page=profilku"
    </script>
<?php

} elseif (@$simpan) {
  echo "gagal upload";
}
} else {
  echo "<script>alert('Ukuran Gambar Terlalu Besar . Kurang dari 1 MB');</script>";
}
}
?>


<!-- <div class="col-lg-6 col"><br>
	<legend align="center">Login Member</legend>
	<form method="POST" action="">
		Username
		<input required="" class="form-control form-group" type="text" name="username" placeholder="Username" />
		Password
		<input required="" class="form-control" type="password" name="pass" placeholder="Password" /><br>
		<input class="btn btn-primary form-group" type="submit" name="daftar" value="Login" /><br>
</form>
</div> -->
</div>
</div>