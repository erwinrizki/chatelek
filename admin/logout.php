<?php
	session_start();
	
	$user = $_SESSION['admin'];
	session_destroy();
	header('location:index.php');
?>