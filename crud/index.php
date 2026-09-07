<?php
require 'function.php';
$siswa = query("SELECT * FROM `data siswa`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Data Siswa</h1>
    <div class="container">
        <a href="tambah.php"><button>Tambah Data Siswa</button></a>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NO</th>
        <th>Aksi</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>email</th>
        <th>alamat</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($siswa as $sw) : ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="ubah.php?id=<?php echo $sw["id"];?>">ubah</a> |
            <a href="hapus.php?id=<?php echo $sw["id"];?>" onclick="return confirm('yakin?');">hapus</a> 
        </td>
        <td><?= $sw["nis"]; ?></td>
        <td><?= $sw["nama"]; ?></td>
        <td><?= $sw["email"]; ?></td>
        <td><?= $sw["alamat"]; ?></td>
        <td><?= $sw["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</body>
</html>