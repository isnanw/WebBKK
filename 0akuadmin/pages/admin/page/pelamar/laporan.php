<!DOCTYPE html>
<html>
<head>
  <title>Laporan Daftar Pelamar Kerja</title>
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
  <div class="text-center">
    <h2>LAPORAN PELAMAR KERJA</h2>
    <h2>BKK PATRIA KARYA BHAKTI</h2>
    <h2>SMK NEGERI 1 KARANGANYAR</h2>
  </div>
  <div>
    <hr class="besar">
    <hr class="kecil">
  </div>
  <div class="judul">
    Tabel Daftar Pelamar Kerja
  </div>
  <div class="tabel">
    <table>
      <thead>
        <tr>
          <th>NO</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Asal Sekolah</th>
          <th>Jurusan</th>
          <th>TB</th>
          <th>BB</th>
          <th>Nilai</th>
          <th>Perusahaan</th>
          <th>Posisi</th>
          <th>Tanggal</th>
        </tr>  
      </thead>
      <tbody>
        <?php
          $no = 1;
          $koneksi = new mysqli("localhost","root","","db_mybkk");
          if(isset($_GET['perusahaan'])){
            if($_GET['perusahaan'] == ""){
            $sql = $koneksi->query("SELECT*from tbl_pelamar");
            }
            else{
            $sql = $koneksi->query("SELECT*from tbl_pelamar where id_loker='".$_GET['perusahaan']."'");
            }
          }
          else{
          $sql = $koneksi->query("SELECT*from tbl_pelamar");
          }
          while ($tampil = $sql->fetch_assoc()) {
        ?>
          <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $tampil['id_pelamar'] . "/" . $tampil['id_lamar']; ?></td>
          <td><?php echo $tampil['NamaLengkap']; ?></td>
          <td><?php echo $tampil['Sekolah']; ?></td>
          <td><?php echo $tampil['Jurusan']; ?></td>
          <td><?php echo $tampil['TB']; ?></td>
          <td><?php echo $tampil['BB']; ?></td>
          <td><?php echo $tampil['Nilai']; ?></td>
          <td><?php echo $tampil['Perusahaan']; ?></td>
          <td><?php echo $tampil['Posisi']; ?></td>
          <td><?php echo $tampil['tgl_lamar'] ?></td>
        </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>
<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");
?>