<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color:  lightskyblue;
        }
    </style>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
        $data_barang = ["Keyboard", "Mouse", "Monitor"];
        foreach ($data_barang as $barang) {
            echo "<tr>";
            echo "<td>$barang</td>";
            echo "<td>Rp 100.000</td>";
            echo "<td>10</td>";
            echo "</tr>";
        }
        ?>
</body>
</html>

