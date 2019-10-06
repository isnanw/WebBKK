<?php
$perhalaman = 6;
$data = mysqli_query($koneksi, "SELECT*from tbl_galeri order by no desc");
$jum = mysqli_num_rows($data);
$halaman = ceil($jum / $perhalaman);
$pages = (isset($_GET['pages'])) ? (int)$_GET['pages'] : 1;
$start = ($pages - 1) * $perhalaman;
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
</section><!-- #featured-services -->

<!--==========================
      News Section
============================-->
<section id="team">
  <div class="container">
    <header class="section-header">
      <h3 class="section-title">Galeri</h3>
    </header>
    <div class="row portfolio-container">
    <?php
    $sql = "SELECT*from tbl_galeri order by no desc limit $start,$perhalaman";
    $query = $koneksi->query($sql);
      // Perulangan tampil foto galeri
    while ($data = mysqli_fetch_array($query)) {
      ?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="member">
          <a href="0akuadmin/pages/admin/page/galeri/img/<?php echo $data['Gambar']; ?>" data-lightbox="portfolio" data-title="<?php echo $data['Judul'] ?>" title="Preview">
          <div class="member-info">
            <div class="member-info-content">
              <h4><?php echo $data['Judul']; ?></h4>
            </div>
          </div>
          <img src="0akuadmin/pages/admin/page/galeri/img/<?php echo $data['Gambar']; ?>" class="img-fluid" alt=""></a>
        </div>
      </div>
    <?php 
  } ?>
    </div>
<!-- Tombol Pagination -->
<div align="right">
    <ul class="pagination">
    <?php if ($pages > 1) { ?>
    <li>
      <a href="?page=galeri&pages=<?php echo $pages - 1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
      <?php 
    } else { ?> <li class="disabled">
      <a href="?page=galeri&pages=<?php echo $pages; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li> 
    <?php 
  } ?>
    
    <?php 
    for ($x = 1; $x <= $halaman; $x++) {
      if ($pages == $x) {
        $ini = "active";
      } else {
        $ini = "";
      }
      ?>
    <li class="<?php echo "$ini"; ?>"><a href="?page=galeri&pages=<?php echo "$x"; ?>"><?php echo "$x"; ?></a></li>
    <?php 
  } ?>
    <?php if ($pages < $halaman) { ?>
    <li>
      <a href="?page=galeri&pages=<?php echo $pages + 1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php 
  } else { ?> 
    <li class="disabled">
      <a href="?page=galeri&pages=<?php echo $pages; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </ul>
    <?php 
  } ?>
  </div>
</div>
</section>