<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nis = $data["nis"];
    $nama = $data["nama"];
    $email = $data["email"];
    $alamat = $data["alamat"];
    $jurusan = $data["jurusan"];
    mysqli_query($conn, "INSERT INTO `data siswa` VALUES (0, '$nis',
    '$nama', '$email', '$alamat', '$jurusan')");
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM `data siswa` WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nis = $data["nis"];
    $nama = $data["nama"];
    $email = $data["email"];
    $alamat = $data["alamat"];
    $jurusan = $data["jurusan"];
    mysqli_query($conn, "UPDATE `data siswa` SET
        nis = '$nis',
        nama = '$nama',
        email = '$email',
        alamat = '$alamat',
        jurusan = '$jurusan'
        WHERE id = $id
    ");
    return mysqli_affected_rows($conn);
}
?>
