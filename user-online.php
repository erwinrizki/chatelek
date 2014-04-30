user online
<?php
	include('koneksi.php');
	$q1="select * from data_user where status='on'";
	$h1=mysql_query($q1);
	while($row=mysql_fetch_array($h1)){
		echo "<div class=user-online>$row[username]</div>";
	}
?>