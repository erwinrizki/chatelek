<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$hapus = "DELETE FROM data_user WHERE id_user='$id';";
	$queryhapus = mysql_query($hapus);
	if($queryhapus) {
		echo "<script>alert('Data Berhasil Dihapus');location.replace('datauser.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');location.replace('datauser.php');</script>";
	}
?>