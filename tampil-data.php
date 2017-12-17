<?php 
    require_once 'koneksi.php';
    $view = mysqli_query($koneksi, "SELECT * FROM mahasiswa ");     
 ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lihat Data</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>

        <a href="tambah.php">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data_mahasiswa = mysqli_fetch_array($view)): ?>       
                    <tr>
                        <td><?php echo $data_mahasiswa['nim'] ;?> </td>
                        <td><?php echo $data_mahasiswa['nama'] ;?></td>
                        <td><?php echo $data_mahasiswa['alamat']; ?></td>
                        <td><a href="form-edit.php?nim=<?php echo $data_mahasiswa['nim']; ?>">Edit</a> | <a href="delete.php?nim=<?php echo $data_mahasiswa['nim']; ?>">Hapus</a></td>
                    </tr>       
                
            <?php endwhile ?>
        </tbody>
    </table>

        
        <script src="js/main.js"></script>
    </body>
</html>