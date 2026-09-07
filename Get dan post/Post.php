<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Post</title>
</head>
<body>
    <h2>Form Biodata</h2>
    <form action="proses.php" method="POST">
        <label>Nama :</label><br>
        <input type="text" name="nama"><br><br>
        <label>Umur :</label><br>
        <input type="number" name="umur"><br><br>
        <label>Kelas :</label><br>
        <input type="text" name="kelas"><br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>