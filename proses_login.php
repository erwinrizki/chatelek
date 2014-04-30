<?php
	session_start();
	include "koneksi.php";
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$dpass = md5($pass);
	
	$tampil = "SELECT * FROM data_user WHERE username='$user' AND password='$pass';";
	$querytampil = mysql_query($tampil);
	$jum = mysql_num_rows($querytampil);
	if($jum>0) {
		$q2="update data_user set status='on' where username='$user' and password='$pass'";
		$h2=mysql_query($q2);
		$_SESSION['user'] = $user;
		echo "<script>location.replace('panel_user.php');</script>";
	} else {
		echo "<script>alert('Kombinasi Username dan Password Salah!');location.replace('index.php');</script>";
	}
?>