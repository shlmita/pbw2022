<?php 
$koneksi = mysqli_connect("localhost","root", "", "tugas"); 
 
if(isset($_POST['submit'])) {
    $nama = $_POST['nama']; 
    $email = $_POST['email']; 
    $telpon = $_POST['telpon']; 
    $pesanan = implode(', ', $_POST['pesanan']); 
    $alamat = $_POST['alamat']; 
    $catatan = $_POST['catatan']; 
    $jasa = $_POST['jasa']; 

    $query = "INSERT INTO `pesan`(`nama`, `email`, `telpon`, `pesanan`, `alamat`, `catatan`, `jasa`) VALUES ('$nama','$email','$telpon','$pesanan','$alamat','$catatan','$jasa')"; 

    mysqli_query($koneksi, $query);

    echo "<script>alert('Pesan berhasil dikirim. Terima kasih sudah memesan.')</script>";
}
?>
