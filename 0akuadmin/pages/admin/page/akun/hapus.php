<?php
	$no = @$_GET['no'];
	$koneksi ->query("delete from tbl_user where no='$no'");
?>
<script type="text/javascript">
	window.location.href="?page=akun";
</script>