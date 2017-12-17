<?php

    include("koneksi.php");

    // kalau tidak ada id di query string
    if( !isset($_GET['nim']) ){
        header('Location: index.php');
    }

    //ambil id dari query string
    $nim = $_GET['nim'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM mahasiswa WHERE nim=$nim";
    $query = mysqli_query($koneksi, $sql);
    $mahasiswa = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }

?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Data</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>

    <body>
        <form action="proses-edit.php" method="POST">
            <input type="text" value="<?php echo $mahasiswa['nama'] ?>" name="nama">
            <input type="text" name="nim" value="<?php echo $mahasiswa['nim'] ?>">
            <input type="text" name="alamat" value="<?php echo $mahasiswa['alamat'] ?>">
            <input type="submit" class="ui button primary " style="margin-top: 10px;" value="Update" name="update">
        </form>
        <script src="js/main.js"></script>
    </body>

    </html>