<?php 
// koneksi database
$conn = mysqli_connect('localhost','root','','pembayaran_spp');


if (isset($_POST['editsiswa'])) {
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama']; 
    $password = $_POST['password'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $level = $_POST['level'];

    $query_run = mysqli_query($conn, "UPDATE siswa SET nis ='$nis', nama = '$nama', password ='$password', id_kelas='$id_kelas', alamat='$alamat', no_tlp='$no_tlp', level ='$level' WHERE nisn = '$nisn'");

    if ($query_run) {
        echo '<script> alert("Data Tersimpan");</script>';
        header('location: data_siswa.php');
    }else{
        echo '<script> alert("Data Tidak Tersimpan");</script>';
        header('location: data_siswa.php');
    }
}
?>