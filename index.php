<?php 

// menghubungkan 2 file
require 'functions.php';
$member = query("SELECT * FROM member");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <style>
    table {
        /* paling penting biar gkada space antar data */
        border-collapse: collapse;
        text-align: center;
    }

    img {
        width: 100px;
        height: 143px;
    }

    th,
    td {
        border: 1px solid black;
        padding: 5px;
    }
    </style>
</head>

<body>
    <h1>Daftar Member EXO</h1>
    <a href="insert.php">Tambah Data Mahasiswa</a>
    <br><br>
    <table>
        <thead>
            <th>No.</th>
            <th>Foto</th>
            <th>Nama Panggung</th>
            <th>Nama Lahir</th>
            <th>Posisi</th>
            <th>Tanggal Lahir</th>
            <th>Tinggi Badan</th>
            <th>Kekuatan Super</th>
            <th>Sub Unit</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $i=1 ?>
            <?php foreach ($member as $data) : ?>
            <tr>
                <td><?php echo $i ?></td>
                <td>
                    <img src="images/<?php echo $data["foto"] ?>" alt="">
                </td>
                <td><?php echo $data["nama_panggung"] ?></td>
                <td><?php  echo $data["nama_lahir"] ?></td>
                <td><?php echo $data["posisi"] ?></td>
                <td><?php  echo $data["tanggal_lahir"] ?></td>
                <td><?php echo $data["tinggi_badan"] ?></td>
                <td><?php  echo $data["kekuatan_super"] ?></td>
                <td><?php echo $data["sub_unit"] ?></td>
                <td>
                    <a href="update.php? id=<?php echo $data["id"]; ?>">Edit</a> |
                    <a href="delete.php? id=<?php echo $data["id"]; ?>" onclick="return confirm('yakin?');">Delete</a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>

        </tbody>
    </table>



</body>

</html>