<?php
$angka = [3,2,15,6,7,8,9,10];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div {
        width : 500px;
        height : 50px;
        background-color : salmon;
        text-align : center;
        line-height: 50px;
        margin : 3px;
        float : left;
    }
</style>
<body>
<?php for($i=0; $i<=7; $i++)  { ?>
    <div><?php echo $angka[$i]; ?></div>
<?php } ?>
</body>
</html>