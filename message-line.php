<?php
	date_default_timezone_set("Asia/Jakarta");
	include('koneksi.php');
	
	$date = date('Ymd');
	$tampil = "select * from data_chat where tanggal='$date' order by id asc";
	$q=mysql_query($tampil);
	while($r=mysql_fetch_array($q)){
		echo "<div class='message-line'>$r[username] : $r[pesan]</div>";
	}
?>
