<?php
$no = @$_GET['id_artikel'];
$sql = $koneksi->query("select gambar from tbl_artikel where id_artikel='$no'");
$we = mysqli_fetch_array($sql);
unlink("0akuadmin/pages/admin/page/artikel/img/" . $we[0] . "");
$koneksi->query("delete from tbl_artikel where id_artikel='$no'");

?>
<script type="text/javascript">
	window.location.href="?page=profilku";
</script>