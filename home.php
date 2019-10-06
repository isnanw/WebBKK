  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
      </ol>
<?php 
  $no = 0;
  for($no;$no<3;$no++){
?>
      <div class="carousel-inner" role="listbox">
<?php 
  $no = 0;
  $sql = "SELECT*from tbl_slide";
  $query = $koneksi->query($sql);
  while($row = mysqli_fetch_array($query)){
?>
          <div class="carousel-item <?php if($no == 0){echo 'active';}else{echo 'notactive';}?>">
            <div class="carousel-background"><img src="0akuadmin/pages/admin/page/slide/img/<?php echo $row['Gambar']; ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php echo $row['Title']; ?></h2>
                <p><?php echo $row['Deskripsi']; ?></p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>
<?php 
  $no++;
  }//Penutup while
} //Penutup For
?>
        </div>
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  
  <main id="main">
  <!--==========================
        Nav Section
  ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-4 box">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="#about">Lowongan Pekerjaan</a></h4>
          </div>
          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="#services">Perusahaan Yang Berkerja Sama</a></h4>
          </div>
          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>            
            <h4 class="title"><a href="#portfolio">Artikel</a></h4>
          </div>

        </div>
      </div>
    </section>

  <!--==========================
        Loker Section
  ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>Lowongan Pekerjaan</h3>
        </header>
        <div class="row">
<?php
  $sql = "select*from tbl_loker order by no desc limit 3";
  $query = $koneksi->query($sql);

  while ($data=mysqli_fetch_array($query)) {
?>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="0akuadmin/pages/admin/page/loker/img/<?php echo $data['Gambar'];?>" alt="" class="img-fluid">
                <a href="?page=loker&aksi=detail&no=<?php echo $data['No']; ?>">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><?php echo $data['Posisi']; ?></h2></a>
              <p><?php echo $data['DeskripsiSingkat']; ?></p>
            </div>
          </div>
<?php } ?>
        </div>
      </div>
    </section><!-- #about -->

    <!--==========================
      Perusahaan Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Perusahaan</h3>
          <p>Perusahaan atau DU/DI yang telah berkerjasama dengan pihak kami untuk menyalurkan siswa-siswi SMK Negeri 1 Karanganyar, supaya mereka bisa mendapatkan pekerjaan yang sesuai dengan kemampuan mereka.</p>
        </header>

        <div class="row">
<?php
  $sql = "select*from tbl_industri order by no desc limit 6";
  $query = $koneksi->query($sql);

  while ($data=mysqli_fetch_array($query)) {
?>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="?page=perusahaan&aksi=detail&no=<?php echo $data['No']; ?>"><?php echo $data['Nama']; ?></a></h4>
            <p class="description"><?php echo $data['DeskripsiSingkat']; ?></p>
          </div>
<?php } ?>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
        Artikel Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Artikel</h3>
        </header>
      <div class="row portfolio-container">
<?php
  $sql = "select*from tbl_artikel order by id_artikel desc limit 3";
  $query = $koneksi->query($sql);

  while ($data=mysqli_fetch_array($query)) {
?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="0akuadmin/pages/admin/page/artikel/img/<?php echo $data['gambar'];?>" class="img-fluid" alt="">
                <a href="0akuadmin/pages/admin/page/artikel/img/<?php echo $data['gambar'];?>" data-lightbox="portfolio" data-title="<?php echo $data['judul'] ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="?page=artikel&aksi=detail&id_artikel=<?php echo $data['id_artikel']; ?>" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h6>
                  <a href="?page=artikel&aksi=detail&id_artikel=<?php echo $data['id_artikel']; ?>">
                    <?php echo $data['judul']; ?>
                  </a>
                </h6>
              </div>
            </div>
          </div>
<?php } ?>
        </div>
      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>
        <div class="owl-carousel clients-carousel">
<?php
  $sql = $koneksi->query("select * from tbl_logo order by id desc");
  while ($data= $sql->fetch_assoc()){
?>          
          <img width="5px" src="0akuadmin/pages/admin/page/our/img/<?php echo $data['Gambar'];?>" alt="<?php echo $data['Title'];?>">
<?php } ?>
        </div>
      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Pesan Pengungunjung</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">
<?php
  $sql = $koneksi->query("select * from tbl_pesan");
  while ($data= $sql->fetch_assoc()){
?>
          <div class="testimonial-item">
            <h3><?php echo $data['Nama'] ?></h3>
            <h4><?php echo $data['Email'] ?></h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              <?php echo $data['Pesan'] ?>
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
<?php } ?>
        </div>
      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Galeri Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Galeri</h3>
          <p></p>
        </div>

        <div class="row">
<?php
  $sql = "select*from tbl_galeri order by no desc limit 4";
  $query = $koneksi->query($sql);

  while ($data=mysqli_fetch_array($query)) {
?>
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="0akuadmin/pages/admin/page/galeri/img/<?php echo $data['Gambar'];?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?php echo $data['Judul']; ?></h4>
                </div>
              </div>
            </div>
          </div>
<?php } ?>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>
<?php
  $sql = $koneksi->query("select * from tbl_contact");
  $tampil = $sql->fetch_assoc();
?>
        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address><?php echo $tampil['Alamat']; ?></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:<?php echo $tampil['NoWA']; ?>"><?php echo $tampil['NoWA']; ?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:<?php echo $tampil['NoTlp']; ?>"><?php echo $tampil['NoTlp']; ?></a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="" method="post" role="form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="Nama" class="form-control" id="name" placeholder="Your Name" required="" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="Email" id="email" placeholder="Your Email" required="" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="Pesan" rows="5" required="" placeholder="Masukkan Pertanyaan / Saran dan Kritik Anda dengan Bahasa yang Sopan"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center form-group">
              <input type="submit" name="simpan" class="btn btn-success" value="Send Message">
            </div>
          </form>
        </div>
<?php
    $Nama = @$_POST['Nama'];
    $Email = @$_POST['Email'];
    $Pesan = @$_POST['Pesan'];
    $simpan = @$_POST['simpan'];
    
    if ($simpan) {
        $sql = $koneksi->query("INSERT into tbl_pesan (Nama, Email, Pesan) values ('$Nama','$Email', '$Pesan')");

    if ($sql) {
    ?>
            <script type="text/javascript">
                alert ('Pesan Berhasil Dikirim');
                window.location.href="index.php"
            </script>
    <?php
            }elseif (@$simpan) {
                    echo "gagal upload";
            }
        }
?>
      </div>
    </section>
  </main>


  