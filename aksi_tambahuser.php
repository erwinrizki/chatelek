<?php
	session_start();
	include "koneksi.php";
	
	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$enkpass = md5($pass);
	
	$cek = "SELECT * FROM data_user WHERE username='$user'";
	$qcek = mysql_query($cek);
	$jum = mysql_num_rows($qcek);
	if($jum>0) {
		echo "<script>alert('Username Sudah Terdaftar!');location.replace('register_user.php');</script>";
	} else {
		$tambah = "INSERT INTO data_user VALUES(null,'$nama','$user','$pass','off');";
		$tambahquery = mysql_query($tambah);
		if($tambah) {
			echo "<script>alert('Register User Success!');location.replace('index.php');</script>";
		} else {
			echo "<script>alert('Register User Failed!');location.replace('register_user.php');</script>";
		}
	}
	
?>