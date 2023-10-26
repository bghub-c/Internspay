<?php
	$servername = 'sql209.infinityfree.com';
	$user = 'if0_35309901';
	$pass = 'bp3iRRVJfUd';
	$dbname = 'if0_35309901_banksystem';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

?>
