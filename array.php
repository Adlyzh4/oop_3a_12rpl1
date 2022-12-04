<?php 
// array suatu variabel yg menampung banyak nilai
// membuat array cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["januari", "februari", "maret"];
// array boleh memiliki tipe data yg berbeda
$siswa = [123, "murid", true];

// cara menampilkan array 
// menggunakan var_dump(); / print_r();
// var_dump($bulan);
// echo "<br>";
// print_r($hari);
// echo "<br>";

// menampilkan 1 elemen array
// echo $siswa[1];
// echo "<br>";
// echo $siswa[0];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);







?>