<?php
  $perhalaman = 4;
  $data=mysqli_query($koneksi,"SELECT*from tbl_loker order by no desc");
  $jum=mysqli_num_rows($data);
  $halaman=ceil($jum/$perhalaman);
  $pages=(isset($_GET['pages']))?(int)$_GET['pages']:1;
  $start=($pages-1)*$perhalaman;
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

<!-- Page Content -->
<div class="container">
<!-- Page Heading/Breadcrumbs -->
  <div class="w3-animate-zoom">
    <h1 class="mt-4 mb-3">LOKER</h1>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Loker</li>
  </ol>

  <!-- Loker -->
    <div class="row">
      <div class="col-lg-8 col-sm-12">
      <?php
        $cari = @$_POST['cari'];
        $cariper = @$_POST['cariper'];
        if ($cariper) {
          if ($cari !="") {
            $sql = "SELECT*from tbl_loker where posisi like '%$cari%'";      
          }else{
            $sql = "SELECT*from tbl_loker order by no desc LIMIT $start,$perhalaman";
          }
        }else{
        $sql = "SELECT*from tbl_loker order by no desc limit $start,$perhalaman";
      }
        $query = $koneksi->query($sql);
        $jumlah = mysqli_num_rows($query);
        if($jumlah <= 0){
          echo "Maaf Pencarian dengan kata '".$cari."' tidak ditemukan";
        }else{
        while ($data=mysqli_fetch_array($query)) {
      ?>
        <div class="portfolio-item filter-app wow fadeInUp">
            <div class="blog-card">
              <div class="meta">
                <div class="photo" style="background-image: url(0akuadmin/pages/admin/page/loker/img/<?php echo $data['Gambar'];?>)"></div>
                <ul class="details">
                  <i class="fa fa-mortar-board fa-fw"></i> : <?php echo $data['Jurusan']; ?><br>
                  <i class="fa fa-briefcase fa-fw"></i> : <?php echo $data['Posisi']; ?><br>
                  <i class="fa fa-map-marker fa-fw"></i> : <?php echo $data['Lokasi']; ?><br>
                  <i class="fa fa-clock-o fa-fw"></i> : <?php echo $data['tgl_upload']; ?><br>
                </ul>
              </div>
      
              <div class="description">
                <h1><?php echo $data['Posisi']; ?></h1>
                <h2><?php echo $data['Perusahaan']; ?>  || <?php echo $data['Lokasi']; ?></h2>
                <p><?php echo $data['DeskripsiSingkat']; ?></p>
                <p class="read-more">
                  <?php
                    if(!isset($_SESSION['login'])){
                      ?>
                        <a style="color : #0091EA;" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Lamar</a>
                      <?php
                    }
                    else{?>
                  <a style="color : #0091EA;" href="?page=loker&aksi=lamar&no=<?php echo $data['No']; ?>">Lamar Pekerjaan</a>
                    <?php } ?>
                  <a href="?page=loker&aksi=detail&no=<?php echo $data['No']; ?>">Read More</a>
                </p>
              </div>
            </div>
          </div><?php }} ?>

<!-- Tombol Pagination -->
<div align="right">
    <ul class="pagination">
    <?php if ($pages>1) { ?>
    <li>
      <a href="?page=loker&pages=<?php echo $pages - 1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
      <?php }else{ ?> <li class="disabled">
      <a href="?page=loker&pages=<?php echo $pages; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li> 
    <?php } ?>
    
    <?php 
    for ($x=1; $x<=$halaman ; $x++) {
      if ($pages==$x) {
        $ini="active";
      }else{$ini="";}
      ?>
    <li class="<?php echo "$ini"; ?>"><a href="?page=loker&pages=<?php echo "$x"; ?>"><?php echo "$x"; ?></a></li>
    <?php  } ?>
    <?php if ($pages < $halaman) { ?>
    <li>
      <a href="?page=loker&pages=<?php echo $pages + 1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php }else{ ?> 
    <li class="disabled">
      <a href="?page=loker&pages=<?php echo $pages; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
  </ul>
    <?php } ?>
  </div>

</div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4"><br>
<!-- Search Widget -->
  <div class="card mb-4">
    <h5 class="card-header">Search</h5>
    <div class="card-body">
      <div class="input-group">
        <form action="" method="post">
          <input class="ku" type="text" name="cari" placeholder="cari loker" >
          <input class="btn btn-default" type="submit" name="cariper" value="Cari" />
        </form>
      </div>
    </div>
  </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Menu Utama</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="index.php">Home</a>
                    </li>
                    <li>
                      <a href="?page=loker">Loker</a>
                    </li>
                    <li>
                      <a href="?page=perusahaan">Perusahaan</a>
                    </li>
                  </ul>
                </div>
                
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="?page=artikel">Artikel</a>
                    </li>
                    <li>
                      <a href="?page=galeri">Galeri</a>
                    </li>
                    <li>
                      <a href="?page=about">Profile</a>
                    </li>
                  </ul>
                </div>
              <!-- Row -->
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              <?php
                $sql = $koneksi->query("select * from tbl_pesan");
                while ($data= $sql->fetch_assoc()){
              ?>
              <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                  <h3><?php echo $data['Nama'] ?></h3>
                  <p><?php echo $data['Pesan'] ?></p>
                </div> <?php } ?>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div><hr>
<!-- /.row -->
</div>
<!-- /.container -->