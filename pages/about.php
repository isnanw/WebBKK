<?php
$sql = $koneksi->query("select * from tbl_about");
$tampil = $sql->fetch_assoc();
?>

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

<!-- About / Profile -->
<div class="container">
<!-- Page Heading/Breadcrumbs -->
  <div class="w3-animate-zoom">
    <h1 class="mt-4 mb-3">ABOUT</h1>
  </div>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

  <div class="main-wrapper1">
    <div class="blog-post-wrapper">
      <div class="blog-post">
        <figure class="blog-post--image">
          <img id="uploadPreview" src="0akuadmin/pages/admin/page/about/img/<?php echo $tampil['Gambar']; ?>"/>
        </figure>
        <div class="blog-post--description">
          <h3 style="color: #000000">Profile<span><i></i>BKK SMKN 1 Karanganyar</span></h3><hr>
          <h5 style="color: #000000"><b>BKK SMKN 1 Karanganyar</b></h5>
          <p style="color: #000000">
          <?php
          echo $tampil['BKK'] . '<br>';
          echo '<h5 style="color: #000000"><b>Sejarah SMKN 1 Karanganyar</b></h5>';
          echo '<p style="color: #000000">' . $tampil['Sejarah'] . '<br>';
          echo '<h5 style="color: #000000"><b>Visi</b></h5>';
          echo '<p style="color: #000000">' . $tampil['Visi'] . '<br>';
          echo '<h5 style="color: #000000"><b>Misi</b></h5>';
          echo '<p style="color: #000000">' . $tampil['Misi'] . '<br>';
          ?>
          </p>
        </div>
      <div class="blog-post--tools">
      </div>
    </div>
  </div>
</div>

<!-- .panel-body -->
</div></div></div></div>
</body>
<footer>
  <div class="col-lg-12">
    <hr>
  </div>
</footer>
