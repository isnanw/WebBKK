<?php
    include('cek-login.php');
    include('../koneksi.php')
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin | My-BKK</title>
  <script type="text/javascript" src="../../js/tinymce/tiny_mce.js"></script>
  <link rel="icon" type="image/png" href="../../../img/www.png">
  <!-- Bootstrap Core CSS -->
  <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- MetisMenu CSS -->
  <link href="../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
  <!-- Timeline CSS -->
  <link href="../../dist/css/timeline.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">
  <!-- Morris Charts CSS -->
  <link href="../../bower_components/morrisjs/morris.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="wrapper">
  <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="">Sistem Informasi BKK "PATRIA KARYA BHAKTI" SMKN 1 Karanganyar</a>
          </div>
          <!-- /.navbar-header -->
          <ul class="nav navbar-top-links navbar-right">
          <!-- /.dropdown -->
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
              </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="?page=akun"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li class="divider"></li>
              <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
          </ul>
            <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
          </ul>
          <!-- /.navbar-top-links -->
          <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
              <img style="width:150px; margin-left:45px; padding-top:20px;" src="../../../img/www.png" alt="" />
              <ul class="nav" id="side-menu"><br>
                <li>
                  <a href="index.php"><i class="fa fa-home fa-fw"></i> Dashboard</a>
                </li>
                  <li>
                    <a href="#"><i class="fa fa-empire fa-fw"></i> Loker<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                    <li>
                      <a href="?page=loker"> Data Loker</a>
                    </li>
                    <li>
                      <a href="?page=pelamar"> Data Lamaran</a>
                    </li>                 
                  </ul>
                </li>       
                <li>
                  <a href="#"><i class="fa fa-university fa-fw"></i> Industri<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                    <li>
                      <a href="?page=industri"> Data Industri</a>
                    </li>                
                  </ul>
                </li>
                
                <li>
                  <a href="#"><i class="fa fa-image fa-fw"></i> Galeri<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                        <a href="?page=galeri"> Data Galeri</a>
                      </li>
                  </ul>
                </li>

              <li>
                  <a href="#"><i class="fa fa-users fa-fw"></i> Member<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li>
                  <a href="?page=member">Daftar Member</a>
                  <a href="?page=artikel">Daftar Artikel</a>
                  <a href="?page=pesan">Daftar Pesan</a>
                </li>
                </ul>
              </li>

                <li>
                  <a href="#"><i class="fa fa-gears fa-fw"></i> Settings<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                      <li>
                        <a href="?page=about"> About</a>
                        <a href="?page=contact"> Contact</a>
                        <a href="?page=slide"> Slide</a>
                        <a href="?page=our"> Our Clients</a>
                      </li>
                    </ul>
                </li>
                <li>
                  <a href="?page=akun"><i class="fa fa-android fa-fw"></i> Akun</a>
                </li>
              </ul>
              </div>
              <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
<?php
  $page = @$_GET['page'];
  $aksi = @$_GET['aksi'];
    if ($page == "loker") {
      if ($aksi == "") {
        include "page/loker/loker.php";
          }elseif ($aksi == "tambah") {
            include "page/loker/tambah.php";
          }elseif ($aksi == "ubah") {
            include "page/loker/ubah.php";
          }elseif ($aksi == "del") {
            include "page/loker/hapus.php";
          }

    }elseif ($page == "industri") {
      if ($aksi == "") {
        include "page/industri/industri.php";
          }elseif ($aksi == "tambah") {
            include "page/industri/tambah.php";
          }elseif ($aksi == "ubah") {
            include "page/industri/ubah.php";
          }elseif ($aksi == "del") {
            include "page/industri/hapus.php";
          }

    } elseif ($page == "pelamar") {
      if ($aksi == "") {
        include "page/pelamar/pelamar.php";
      } elseif ($aksi == "hapus") {
        include "page/pelamar/hapus.php";
      }

    }elseif ($page == "contact") {
      if ($aksi == "") {
        include "page/contact/contact.php";
          }
    }elseif ($page == "galeri") {
      if ($aksi == "") {
        include "page/galeri/galeri.php";
      }elseif ($aksi == "tambah") {
        include "page/galeri/tambah.php";
      }elseif ($aksi == "ubah") {
        include "page/galeri/ubah.php";
      }elseif ($aksi == "hapus") {
        include "page/galeri/hapus.php";
      }

    }elseif ($page == "pesan") {
        if ($aksi == "") {
        include "page/pesan/pesan.php";
      }elseif ($aksi == "tambah") {
        include "page/pesan/tambah.php";
      }elseif ($aksi == "ubah") {
        include "page/pesan/ubah.php";
      }elseif ($aksi == "hapus") {
        include "page/pesan/hapus.php";
      }

    } elseif ($page == "member") {
      if ($aksi == "") {
        include "page/member/member.php";
      } elseif ($aksi == "tambah") {
        include "page/member/tambah.php";
      } elseif ($aksi == "ubah") {
        include "page/member/ubah.php";
      } elseif ($aksi == "hapus") {
        include "page/member/hapus.php";
      }

    } elseif ($page == "artikel") {
      if ($aksi == "") {
        include "page/artikel/artikel.php";
      } elseif ($aksi == "tambah") {
        include "page/artikel/tambah.php";
      } elseif ($aksi == "ubah") {
        include "page/artikel/ubah.php";
      } elseif ($aksi == "hapus") {
        include "page/artikel/hapus.php";
      }

    }elseif ($page == "our") {
        if ($aksi == "") {
        include "page/our/our.php";
      }elseif ($aksi == "tambah") {
        include "page/our/tambah.php";
      }elseif ($aksi == "ubah") {
        include "page/our/ubah.php";
      }elseif ($aksi == "hapus") {
        include "page/our/hapus.php";
      }
      
    }elseif ($page == "about") {
      if ($aksi == "") {
        include "page/about/about.php";
      }elseif ($aksi == "ubah") {
        include "page/about/ubah.php";
      }
      
    }elseif ($page == "akun") {
      if ($aksi == "") {
        include "page/akun/akun.php";
      }elseif ($aksi == "tambah") {
        include "page/akun/tambah.php";
      }elseif ($aksi == "ubah") {
        include "page/akun/ubah.php";
      }elseif ($aksi == "hapus") {
        include "page/akun/hapus.php";
      }
      
    }elseif ($page == "slide") {
      if ($aksi == "") {
        include "page/slide/slide.php";
      }elseif ($aksi == "tambah") {
        include "page/slide/tambah.php";
      }elseif ($aksi == "ubah") {
        include "page/slide/ubah.php";
      }elseif ($aksi == "hapus") {
        include "page/slide/hapus.php";
      }
    
    }elseif ($page == "") {
      include "home.php";
    }
  ?>
  </div>
  </div>
</div>
        
                    
   <!-- jQuery -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bower_components/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
        <script src="../../bower_components/datatables/jquery.dataTables.js"></script>
        <script src="../../bower_components/datatables/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
<!-- tinyMCE -->
<script type="text/javascript">
    tinyMCE.init({
      // General options
      mode : "textareas",
      theme : "simple",
  });
</script>
    
</body>
</html>