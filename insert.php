<?php 

require 'functions.php';

//apakah tombol submit sudah ditekan?
if (isset($_POST['submit'])) {
    if (insert($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td><input type="text" name="foto" require></td>
            </tr>
            <tr>
                <td><label for="nama_panggung">Nama Panggung</label></td>
                <td><input type="text" name="nama_panggung" require></td>
            </tr>
            <tr>
                <td><label for="nama_lahir">Nama Lahir</label></td>
                <td><input type="text" name="nama_lahir" require></td>
            </tr>
            <tr>
                <td><label for="posisi">Posisi</label></td>
                <td><input type="text" name="posisi" require></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                <td><input type="date" name="tanggal_lahir" require></td>
            </tr>
            <tr>
                <td><label for="tinggi_badan">Tinggi Badan</label></td>
                <td><input type="text" name="tinggi_badan" require></td>
            </tr>
            <tr>
                <td><label for="kekuatan_super">Kekuatan Super</label></td>
                <td><input type="text" name="kekuatan_super" require></td>
            </tr>
            <tr>
                <td><label for="sub_unit">Sub Unit</label></td>
                <td><input type="text" name="sub_unit" require></td>
            </tr>
        </table><br>
        <button type="submit" name="submit">Tambah</button></td>

    </form>
</body>

</html>