<?php
	session_start();
	date_default_timezone_set("Asia/Jakarta");
	$date = date('Ymd');
	include('koneksi.php');
	
	$user = $_SESSION['user'];
	$teks = $_POST['text'];
	$tambah = "insert into data_chat values(null,'$user', '$teks', '$date')";
	$querytambah = mysql_query($tambah);
?>