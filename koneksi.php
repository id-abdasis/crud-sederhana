<?php 
	$dbhost = "localhost";
	$dbuser	= "root";
	$dbpass	= "abdasis";
	$dbname	= "universitas";

	$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if ($koneksi -> connect_errno) {
		echo "Gagal Konekasi Ke Data Base";
	}else{
		return $koneksi;
	}

 ?>

