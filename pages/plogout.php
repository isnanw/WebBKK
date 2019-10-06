<?php
if(isset($_POST['logout'])){
  unset($_SESSION['login']);
  echo header('location:index.php');
}
?>