<?php
require 'function.php';
$id = $_GET["id"];
if (hapus($id) > 0) {
    echo "data berhasil dihapus";
} else {
    echo "data gagal dihapus";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Kembali Ke Menu Utama</a>   
</body>
</html>