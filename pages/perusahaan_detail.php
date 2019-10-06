<?php
  $no = @$_GET['no'];
  $sql = $koneksi->query("select * from tbl_industri where no='$no'");
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
  <div class="wow fadeInUp">
    <h1 class="mt-4 mb-3">Detail Perusahaan</h1>
  </div>
  <ol class="breadcrumb wow fadeInDown">
    <li class="breadcrumb-item">
      <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active"><a href="?page=perusahaan">Perusahaan</li></a>
    <li class="breadcrumb-item active"><?php echo $tampil['Nama']; ?></li>
  </ol>
</div>
<div class="container">
  <div class="blog-post-wrapper">
    <div class="blog-post">
      <a href="0akuadmin/pages/admin/page/industri/img/<?php echo $tampil['Gambar'];?>" data-lightbox="portfolio" data-title="<?php echo $tampil['Nama']; ?>" title="Preview">
      <figure class="blog-post--image wow fadeInUp">
        <img id="uploadPreview" src="0akuadmin/pages/admin/page/industri/img/<?php echo $tampil['Gambar'];?>"/>
      </figure></a>
      <div class="blog-post--description wow fadeInUp">
        <h3 class="wow fadeInUp"><?php echo $tampil['Nama']; ?><span><i></i></span></h3><hr>
        <h4><b>Deskripsi Perusahaan</b></h4>
        <p class=" wow fadeInUp"><?php
          echo $tampil['Deskripsi'].'<h4 class=" wow fadeInUp"><b>Contact</b></h4>';
          echo $tampil['Alamat'].'<br>';
          echo "Telp : ".$tampil['NoHp'];
      ?></p>
      </div>
    </div>
  </div>
</div>
