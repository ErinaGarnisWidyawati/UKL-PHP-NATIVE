<?php 
// koneksi database
$conn = mysqli_connect('localhost','root','','pembayaran_spp');


if (isset($_POST['editkelas'])) {
    $id_kelas = $_POST['id_kelas'];
    $jurusan = $_POST['jurusan'];
    $nama_kelas = $_POST['nama_kelas'];
    $angkatan = $_POST['angkatan'];

    $query_run = mysqli_query($conn, "UPDATE kelas SET nama_kelas='$nama_kelas', jurusan='$jurusan', angkatan='$angkatan' WHERE id_kelas='$id_kelas'");

    if ($query_run) {
        echo '<script> alert("Data Tersimpan");</script>';
        header('location: data_kelas.php');
    }else{
        echo '<script> alert("Data Tidak Tersimpan");</script>';
        header('location: data_kelas.php');
    }
}
?>