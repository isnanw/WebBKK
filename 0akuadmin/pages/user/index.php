<?php
    include('cek-login.php');
    include('../koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>User | My-BKK</title>
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
                  <a href="#"><i class="fa fa-group fa-fw"></i> Member<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                    <li><a href="?page=member"> Data Member</a></li>                
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-child fa-fw"></i> Pelamar Kerja<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                    <li><a href="?page=pelamar"> Data Pelamar</a></li>                
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-list-alt fa-fw"></i> Artikel<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                    <li><a href="?page=artikel"> Data Artikel</a></li>                
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-envelope fa-fw"></i> Pesan<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                    <li><a href="?page=pesan"> Data Pesan</a></li>                
                  </ul>
                </li>
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
    if ($page == "pesan") {
      if ($aksi == "") {
        include "page/pesan/pesan.php";
          }elseif ($aksi == "tambah") {
            include "page/pesan/tambah.php";
          }elseif ($aksi == "ubah") {
            include "page/pesan/ubah.php";
          }elseif ($aksi == "del") {
            include "page/pesan/hapus.php";
          }
    }elseif ($page == "artikel") {
      if ($aksi == "") {
        include "page/artikel/artikel.php";
          }elseif ($aksi == "tambah") {
            include "page/artikel/tambah.php";
          }elseif ($aksi == "ubah") {
            include "page/artikel/ubah.php";
          }elseif ($aksi == "hapus") {
            include "page/artikel/hapus.php";
          }
    } elseif ($page == "pelamar") {
      if ($aksi == "") {
        include "page/pelamar/pelamar.php";
      } elseif ($aksi == "hapus") {
        include "page/pelamar/hapus.php";
      }
    }elseif ($page == "member") {
      if ($aksi == "") {
        include "page/member/member.php";
      }elseif ($aksi == "tambah") {
        include "page/member/tambah.php";
      }elseif ($aksi == "ubah") {
        include "page/member/ubah.php";
      }elseif ($aksi == "hapus") {
        include "page/member/hapus.php";
      }
    }else {
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
    <script type="text/javascript">
    tinyMCE.init({
      // General options
      mode : "textareas",
      theme : "simple",
  });
</script>
</body>
</html>