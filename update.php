<?php 

require 'functions.php';

//ambil data di url
$id = $_GET["id"];

$update = query("SELECT * FROM member WHERE id= $id")[0];


//apakah tombol submit sudah ditekan?
if (isset($_POST['submit'])) {
    //cek apakah data berhasil diubah atau tidak
    if (edit($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
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
    <h1>Edit Data Mahasiswa</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $update["id"] ?>"></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td><input type="text" name="foto" require value="<?php echo $update["foto"] ?>"></td>
            </tr>
            <tr>
                <td><label for="nama_panggung">Nama Panggung</label></td>
                <td><input type="text" name="nama_panggung" require value="<?php echo $update['nama_panggung'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nama_lahir">Nama Lahir</label></td>
                <td><input type="text" name="nama_lahir" require value="<?php echo $update['nama_lahir'] ?>"></td>
            </tr>
            <tr>
                <td><label for="posisi">Posisi</label></td>
                <td><input type="text" name="posisi" require value="<?php echo $update['posisi'] ?>"></td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                <td><input type="date" name="tanggal_lahir" require value="<?php echo $update['tanggal_lahir'] ?>"></td>
            </tr>
            <tr>
                <td><label for="tinggi_badan">Tinggi Badan</label></td>
                <td><input type="text" name="tinggi_badan" require value="<?php echo $update['tinggi_badan'] ?>"></td>
            </tr>
            <tr>
                <td><label for="kekuatan_super">Kekuatan Super</label></td>
                <td><input type="text" name="kekuatan_super" require value="<?php echo $update['kekuatan_super'] ?>">
                </td>
            </tr>
            <tr>
                <td><label for="sub_unit">Sub Unit</label></td>
                <td><input type="text" name="sub_unit" require value="<?php echo $update['sub_unit'] ?>"></td>
            </tr>
        </table><br>
        <button type="submit" name="submit">Edit Data</button></td>
    </form>
</body>

</html>