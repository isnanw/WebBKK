<?php
  $id_artikel = @$_GET['id_artikel'];
  $sql = $koneksi->query("SELECT * from tbl_artikel where id_artikel='$id_artikel'");
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
    <h1 class="mt-4 mb-3">Detail Artikel</h1>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active"><a href="?page=artikel">Artikel</li></a>
    <li class="breadcrumb-item active">Detail</li>
  </ol>
</div>

<div class="main-wrapper1">
  <div class="blog-post-wrapper">
    <div class="blog-post">
    <a href="0akuadmin/pages/admin/page/artikel/img/<?php echo $tampil['gambar']; ?>" data-lightbox="portfolio" data-title="<?php echo $tampil['judul']; ?>" title="Preview">
      <figure class="blog-post--image">
        <img id="uploadPreview" src="0akuadmin/pages/admin/page/artikel/img/<?php echo $tampil['gambar']; ?>"/>
      </figure>
    </a>
      <div class="blog-post--description">
        <h3><?php echo $tampil['judul']; ?><span><i></i> <?php echo $tampil['username']; ?></span></h3><hr>
        <h4><b>Deskripsi Artikel</b></h4>
        <?php
          echo $tampil['deskripsi'];
        ?>
      </div>
      <div class="blog-post--tools">
        <div style="padding-left: 50px;">
          <i>Post By : <b><?php echo $tampil['username']; ?></b></i> || <?php echo $tampil['tgl_upload']; ?>
        </div>
      </div>
    </div>
  </div>
</div>
