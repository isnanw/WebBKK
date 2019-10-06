<?php
  $id = @$_GET['id'];
  $sql = $koneksi->query("select * from tbl_pesan where id='$id'");
  $tampil = $sql->fetch_assoc();
?>
<div class="panel-body">
            	<button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
                <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
            </div>
<div class="panel panel-primary">
<div class="panel-heading">
	Edit Data
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="">

				<div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="Nama" value="<?php echo $tampil['Nama'];?>" />
				</div>

                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="Email" value="<?php echo $tampil['Email'];?>" />
                </div>

                <div class="form-group">
                    <label>Pesan</label>
                    <input class="form-control" name="Pesan" value="<?php echo $tampil['Pesan'];?>" />
                </div>
				<div>
        	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        </div>
            </form>
        </div>
    </div>
</div></div></div></div>

<?php
	$Nama = @$_POST['Nama'];
	$Email = @$_POST['Email'];
	$Pesan = @$_POST['Pesan'];
	$simpan = @$_POST['simpan'];

	if ($simpan) {
		$sql = $koneksi->query("update tbl_pesan set Nama='$Nama', Email='$Email', Pesan='$Pesan' where id='$id'");

		if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data Berasil Diupdate');
			window.location.href="?page=pesan"
		</script>
		<?php
		}
 	}elseif ($simpan) {
 			echo "gagal upload";
	}
?>