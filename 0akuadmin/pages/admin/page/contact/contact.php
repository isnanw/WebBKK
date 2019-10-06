<?php
  $sql = $koneksi->query("select * from tbl_contact");
  $tampil = $sql->fetch_assoc();
?>

<h2>Contact Us</h2><hr>
<div class="panel-body">
  <button type="button" class="btn btn-warning" onClick="history.go(-1)"><i class="fa fa-rotate-left"></i> Back </button>
  <button type="button" class="btn btn-success" onClick="history.go(0)"><i class="fa fa-refresh"></i> Refresh </button>
  <button data-toggle="modal" data-target="#myModal" class="btn btn-primary"><i class="fa fa-pencil"></i> Update Data</button>
</div>
<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-red">
      <div class="panel-heading"><b>Email</b></div>
<!-- /.panel-heading -->
<div class="panel-body">
	<div><?php echo $tampil['NoTlp']; ?></div>
  	</div>
<!-- .panel-body -->
</div>
</div>
</form>
  <div class="col-lg-4">
    <div class="panel panel-red">
      <div class="panel-heading"><b>Hubungi</b></div>
      <!-- /.panel-heading -->
      <div class="panel-body">
      	<div><?php echo $tampil['NoWA']; ?></div>
  </div>
<!-- .panel-body -->
</div>
</div>
    <div class="col-lg-4">
    <div class="panel panel-red">
      <div class="panel-heading"><b>Alamat</b></div>
  		<!-- /.panel-heading -->
      <div class="panel-body">
      	<div><?php echo $tampil['Alamat']; ?></div>
      <!-- Button trigger modal -->
      
      </div>
      <!-- .panel-body -->
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
          </div>
          <form method="POST" action="">
          <div class="modal-body">
          <div class="form-group">
          <label>Email</label>
          <input required="" type="text" class="form-control" name="NoTlp" value="<?php 
              echo $tampil['NoTlp'];
            ?>"/><br>
          <label>NoWA</label>
          <input required="" type="text" class="form-control" name="NoWA"
            value="<?php 
              echo $tampil['NoWA'];
            ?>"/><br>
          <label>Alamat</label>
          <input required="" type="text" name="Alamat" class="form-control"
            value="<?php 
              echo $tampil['Alamat'];
            ?>"/>
          </div>
        <div>
        <input required="" type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
  
  </body>
<footer>
  <div class="col-lg-12">
    <hr>
  </div>
</footer>

<?php
	$NoTlp = @$_POST['NoTlp'];
	$NoWA = @$_POST['NoWA'];
	$Alamat = @$_POST['Alamat'];
	$simpan = @$_POST['simpan'];

	if (isset($_POST['simpan'])){

		$sql = $koneksi->query("update tbl_contact set NoTlp='$NoTlp', NoWA='$NoWA',  Alamat='$Alamat'");

		if ($sql) {
		?>
		<script type="text/javascript">
			alert ('Data Berasil Diupdate');
			window.location.href="?page=contact"
		</script>
		<?php
		}
 	}elseif ($simpan) {
 			echo "gagal upload";
	}
?>