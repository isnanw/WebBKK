<?php
	$no = @$_GET['no'];
	$sql = $koneksi->query("select Gambar from tbl_industri where no='$no'");
	$we=mysqli_fetch_array($sql);
	unlink("page/industri/img/".$we[0]."");
	$koneksi ->query("delete from tbl_industri where no='$no'");
	
?>
<script type="text/javascript">
	window.location.href="?page=industri";
</script>