<script type="text/javascript">
  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
    oFReader.onload = function (oFREvent){
    document.getElementById("uploadPreview").src = oFREvent.target.result;
  };
};
</script>

<div id="wrapper">
  <div class="row">
    <div class="panel-body">
      <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back</button>
      <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh</button>
    </div>
    <div class="col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Artikel
        </div>
        <div class="panel-body">
          <div class="col-lg-12">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label>Gambar</label><br>
                <img id="uploadPreview" style="width:300px; height : 150px;" />
                <input required="" type="file" name="gambar" onchange=PreviewImage(this.id) id="uploadImage" />
              </div>
              <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" name="judul" placeholder="Judul Artikel" required="" class="form-control">
              </div>
              <div class="form-group">
                <label>Deskripsi Singkat</label>
                <input required="" maxlength="150" class="form-control" type="text" name="deskripsiSingkat" placeholder="Deskripsi Singkat Max 150 Karakter">
              </div>
              <div class="form-group">
                <label>Deskripsi Lengkap</label>
                <textarea class="form-control" rows="5" name="deskripsi"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"> 
                <button type="reset" class="btn btn-default" onClick="history.go(0)">Reset</button>
                <button type="submit" class="btn btn-danger" onClick="history.go(-1)">Batal</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  $username = 'Admin';
  $judul = @$_POST['judul'];
  $deskripsiSingkat = @$_POST['deskripsiSingkat'];
  $deskripsi = @$_POST['deskripsi'];

if (isset($_POST['simpan'])) {
  $nama = $_FILES['gambar']['name'];
  $asal = $_FILES['gambar']['tmp_name'];
  $ukuran = $_FILES['gambar']['size'];
  if ($ukuran < 1000000) {
    move_uploaded_file($asal, "page/artikel/img/" . $nama);

    $sql = $koneksi->query("INSERT into tbl_artikel (username, gambar, judul, deskripsi_singkat, deskripsi) values ('$username','$nama','$judul','$deskripsiSingkat','$deskripsi')");

  if ($sql) {
    ?>
		<script type="text/javascript">
			alert ('Data Berasil Disimpan');
			window.location.href="?page=artikel"
		</script>
		<?php
  }else {
    echo "GAGAL UPLOAD";
  }
} else {
  echo "<script>alert('Ukuran Gambar Terlalu Besar . Ukuran Gambar Kurang dari 1 MB ya !!!');</script>";
  }
}
?>