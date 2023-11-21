<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$user = "root";
$pass = "";
$db = "wad_modul3_farhan";

$koneksi = mysqli_connect($host,$user,$pass,$db);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if(!$koneksi){
    die("Error connecting to database");
}
// 
 
?>