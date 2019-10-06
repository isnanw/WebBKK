<?php
  $no = @$_GET['no'];
  $sql = $koneksi->query("select * from tbl_loker where no='$no'");
  $tampil = $sql->fetch_assoc();
?>

<script type="text/javascript">
    function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
    oFReader.onload = function (oFREvent){
  document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>

<!--==========================
      Nav Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 box"><br>
          </div>
        </div>
      </div>
    </section><!-- #featured-services -->

<div class="container">
<!-- Page Heading/Breadcrumbs -->
  <div class="w3-animate-zoom">
    <h1 class="mt-4 mb-3">Detail Loker</h1>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active"><a href="?page=loker">Loker</li></a>
    <li class="breadcrumb-item active"><?php echo $tampil['Posisi']; ?></li>
  </ol>
</div>

<div class="main-wrapper1">
  <div class="blog-post-wrapper">
    <div class="blog-post">
    <a href="0akuadmin/pages/admin/page/loker/img/<?php echo $tampil['Gambar'];?>" data-lightbox="portfolio" data-title="<?php echo $tampil['Posisi']; ?>" title="Preview">
      <figure class="blog-post--image">
        <img id="uploadPreview" src="0akuadmin/pages/admin/page/loker/img/<?php echo $tampil['Gambar'];?>"/>
      </figure></a>
      <div class="blog-post--description">
        <h3><?php echo $tampil['Perusahaan']; ?><span><i></i> <?php echo $tampil['Jurusan']; ?></span></h3><hr>
        <h5><b>Deskripsi Loker</b></h5>
        <?php
              echo $tampil['Deskripsi'];
              echo '<h5><b>Persyaratan</b></h5>';
              echo '<p>'.$tampil['Persyaratan'];
            ?>
          <hr>
            <a href="?page=loker&aksi=lamar&no=<?php echo $tampil['No']; ?>"><button type="button" class="btn btn-primary">Lamar Pekerjaan</button></a>
            <a href="?page=loker"><button type="button" class="btn btn-success">Daftar Lowongan Lainnya</button></a>
            <a href="?page=perusahaan"><button type="button" class="btn btn-danger">Lihat Daftar Perusahaan</button></a>
          <hr>
        <div>
        <small>Terakhir di update <?php echo $tampil['tgl_upload']; ?></small>
      </div>
    </div>
  </div>
</div>
</div>