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

<?php
  $sql = $koneksi->query("SELECT * from tbl_pelamar where id_lamar='".$_GET['id_lamar']."'");
  $tampil = $sql->fetch_assoc();
?>

<div class="text-center"><br>
<p style="font-size:20px;">Anda Berhasil Mendaftar Lowongan Kerja di <?php echo $tampil['Perusahaan']; ?></p>
Dengan Kode Pendaftaran
    <h3><?php
        echo $tampil['id_pelamar']."/".$tampil['id_lamar'];
        ?></h3>
        <a href="pages/laporan.php?id=<?php echo $_GET['id_lamar'] ?>"><button class="btn btn-success" type="button">Download Data Lamaran</button></a>
        <hr>
        <p style="font-size:15px; color:red;">
        Harap Kode Di Catat dan Ditunjukan ke BKK saat pendaftaraan ulang di office BKK Patria Karya Bhakti SMKN 1 Karanganyar
        </p>
  </div>
