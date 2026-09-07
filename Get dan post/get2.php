<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ( !isset($_GET["submit"])){
        header("Location: get.php");
        exit;
    }
    ?>
    <h1>Selamat Datang, <?php echo $_GET["nama"]?></h1>
    <?php
    var_dump($_GET);
    ?>
</body>
</html>