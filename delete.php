<?php

include("koneksi.php");

if( isset($_GET['nim']) ){

	// ambil id dari query string
	$nim = $_GET['nim'];

	// buat query hapus
	$sql = "DELETE FROM mahasiswa WHERE nim=$nim";
	$query = mysqli_query($koneksi, $sql);
	header("location: tampil-data.php");
} else {
	die("Tidak Dapat Menghapus");
}

?>
