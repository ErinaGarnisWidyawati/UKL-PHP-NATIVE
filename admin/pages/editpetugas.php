<?php 
// koneksi database
$conn = mysqli_connect('localhost','root','','pembayaran_spp');


if (isset($_POST['editpetugas'])) {
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];

    $query_run = mysqli_query($conn, "UPDATE petugas SET username='$username', password='$password', nama_petugas='$nama_petugas', level='$level' WHERE id_petugas='$id_petugas'");

    if ($query_run) {
        echo '<script> alert("Data Tersimpan");</script>';
        header('location: data_petugas.php');
    }else{
        echo '<script> alert("Data Tidak Tersimpan");</script>';
        header('location: data_petugas.php');
    }
}
?>