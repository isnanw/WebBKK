<?php
  $no = @$_GET['no'];
  $sql = $koneksi->query("select * from tbl_loker where no='$no'");
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
<<br>
<div class="container">
<!-- Page Heading/Breadcrumbs -->
  <div class="text-center">
    <h2>Form Pendaftaran Kerja</h2>
  </div>
<div class="col-lg-12">
	<div class="row">
<div class="col-lg-6 col-md-12"><br>
<h4 class="text-center">Data Diri</h4>
  <form role="form" action="" method="POST">
  <div class="form-group">
    <label>Nama Lengkap</label>
    <input required="" class="form-control" type="text" name="nama" placeholder="Masukkan Nama Lengkap">
  </div>
  <div class="form-group">
    <label>Asal Sekolah</label>
    <input required="" class="form-control" type="text" name="sekolah" placeholder="Asal Sekolah" maxlength="150">
  </div>
  <div class="form-group">
    <label>Jurusan</label>
    <input required="" class="form-control" type="text" name="jurusan" placeholder="Jurusan">
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input  class="form-control" type="date" name="tgl_lahir" />
  </div>
  <div class="form-group">
    <label>Tinggi Badan</label>
    <input required="" class="form-control" type="number" name="tb" placeholder="Tinggi Badan (cm)">
  </div>
  <div class="form-group">
    <label>Berat Badan</label>
    <input required="" class="form-control" type="number" name="bb" placeholder="Berat Badan (kg)">
  </div>
    <div class="form-group">
    <label>Nilai Ujian</label>
    <input required="" class="form-control" type="text" name="nilai" placeholder="Nilai Ujian / Nilai Rata-rata Raport">
  </div>
</div>
<div class="col-lg-6 col-md-12"><br>
<h4 class="text-center">Data Lowongan Pekerjaan</h4>
  <form role="form" action="" method="POST">
  <div class="form-group">
    <label>Nama Perusahaan</label>
    <input class="form-control" type="text" name="perusahaan" readonly value="<?php echo $tampil['Perusahaan']; ?>"">
  </div>
  <div class="form-group">
    <label>Posisi Lowongan</label>
    <input  class="form-control" type="text" name="posisi" readonly value="<?php echo $tampil['Posisi']; ?>">
  </div>
  <div class="form-group hidden">
    <input readonly class="form-control" type="text" name="id_lamar" readonly value="<?php $tgl = getdate();echo $tgl['year'];echo $tampil['No']; ?>">
  </div>
  <div class="form-group">
    <input type="submit" name="lamar" value="Lamar Pekerjaan" class="btn btn-primary"> 
    <button type="reset" class="btn btn-default" onClick="history.go(0)">Reset</button>
    <button type="submit" class="btn btn-danger" onClick="history.go(-1)">Batal</button>
  </div>                                       
</form>
</div>
</div>
</div>
</div>
<?php
  $tanggal = getdate();
  $nama = @$_POST['nama'];
  $sekolah = @$_POST['sekolah'];
  $jurusan = @$_POST['jurusan'];
  $tb = @$_POST['tb'];
  $bb = @$_POST['bb'];
  $nilai = @$_POST['nilai'];
  $perusahaan = @$_POST['perusahaan'];
  $posisi = @$_POST['posisi'];
  $idloker = @$_GET['no'];
  $id_lamar = @$_POST['id_lamar'];
    
    if (isset($_POST['lamar'])) {
    $sql = $koneksi->query("INSERT into tbl_pelamar (id_lamar,id_loker,username, NamaLengkap,Sekolah,Jurusan,TB,BB,Nilai,Perusahaan,Posisi) values ('$id_lamar',".$idloker.",'".$_SESSION['login'] . "','$nama','$sekolah','$jurusan','$tb','$bb','$nilai','$perusahaan','$posisi')");

      if ($sql) {
        ?>
      <script type="text/javascript">
        alert ('Data Berasil Disimpan');
        window.location.href="?page=kode&id_lamar=<?php echo $id_lamar;?>"
      </script>
      <?php

  } else {
    echo "GAGAL UPLOAD";
  }
}
?>

