<?php
  $username = @$_POST['username'];
  $password = @$_POST['password'];
  $email = @$_POST['email'];

  if (isset($_POST['daftar'])) {
    $nama = $_FILES['img']['name'];
    $asal = $_FILES['img']['tmp_name'];
    $ukuran = $_FILES['img']['size'];
    
    if ($ukuran < 1000000) {
    move_uploaded_file($asal, "0akuadmin/pages/admin/page/member/img/" . $nama);

    $sql = $koneksi->query("INSERT into tbl_member (gambar, username, email, password) values ('$nama','$username','$email','$password')");

    if ($sql) {
?>
    <script type="text/javascript">
      alert ('Berhasil Daftar Member. Silahkan Login !!!');
      window.location.href="index.php"
    </script>
<?php

    } elseif (@$daftar) {
      echo "gagal upload";
    }
  } else {
    echo "<script>alert('Ukuran Gambar Terlalu Besar . Kurang dari 1 MB');</script>";
  }
}
?>