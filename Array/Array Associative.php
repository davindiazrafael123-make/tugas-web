<?php
$mahasiswa = [
    ["nama" => "Davin", "nik" => 12345, "email" => "davin@example.com", "jurusan" => "PPLG"],
    ["nama" => "Rizki", "nik" => 12346, "email" => "rizki@example.com", "jurusan" => "Teknik Komputer"],
    ["nama" => "Rizal", "nik" => 12347, "email" => "rizal@example.com", "jurusan" => "Teknik Komputer"],  
    ["nama" => "Diaz", "nik" => 12348, "email" => "diaz@example.com", "jurusan" => "PPLG"],
];

foreach ($mahasiswa as $data){
    echo "Nama Mahasiswa :" . $data["nama"];
    echo "<br>";
    echo "NIK Mahasiswa :" . $data["nik"];
    echo "<br>";
    echo "Email Mahasiswa :" . $data["email"];
    echo "<br>";
    echo "Jurusan Mahasiswa :" . $data["jurusan"];
    echo "<br>";
    echo "<br>";
}
?>