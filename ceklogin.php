<?php
session_start();

$conn = mysqli_connect('localhost','root','','pembayaran_spp');

$username = stripslashes($_POST['username']);
$password = md5($_POST['password']);
$nama = stripslashes($_POST['username']);
$password2 = stripslashes($_POST['password']);
$query1 = "SELECT * FROM petugas where username='$username'AND password= '$password' ";
$query2 = "SELECT * FROM siswa where nama = '$nama' AND password = '$password2' ";
$row1 = mysqli_query($conn,$query1);
$row2 = mysqli_query($conn,$query2);
$data1 = mysqli_fetch_array($row1);
$data2 = mysqli_fetch_assoc($row2);
$cek1 = mysqli_num_rows($row1);
$cek2 = mysqli_num_rows($row2);

if($cek1 > 0){
    if($data1['level'] == "Admin"){
        $_SESSION['id_petugas'] = $data1['id_petugas'];
        $_SESSION['level'] = $data1['level'];
        $_SESSION['username'] = $data1['username'];
        $_SESSION['name'] = $data1['name'];
        header('location:admin/pages/dashboard.php');
    }else if($data1['level'] == "Petugas"){
        $_SESSION['id_petugas'] = $data1['id_petugas'];
        $_SESSION['level'] = $data1['level'];
        $_SESSION['username'] = $data1['username'];
        $_SESSION['name'] = $data1['name'];
        header('location:petugas/pages/dashboard.php');
    }
}elseif ($cek2 > 0) {
    if ($data2['level'] == "Siswa"){
        $_SESSION['nama'] = $data2['nama'];
        $_SESSION['nisn'] = $data2['nisn'];
        $_SESSION['nama_kelas'] = $data2['nama_kelas'];
        $_SESSION['name'] = $data2['name'];
        header('location:siswa/pages/dashboard.php');
    }
}else{
    $msg = 'Username Atau Password Salah';
    header('location:index.php?msg='.$msg);
}
?>
