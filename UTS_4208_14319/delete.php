<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM `penilaian` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php");
} else {
    echo "Failed: ". mysqli_error($conn);
}
?>