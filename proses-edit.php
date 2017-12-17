<?php

require_once 'koneksi.php';

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$alamat = $_POST['alamat'];

	// buat query update
	$sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat' WHERE nim='$nim'";
	$query = mysqli_query($koneksi, $sql);

	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: tampil-data.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}


} else {
	die("Akses dilarang...");
}

?>
