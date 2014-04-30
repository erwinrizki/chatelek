<?php
	session_start();
	include('koneksi.php');
	
	$user = $_SESSION['user'];
	$update = "update data_user set status='off' where username='$user'";
	$q=mysql_query($update);
	session_destroy();
	
	header('location:index.php');
?>