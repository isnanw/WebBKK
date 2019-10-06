<?php
  $no = @$_GET['no'];
  $sql = $koneksi->query("select * from tbl_user where no='$no'");
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
                    <label>Username</label>
                    <input class="form-control" name="username" value="<?php echo $tampil['username'];?>" />
				</div>

				<div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="password" type="password" value="<?php echo $tampil['password'];?>" />
				</div>
				
                <div class="form-group">
                    <label>Level</label>
                    <input class="form-control" name="level" value="<?php echo $tampil['level'];?>" />
                </div>

				<div>
                	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div></div></div></div>

<?php
	$username = @$_POST['username'];
	$password = @$_POST['password'];
	$level = @$_POST['level'];
	$simpan = @$_POST['simpan'];

	if ($simpan) {
		$sql = $koneksi->query("update tbl_user set username='$username', password='$password', level='$level' where no='$no'");

		if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data Berasil Diupdate');
			window.location.href="?page=akun"
		</script>
		<?php
		}
 	}elseif ($simpan) {
 			echo "gagal upload";
	}
?>