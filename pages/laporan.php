<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Data Lamaran Kerja Saya</title>
    <style>
    @page WordSection1
      {size:841.9pt 595.3pt;
      mso-page-orientation:landscape;
      margin:72.0pt 72.0pt 72.0pt 72.0pt;
      mso-header-margin:35.4pt;
      mso-footer-margin:35.4pt;
      mso-paper-source:0;}
      body{
        page:WordSection1;
      }
      h2{
        font-family: Georgia, 'Times New Roman', Times, serif;
        line-height: 10px;
        font-size : 14px;
        font-weight: bold;
      }
      hr{
        border : 1px solid black;
      }
      table{
        border: 1px solid #0288D1;
        border-collapse: collapse;
      }
      table thead{
        background: #0288D1;
        color: aliceblue
      }
      table th,td{
        padding: 5px;
        border: 1px solid black;
        text-align: left;
      }
      .text-center{
        text-align: center;
      }
      .text-right{
        text-align: right;
      }
      .judul{
        font-weight: bold;
        padding-top: 10px;
      }
  </style>
  </head>
  <body>

  <?php
    $koneksi = new mysqli("localhost","root","","db_mybkk");
    $sql = $koneksi->query("SELECT*from tbl_pelamar where id_lamar='".$_GET['id']."'");
    $tampil = $sql->fetch_assoc();
  ?>
  <div class="text-center">
    <h2>BUKTI PENDAFTARAN</h2>
    <h2>BKK PATRIA KARYA BHAKTI</h2>
    <h2>SMK NEGERI 1 KARANGANYAR</h2>
  </div>
  <div>
    <hr class="besar">
    <hr class="kecil">
  </div>
  <div class="text-right">
    <?php 
      $tanggal = date('d');
      $bulan = date('M');
      $tahun = date("Y");
      echo "Karanganyar, "."$tanggal"." "."$bulan"." "."$tahun";
    ?>
  </div>
  <div>
    Perihal : Lamaran Pekerjaan<br>
    Kode Lamar : <?php echo $tampil['id_lamar']; ?> <br><br>
    Document ini menyatakan bahwa : <br>
    <b>Nama &#9;&#9;:</b> <?php echo $tampil['NamaLengkap']; ?><br>
    <b>Asal Sekolah &#9;:</b> <?php echo $tampil['Sekolah']; ?> <br>
    <b>Jurusan &#9;:</b> <?php echo $tampil['Jurusan']; ?> <br><br>
    Telah mendaftar sebagai calon pelamar pada : <br>
    <br>
    <b>Perusahaan &#9; : <?php echo $tampil['Perusahaan']; ?></b><br>
    <b>Sebagai &#9; : <?php echo $tampil['Posisi']; ?></b><br><br>
      HARAP DIBAWA DOKUMEN INI SAAT PENDAFTARAN ULANG KE BKK PATRIA KARYA BHAKTI SMK NEGERI 1 KARANGANYARA <br>
      <center><h1><?php echo $tampil['id_pelamar'] . "/" . $tampil['id_lamar']; ?></h1></center>
  </div>
  </body>
</html>
<?php
$tampil_id = $tampil['id_pelamar']."-".$tampil['id_lamar'];
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=bkk_".$tampil_id.".doc");
?>