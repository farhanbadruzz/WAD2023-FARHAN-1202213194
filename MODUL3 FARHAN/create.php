<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");
$nama = "";
$brand = "";
$warna = "";
$tipe = "";
$harga = "";
// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if(isset($_POST)){
// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    $nama   = $_POST["nama_mobil"];
    // b. Ambil data brand mobil
    $brand  = $_POST["brand_mobil"];
    // c. Ambil data warna mobil
    $warna = $_POST["warna_mobil"];
    // d. Ambil data tipe mobil
    $tipe = $_POST["tipe_mobil"];
    // e. Ambil data harga mobil
    $harga = $_POST["harga_mobil"];

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $sql1 = "INSERT INTO showroom_mobil (nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) values ('$nama','$brand','$warna','$tipe','$harga')";
    $q1 = mysqli_query($koneksi, $sql1);    

    // (5) Buatkan kondisi jika eksekusi query berhasil
    if ($q1){
        echo "Berhasil menambahkan data baru";
    }
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
    else{
        echo "Gagal menambahkan data baru";
    }
// (7) Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($koneksi);
}
header("refresh:1;url=http://localhost:8000/JURNAL%20MODUL%203/list_mobil.php"); 
?>