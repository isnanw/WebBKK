<!--==========================
      Nav Section
============================-->
<section id="featured-services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 box"><br></div>
    </div>
  </div>
</section><!-- #featured-services -->
<!-- Page Content -->
<div class="container">
<!-- Page Heading/Breadcrumbs -->
  <div class="w3-animate-zoom">
    <h1 class="mt-4 mb-3">PROFILKU</h1>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Profilku</li>
  </ol>

<!-- Profilku -->
<?php
  $sql = $koneksi->query("SELECT gambar,username,email from tbl_member where username='" . $_SESSION['login'] . "'");
  $tampil = $sql->fetch_assoc();
?>
    <div class="row">
      <div class="col-lg-4 col-sm-12">
        <div class="meta">
          <div class="box1-wrapper">
            <div class="box1">
              <div class="avatar1">
                <img src="0akuadmin/pages/admin/page/member/img/<?php echo $tampil['gambar']; ?>">
              </div>
              <div class="box1-inner">
                <h3 class="name"><?php echo $_SESSION['login']; ?></h3>
                <h4 class="occupation"><?php echo $tampil['email']; ?></h4>
                <a href="?page=profilku&aksi=ubah&username=<?php echo $_SESSION['login']; ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil"></i> Ubah Profil</button></a>
                <a href="?page=artikel&aksi=tambah"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Artikel</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="col-lg-8 col-md-12">
  <h3><u>DAFTAR ARTIKEL KU</u></h3>
<?php
  $sql = ("SELECT * from tbl_artikel where username='".$_SESSION['login']."' order by id_artikel desc");
  $query = $koneksi->query($sql);
  while ($tampil = mysqli_fetch_array($query)) {
?>
    <div>
    <table>
    <tr>  
    <td width="800px">
        <?php echo $tampil['judul']; ?>
      </td>
      <td width="100px">
        <a href="?page=artikel&aksi=ubah&id_artikel=<?php echo $tampil['id_artikel']; ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button></a>
        <a onclick="return confirm('Anda Yakin Akan Menghapus Data?')" href="?page=artikel&aksi=hapus&id_artikel=<?php echo $tampil['id_artikel']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-remove"></i></button></a>
      </td>
</tr>
</table>
    </div><hr>
<?php } ?>
  </div>
</div>
</div>
<!-- /.row -->
</div>
<!-- /.container -->