<?php
$no = @$_GET['id_pelamar'];
$koneksi->query("delete from tbl_pelamar where id_pelamar='$no'");
?>
<script type="text/javascript">
	window.location.href="?page=pelamar";
</script>