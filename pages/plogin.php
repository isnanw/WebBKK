<?php
  if (isset($_POST['user']) && isset($_POST['pass'])) {
    $sql = $koneksi -> query("SELECT * from tbl_member where username='".$_POST['user']."' and password='".$_POST['pass']."'");
    $row = mysqli_num_rows($sql);
    if ($row <= 0) {
      echo "<script>alert('Username dan Password Salah');</script>";
      }else {
        $_SESSION['login']=$_POST['user'];
      }
    }
?>