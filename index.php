<?php
  session_start();
  include("0akuadmin/pages/koneksi.php");
  include("pages/plogin.php");
  include("pages/plogout.php");
  include("pages/pdaftar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My-BKK | SMKN 1 Karanganyar</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link rel="icon" type="image/png" href="img/www.png">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
  <link href="css/cssku.css" rel="stylesheet" />
</head>

<body>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="index.php" class="scrollto">My-BKK</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="?page=loker">Loker</a></li>
          <li><a href="?page=perusahaan">Perusahaan</a></li>
          <li><a href="?page=artikel">Artikel</a></li>
          <li><a href="?page=galeri">Galeri</a></li>
          <li><a href="?page=about">Profiles</a></li>

        <?php
          function notlogin(){
        ?>
        <li>
          <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
        </li>
                      
        <?php
        }
          function sudahlogin(){
        ?>
        
        <?php
          $koneksi = new mysqli("localhost", "root", "", "db_mybkk");
          $sql = $koneksi->query("SELECT gambar from tbl_member where username='".$_SESSION['login']."'");
          $data = $sql->fetch_assoc();
        ?>
        
          <li><a href="?page=profilku"><img style="border-radius : 50%; margin-right: 8px; width:25px; height:25px;" src="0akuadmin/pages/admin/page/member/img/<?php echo $data['gambar']; ?>" alt=""><?php echo $_SESSION['login']; ?></a>
          <ul>
            <form class="text-center" method="POST" action="">
              <li><a href="?page=profilku">Lihat Profil</a></li>
              <li><a href="?page=artikel&aksi=tambah">Tambah Artikel</a></li><hr>
              <li><input class="btn btn-success form-control" type="submit" name="logout" value="Logout"></li>
            </form>
          </ul>
          </li>
        
        <?php
        }
          if(!isset($_SESSION['login'])){
            notlogin();
        }
          else{
            sudahlogin();
        }
        ?>

        </ul>
      </nav>
    </div>
  </header>

<div class="modal fade login" id="loginModal">
  <div class="modal-dialog login animated">
    <div class="modal-content">
      <div align="right" style="padding-right : 15px; padding-top:15px;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>  
      </div>        
      <div class="modal-body">
        <div class="box">
          <div class="form loginBox">
          <div class="division">
            <div class="line l"></div>
              <span>LOGIN</span>
            <div class="line r"></div>
          </div>
            <form method="POST" action="">
              <input class="form-control" type="text" placeholder="Username" name="user" required="" />
              <input class="form-control" type="password" placeholder="Password" name="pass" required="" />
              <input name="login" class="btn btn-default btn-login" type="submit" value="Login" />
            </form>
          </div>
        </div>
        
        <div class="box">
          <div class="content registerBox" style="display:none;">
          <div class="division">
            <div class="line l"></div>
              <span>REGISTER</span>
            <div class="line r"></div>
          </div>
            <div class="form">
              <form method="POST" enctype="multipart/form-data">
                <label>Foto Profile</label>
                <input type="file" name="img" required="" /><br><br>
                <input class="form-control" type="text" name="username" placeholder="Username" required="">
                <input class="form-control" type="text" name="email" placeholder="Email" required="">
                <input class="form-control" type="password" name="password" placeholder="Password" required="">
                <input class="btn btn-default btn-register" type="submit" value="Create account" name="daftar">
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <div class="forgot login-footer">
        <span>Looking to 
          <a href="javascript: showRegisterForm();">create an account</a>
        ?</span>
      </div>
      <div class="forgot register-footer" style="display:none">
        <span>Already have an account?</span>
        <a href="javascript: showLoginForm();">Login</a>
      </div>
    </div>
  </div>
</div>
</div>

<?php
$page = @$_GET['page'];
$aksi = @$_GET['aksi'];
if ($page == "loker") {
  if ($aksi == "") {
    include "pages/loker.php";
  } elseif ($aksi == "detail") {
    include "pages/loker_detail.php";
  } elseif ($aksi == "lamar") {
    include "pages/lamar.php";
  }
}elseif ($page == "kode") {
  include "pages/kode_lamar.php";
} elseif ($page == "perusahaan") {
  if ($aksi == "") {
    include "pages/perusahaan.php";
  } elseif ($aksi == "detail") {
    include "pages/perusahaan_detail.php";
  }
} elseif ($page == "galeri") {
  if ($aksi == "") {
    include "pages/galeri.php";
  } elseif ($aksi == "detail") {
    include "pages/detail_galeri.php";
  }
} elseif ($page == "about") {
  if ($aksi == "") {
    include "pages/about.php";
  }
} elseif ($page == "profilku") {
  if ($aksi == "") {
    include "pages/profilku.php";
  }elseif ($aksi == "ubah") {
    include "pages/member_ubah.php";
  }
}elseif ($page == "daftar") {
  if ($aksi == "") {
    include "pages/daftar.php";
  }
}elseif ($page == "artikel") {
  if ($aksi == "") {
    include "pages/artikel.php";
  }elseif ($aksi == "detail"){
    include "pages/artikel_detail.php";
  }elseif ($aksi == "tambah") {
    include "pages/artikel_tambah.php";
  }elseif ($aksi == "ubah") {
    include "pages/artikel_ubah.php";
  }elseif ($aksi == "hapus") {
    include "pages/artikel_hapus.php";
  }
}else {
  include "home.php";
}
?>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>My-BKK</h3>
            <p>Adalah sebuah website yang memberikan seputar informasi mengenai Profil Perusahaan atau DU/DI, Lowongan Pekerjaan dan juga informasi yang terupdate.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="?page=loker">Loker</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="?page=perusahaan">Perusahaan</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="?page=artikel">Artikel</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="?page=galeri">Galeri</a></li>        
            </ul>
          </div>

<?php
$sql = $koneksi->query("select * from tbl_contact");
$tampil = $sql->fetch_assoc();
?>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
              <p style="color: #FAFAFA"><?php echo $tampil['Alamat']; ?><br>
              <strong>Phone :</strong> <?php echo $tampil['NoWA']; ?><br>
              <strong>Email :</strong> <?php echo $tampil['NoTlp']; ?><br></p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>BKK SMK N 1 Karanganyar</h4>
            <img width="250" src="img/111.png">
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Website <strong>My-BKK</strong> SMK Negeri 1 Karanganyar
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- TyMCE -->
  
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
  <script src="js/jsku.js" type="text/javascript"></script>

</body>
</html>
