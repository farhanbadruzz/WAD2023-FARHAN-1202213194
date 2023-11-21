<?php

include 'connect.php';

// function untuk melakukan login
function login($input) {

    // (1) Panggil variabel global $db dari file config
     global $db;
    // 

    // (2) Ambil nilai input dari form login
    if(isset($_POST['login'])){
        // a. Ambil nilai input email
        $email = $_POST['email'];
        // b. Ambil nilai input password
        $password = $_POST['password'];

    }
    // 

    // (3) Buat dan lakukan query untuk mencari data dengan email yang sama
    $query = "SELECT * FROM users WHERE email = '$email'";
    $reslut=mysqli_query($koneksi, $query);
    // 

    // (4) Buatlah perkondisian ketika email ditemukan ( gunakan mysqli_num_rows == 1 )
    if(mysqli_num_rows($reslut) == 1){
        // a. Simpan hasil query menjadi array asosiatif menggunakan fungsi mysqli_fetch_assoc
        $data = mysqli_fetch_assoc($reslut);
        // 

        // b. Lakukan verifikasi password menggunakan fungsi password_verify
            if(password_verify($password, $data['password'])){
            // c. Set variabel session dengan key login untuk menyimpan status login
                $_SESSION['login'] = TRUE;
            // d. Set variabel session dengan key id untuk menyimpan id user
                $_SESSION['id'] = $data['id'];
            //

            // e. Buat kondisi untuk mengecek apakah checkbox "remember me" terisi kemudian set cookie dan isi dengan id
            if(isset($_POST['remember'])){
                //bikin cookie
                setcookie('id', $data['id'], time()+60);
                //setcookie('key', hash('sha256', $data'username'), time()+60);
                header('location: ../home.php');
            }
            // 
        // f. Buat kondisi else dan isi dengan variabel session dengan key message untuk meanmpilkan pesan error ketika password tidak sesuai
            }else {
                # code...
                $_SESSION['message'] = 'Password tidka sesuai';
                $_SESSION['color']= 'danger';
            }

        // 
    // 

    // (5) Buat kondisi else, kemudian di dalamnya
    //     Buat variabel session dengan key message untuk menampilkan pesan error ketika email tidak ditemukan
    }else{
        $_SESSION['message'] = 'email tidak ditemukan';
        $_SESSION['color']= 'danger';
    }
    // 
}
// 

// function untuk fitur "Remember Me"
function rememberMe($cookie)
{
    // (6) Panggil variabel global $db dari file config
    global $db;
    // 

    // (7) Ambil nilai cookie yang ada
    if(isset($_COOKIE['id'])){
        $id = $_COOKIE['id'];
    }
    // 

    // (8) Buat dan lakukan query untuk mencari data dengan id yang sama
    $query2 = "SELECT * FROM users WHERE id = '$id'";
    $result2 = mysqli_query($koneksi, $query2);
    // 

    // (9) Buatlah perkondisian ketika id ditemukan ( gunakan mysqli_num_rows == 1 )
    if(mysqli_num_rows($reslut) == 1){
        // a. Simpan hasil query menjadi array asosiatif menggunakan fungsi mysqli_fetch_assoc
        $data = mysqli_fetch_assoc($result2);
        // b. Set variabel session dengan key login untuk menyimpan status login
        $_SESSION['login'] = TRUE;
        // c. Set variabel session dengan key id untuk menyimpan id user
        $_SESSION['id'] = $data['id'];
    
    // 
    }
}
// 

?>