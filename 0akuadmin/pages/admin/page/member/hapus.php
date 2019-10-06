<?php
  $no = @$_GET['id_member'];
  $sql = $koneksi->query("SELECT gambar from tbl_member where id_member='$no'");
  $del = mysqli_fetch_array($sql);
  unlink("page/member/img/" . $del[0] . "");
  $koneksi->query("DELETE from tbl_member where id_member='$no'");
?>
<script type="text/javascript">
  window.location.href="?page=member";
</script>