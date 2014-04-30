<?php
	session_start();
	include "koneksi.php";
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$dpass = md5($pass);
	
	$tampil = "SELECT * FROM admin WHERE username='$user' AND password='$dpass';";
	$querytampil = mysql_query($tampil);
	$jum = mysql_num_rows($querytampil);
	if($jum>0) {
		$_SESSION['admin'] = $user;
		echo "<script>location.replace('panel_admin.php');</script>";
	} else {
		echo "<script>alert('Kombinasi Username dan Password Salah!');location.replace('index.php');</script>";
	}
?>