<?php
require 'function.php';
$id = $_GET["id"];
$mhs = query("SELECT * FROM  `data siswa` WHERE id=$id")[0];
if (isset($_POST["submit"])) {
    if(ubah($_POST)>0){
        echo "data berhasil diubah";
    }else{
        var_dump($_POST);
        echo "data gagal ditambahkan";
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $mhs["id"];?>">
        <ul>
            <li>
                <label for="nis">NIS</label>
                <input type="text" name="nis" id="nis" value="<?php echo $mhs["nis"];?>">
            </li>
            <li>
                <label for="nama">NAMA</label>
                <input type="text" name="nama" id="nama" value="<?php echo $mhs["nama"];?>">
            </li>
            <li>
                <label for="email">EMAIL</label>
                <input type="text" name="email" id="email" value="<?php echo $mhs["email"];?>">
            </li>
           <li>
                <label for="alamat">ALAMAT</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $mhs["alamat"];?>">   
           </li>
           <li>
                <label for="jurusan">JURUSAN</label>
                <input type="text" name="jurusan" id="jurusan" value="<?php echo $mhs["jurusan"];?>">
           </li>
              <li>
                 <button type="submit" name="submit">Ubah Data</button>
           <li>
            <a href="index.php">Kembali Ke Menu Utama</a>
           </li>
        </ul>
    </form>
</body>
</html>