<?php 
$conn = mysqli_connect("localhost","root","","phpdasar");


//func ambil data / tambah data
function query($query) {
    //agar bisa pakek variable diluar func
    global $conn;

    
    //mengambil data dri table
    $result = mysqli_query($conn, $query);

    //wadah untuk simpan data tersebut
    $rows =[];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] =$row;

    }
    return $rows;
}


//func tambah data
function insert($data) {

    global $conn;
    //ambil data dri tiap elemen dalam form

    $foto = htmlspecialchars($data["foto"]);
    $nama_panggung = htmlspecialchars($data["nama_panggung"]);
    $nama_lahir = htmlspecialchars($data["nama_lahir"]);
    $posisi = htmlspecialchars($data["posisi"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $tinggi_badan = htmlspecialchars($data["tinggi_badan"]);
    $kekuatan_super = htmlspecialchars($data["kekuatan_super"]);
    $sub_unit = htmlspecialchars($data["sub_unit"]);

     //query insert data
    $query = "INSERT INTO member 
    VALUES 
    ('', '$foto', '$nama_panggung', '$nama_lahir', '$posisi', '$tanggal_lahir', '$tinggi_badan', '$kekuatan_super', '$sub_unit')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM member WHERE id='$id'");
    return mysqli_affected_rows($conn);
}


function edit($data) {
global $conn;
    $id = htmlspecialchars($data["id"]);
    $foto = htmlspecialchars($data["foto"]);
    $nama_panggung = htmlspecialchars($data["nama_panggung"]);
    $nama_lahir = htmlspecialchars($data["nama_lahir"]);
    $posisi = htmlspecialchars($data["posisi"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $tinggi_badan = htmlspecialchars($data["tinggi_badan"]);
    $kekuatan_super = htmlspecialchars($data["kekuatan_super"]);
    $sub_unit = htmlspecialchars($data["sub_unit"]);

     //query insert data
    $query = "UPDATE member SET
            foto ='$foto',
            nama_panggung ='$nama_panggung',
            nama_lahir ='$nama_lahir',
            posisi ='$posisi',
            tanggal_lahir ='$tanggal_lahir',
            tinggi_badan ='$tinggi_badan',
            kekuatan_super ='$kekuatan_super',
            sub_unit ='$sub_unit'
            WHERE id=$id";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function search($keyword) {
    global $conn;

    $query = "SELECT * FROM member WHERE
                foto LIKE '%$keyword%' OR 
                nama_panggung LIKE '%$keyword%' OR
                nama_lahir LIKE '%$keyword%' OR
                posisi LIKE '%$keyword%' OR
                tanggal_lahir LIKE '%$keyword%' OR
                tinggi_badan LIKE '%$keyword%' OR
                kekuatan_super LIKE '%$keyword%' OR
                sub_unit LIKE '%$keyword%' 
            ";
    
    return query($query);
}
?>