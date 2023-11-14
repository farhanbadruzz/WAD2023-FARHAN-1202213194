<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "wad_modul3_farhan";
    $koneksi = mysqli_connect($host, $user, $pass, $db);
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
    if(!$koneksi){
        die("Koneksi Gagal: gagal menyambungkan ke database");
    }
// 
?>