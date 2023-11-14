<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "tugas 2 web application development";

$koneksi = mysqli_connect($host,$user,$pass,$db);//buat koneksi
if(!$koneksi){ //cek koneksi
    die("Error connecting to database");
}

$done = "";
$fail = "";

$poster     = "";
$judul      = "";
$deskripsi  = "";
$harga      = "";

// op digunakan untuk menangkap variable yang mungkin terlewatkan
if(isset($_GET['op'])){
    $op = $_GET['op'];
}else{
    $op = "";
}
if($op == 'delete'){
    $id     = $_GET['id'];
    $sql1   = "delete from hanflix where id = '$id'";
    $q1     = mysqli_query($koneksi,"DELETE FROM hanflix where id = '$id'");
    if($q1){
        $done = "Data telah dihapus";
    }else{
        $fail = "Data gagal dihapus";
    }
}

if($op == 'edit'){
    $id         = $_GET['id'];
    $sql1       = "select * from hanflix where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    $r1         = mysqli_fetch_array($q1);
    $poster     = $r1['poster'];
    $judul      = $r1['judul'];
    $deskripsi  = $r1['deskripsi'];
    $harga      = $r1['harga'];

    if($judul == ''){
        $fail = "Data tidak ditemukan";
    }
}


//Create
if(isset($_POST['simpan'])){ //perhatikan
    
    //$direktori = "berkas/";
    //$file_name=$_FILES['poster']['name'];
    //move_uploaded_file($_FILES['poster']['tmp_name'],$direktori.$file_name);

    $poster     = $_POST["poster"];
    $judul      = $_POST["judul"];
    $deskripsi  = $_POST["deskripsi"];
    $harga      = $_POST["harga"];

    if($poster && $judul && $deskripsi && $harga){
        if($op == 'edit'){
            $sql1   = "update hanflix set poster = '$poster',judul = '$judul',deskripsi = '$deskripsi', harga = '$harga' where id = '$id'";
            $q1     = mysqli_query($koneksi,$sql1);
            if($q1){
                $done = "Data telah diupdate";
            }else{
                $fail = "Data gagal diupdate";
            }
        }else{
            $sqli = "insert into hanflix (poster, judul, deskripsi, harga) values ('$poster', '$judul', '$deskripsi', '$harga')"; 
            $q1 = mysqli_query($koneksi, $sqli);
            if ($q1){
                $done = "Berhasil menambahkan data baru";
            }else{
                $fail = "Gagal menambahkan data";
            }            
        }
    }else{
        $fail="Mohon masukkan data dengan lengkap";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto {width: 800px;}
        .card {margin-top: 15px}
    </style>
</head>
<body>
    <div class="mx-auto">

        <!-- Input -->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($fail){
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $fail ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php"); //auto refresh selama 3 detik
                }
                ?>

                <?php
                if ($done){
                    ?>
                    <div class="alert alert-success " role="alert">
                        <?php echo $done ?>
                    </div>
                <?php
                   header("refresh:5;url=index.php"); //auto refresh selama 3 detik
                }
                ?>

                <form action="" method="POST">

                    <!-- Poster -->
                    <div class="mb-3">
                        <label for="poster" class="form-label">Poster Film</label>
                        <input class="form-control" type="file" id="poster" name="poster" value ="<?php echo $poster ?>">
                    </div>

                    <!-- Judul Film -->
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value ="<?php echo $judul ?>">
                    </div>

                    <!-- Deskripsi Film -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value ="<?php echo $deskripsi ?>">
                    </div>

                    <!-- harga -->
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value ="<?php echo $harga ?>">
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" > <!-- salahhhhhhhh -->
                    </div>
                </form>
            </div>
        </div>

        <!-- output -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Film
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Poster</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Option</th>
                        <tr>
                                <tbody>
                                    
                                    
                                    <?php
                                    


                                    $sql2   = "select * from hanflix order by id asc";
                                    $q2     = mysqli_query($koneksi,$sql2);
                                    $urut   = 1;
                                    while($r2 = mysqli_fetch_array($q2)){
                                        $id         = $r2['id'];
                                        $poster     = $r2['poster'];
                                        $judul      = $r2['judul'];
                                        $deskripsi  = $r2['deskripsi'];
                                        $harga      = $r2['harga'];
                                    ?>

                                    
                                    <tr>
                                        <th scope="row"><?php echo $urut++ ?></th>
                                        <td scope="row"><img src="<?php echo $poster ?>" alt=""></td>
                                        <td scope="row"><?php echo $judul ?></td>
                                        <td scope="row"><?php echo $deskripsi ?></td>
                                        <td scope="row"><?php echo $harga ?></td>
                                        <td scope="row">
                                            <a href="index.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                            <a href="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><button type="button" class="btn btn-danger">Hapus</button></a> 
                                        </td>
                                    </tr>


                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </tr>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>    
</body>
</html>