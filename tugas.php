<?php

$siswa = [
    [1, "Gilang", "l"],
    [2, "Robi", "l"],
    [3, "Rodi", "l"],
    [4, "Rojak", "l"],
];

foreach ($siswa as $datasiswa){
    echo "No Absen :" . $datasiswa[0];
    echo "<br>";
    echo "Nama Siswa :" . $datasiswa[1];
    echo "<br>";
    echo "Jenis Kelamin :" . $datasiswa[2];
    echo "<br>";
    echo "<br>";
} 

?>