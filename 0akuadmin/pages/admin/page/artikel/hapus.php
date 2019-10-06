<?php
  $no = @$_GET['id_artikel'];
  $sql = $koneksi->query("SELECT gambar from tbl_artikel where id_artikel='$no'");
  $del=mysqli_fetch_array($sql);
  unlink("page/artikel/img/".$del[0]."");
  $koneksi->query("DELETE from tbl_artikel where id_artikel='$no'");
?>
<script type="text/javascript">
  window.location.href="?page=artikel";
</script>