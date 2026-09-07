<?php
require 'function.php';
if(isset($_POST["submit"])){

if(tambah($_POST)>0){
    echo "data berhasil ditambahkan";
    var_dump($_POST);
}else{
    echo "data gagal ditambahkan";
}
};

var_dump (count($_POST));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="yey.css">
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nis">NIS :</label>
                <input type="text" name="nis" id="nis">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
             <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
            <li>
                <a href="index.php">Kembali Ke Menu Utama</a>
            </li>
        </ul>
    </form>
</body>
</html>