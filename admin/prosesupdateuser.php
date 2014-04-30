<?php
	session_start();
	include "koneksi.php";
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	
	$cek = "SELECT * FROM data_user WHERE username='$user'";
	$qcek = mysql_query($cek);
	$jum = mysql_num_rows($qcek);
	if($jum>0) {
		echo "<script>alert('Username Sudah Terdaftar!');location.replace('datauser.php');</script>";
	} else {
		$ganti = "UPDATE data_user SET nama='$nama', username='$user', password='$pass' WHERE id_user='$id'";
		$qganti = mysql_query($ganti);
		if($qganti) {
			echo "<script>alert('Data User Berhasil Diupdate');location.replace('datauser.php');</script>";
		} else {
			echo "<script>alert('Data User Gagal Diupdate');location.replace('datauser.php');</script>";
		}
	}
?>