<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <div class="card-body">
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Warna</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("connect.php");

                        // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
                        $sql2 = "select * from showroom_mobil";
                        $q2 = mysqli_query($koneksi, $sql2);
                        while($r2 = mysqli_fetch_array($q2)){
                            $id = $r2['id'];
                            $nama = $r2['nama_mobil'];
                            $brand = $r2['brand_mobil'];
                            $warna = $r2['warna_mobil'];
                            $tipe = $r2['tipe_mobil'];
                            $harga = $r2['harga_mobil'];
                        
                        ?>
                        <tr>
                            <td scope="row"><?php echo $id ?></td>
                            <td scope="row"><?php echo $nama ?></td>
                            <td scope="row"><?php echo $brand ?></td>
                            <td scope="row"><?php echo $warna ?></td>
                            <td scope="row"><?php echo $tipe ?></td>
                            <td scope="row"><?php echo $harga ?></td>
                            <td scope="row">
                                <a href="form_detail_mobil.php?id=<?php echo $id ?>">
                                    <button type="button" class="btn btn-warning">Detail</button>
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                    
                        ?>
            
                    </tbody>
        </table>
        </div>

            
            

            <!-- // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel' -->

            <!--  **********************  1  **************************     -->
            

            
            







            <!--  **********************  1  **************************     -->

            <!--  **********************  2  **************************     -->

            
            

            
            
            <!--  **********************  2  **************************     -->
            
        </div>
    </center>
</body>
</html>
