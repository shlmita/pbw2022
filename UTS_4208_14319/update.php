<?php
include "koneksi.php";

$id = $_GET['id'];

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];
    $tanggal = $_POST['tanggal'];

    $sql = "UPDATE `penilaian` SET `nama`='$nama',`komentar`='$komentar',`tanggal`='$tanggal' WHERE id=$id";

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
            <h2 style="color: #bc9667;">Edit Komentar</h2>
        </div>

        <?php
            $sql = "SELECT * FROM `penilaian` WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?php echo $row['nama'] ?>">
            </div>

            <div class="form-group">
                <label for="komentar">Komentar</label>
                <input type="text" name="komentar" id="komentar" value="<?php echo $row['komentar'] ?>">
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input class="tanggal" type="datetime-local" name="tanggal" id="tanggal" value="<?php echo $row['tanggal'] ?>">
            </div>

            <div class="heading" style="margin-top: 2rem; margin-bottom: -4rem;">
                <button class="btn" style="border:none; font-size:1rem" type="submit" name="submit" onclick="alert('Komentar anda telah diperbarui :)')">Update</button>
                <a class="btn" href="index.php" style="border:none; font-size:1rem">Cencel</a>
            </div>

    </section>

    <!-- boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>