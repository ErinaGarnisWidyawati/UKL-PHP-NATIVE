<?php 
// koneksi database
$conn = mysqli_connect('localhost','root','','pembayaran_spp');

if (isset($_POST['tambahsiswa'])) {
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama']; 
    $password = $_POST['password'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $level = $_POST['level'];
    $passencrypt = md5($password);
    $cek = mysqli_query($conn, "SELECT * FROM siswa WHERE nisn = '$nisn'") or die(mysqli_error($conn));

    $query_run = mysqli_query($conn, "INSERT INTO siswa (nisn, nis, nama, password, id_kelas, alamat, no_tlp, level) VALUES ('$nisn', '$nis', '$nama', '$passencrypt', '$id_kelas', '$alamat', '$no_tlp', '$level')");

    if ($query_run) {
        echo '<script> alert("Data Tersimpan");</script>';
        header('location: data_siswa.php');
    }else{
        echo '<script> alert("Data Tidak Tersimpan");</script>';
        header('location: data_siswa.php');
    }
}
?>