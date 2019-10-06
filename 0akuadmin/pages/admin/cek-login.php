<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['admin'])) {
	//redirect ke halaman login
	echo "<script>window.location='../index.php';</script>";
}
?>