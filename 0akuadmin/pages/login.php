<?php
session_start();
include('koneksi.php');

if(isset($_POST['login'])){
	$user = mysql_real_escape_string(htmlentities($_POST['username']));
	$pass = mysql_real_escape_string($_POST['password']);
 
	$sql = mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE username='$user' AND password='$pass'") or die(mysql_error());
	if(mysqli_num_rows($sql) == 0){
		echo '<script language="javascript">alert("User dan Password Salah !"); document.location="index.php";</script>';
	}else{
		$row = mysqli_fetch_assoc($sql);
		if($row['level'] == admin){
			$_SESSION['admin']=$user;
			header('location:admin');
		}
		elseif($row['level'] == user){
			$_SESSION['user']=$user;
			header('location:user');
		}
		
	}
}
?>