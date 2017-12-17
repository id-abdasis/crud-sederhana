<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $alamat = $_POST['alamat'];

        $tambah = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim,nama, alamat) VALUES ('$nim','$nama', '$alamat')");
        echo "User added successfully. <a href='tampil-data.php'>View Users</a>";
    }
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
</head>

<body>
    <form action="tambah.php" method="POST">
        <!-- Form nama -->
        <fieldset>
            <input required type="text" name="nama" placeholder="Masukan nama mahasiswa"><br>
            <input required name="nim" type="text" placeholder="Masukan NIM mahasiswa"><br>
            <input required name="alamat" type="text" placeholder="Masukan Alamat mahasiswa"><br>
            <input type="submit" name="submit" value="Tambah ">
        </fieldset>    
    </form>
    </body>
</html>