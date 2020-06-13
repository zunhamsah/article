<?php
	
	global $koneksi;

	$dbhost = "localhost:3306"; 
	$dbuser = "root";    
	$dbpass = "anton123";
	$dbname = "web2";

	$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	
	if(!$koneksi) {
	   die("Not Working " .mysqli_connect_error());
	}

?>