<?php
	$no = @$_GET['no'];
	$sql = $koneksi->query("select Gambar from tbl_loker where no='$no'");
	$we=mysqli_fetch_array($sql);
	unlink("page/loker/img/".$we[0]."");
	$koneksi ->query("delete from tbl_loker where no='$no'");
	
?>
<script type="text/javascript">
	window.location.href="?page=loker";
</script>