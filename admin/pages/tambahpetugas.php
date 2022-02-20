<?php 
// koneksi database
$conn = mysqli_connect('localhost','root','','pembayaran_spp');

if (isset($_POST['tambahpetugas'])) {
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];
    $passencrypt = md5($pass);
    $query_run = mysqli_query($conn, "INSERT INTO petugas (id_petugas, username, password, nama_petugas, level) VALUES ('$id_petugas', '$username', '$passencrypt', '$nama_petugas', '$level')");

    if ($query_run) {
        echo '<script> alert("Data Tersimpan");</script>';
        header('location: data_petugas.php');
    }else{
        echo '<script> alert("Data Tidak Tersimpan");</script>';
        header('location: data_petugas.php');
    }
}
?>