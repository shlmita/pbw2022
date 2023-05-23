<?php
    include "koneksi.php";

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $komentar = $_POST['komentar'];
        $tanggal = $_POST['tanggal'];

        $sql = "INSERT INTO `penilaian` (`id`, `nama`, `komentar`, `tanggal`) VALUES (NULL, '$nama', '$komentar', '$tanggal')";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: index.php");
        } else {
            echo "Failed: ". mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <!-- box icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <section class="customers" id="customers">
        <div class="heading">
            <h2 style="color: #bc9667;">Tambah Komentar Baru</h2>
        </div>

        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukan nama">
            </div>
            <div class="form-group">
                <label for="komentar">Komentar</label>
                <input type="text" name="komentar" id="komentar" placeholder="Masukan komentar">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input class="tanggal" type="datetime-local" name="tanggal" id="tanggal">
            </div>
            <div class="heading" style="margin-top: 2rem; margin-bottom: -4rem;">
                <button class="btn" style="border:none; font-size:1rem" type="submit" name="submit" onclick="alert('Terimakasih telah memberikan komentar :)')">Submit</button>
                <a class="btn" href="index.php" style="border:none; font-size:1rem">Cencel</a>
            </div>
        </form>
    </section>

    <script src="java.js"></script>
</body>
</html>