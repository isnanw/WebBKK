<?php
	$no = @$_GET['id'];
	$koneksi ->query("delete from tbl_pesan where id='$no'");
?>
<script type="text/javascript">
	window.location.href="?page=pesan";
</script>