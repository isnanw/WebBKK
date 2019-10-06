<?php
	$no = @$_GET['id'];
	$sql = $koneksi->query("select Gambar from tbl_logo where id='$no'");
	$we=mysqli_fetch_array($sql);
	unlink("page/our/img/".$we[0]."");
	$koneksi ->query("delete from tbl_logo where id='$no'");
	
?>
<script type="text/javascript">
	window.location.href="?page=our";
</script>