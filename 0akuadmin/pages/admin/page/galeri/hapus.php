<?php
	$no = @$_GET['no'];
	$sql = $koneksi->query("select Gambar from tbl_galeri where no='$no'");
	$we=mysqli_fetch_array($sql);
	unlink("page/galeri/img/".$we[0]."");
	$koneksi ->query("delete from tbl_galeri where no='$no'");
	
?>
<script type="text/javascript">
	window.location.href="?page=galeri";
</script>