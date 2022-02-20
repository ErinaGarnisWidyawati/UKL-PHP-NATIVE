<?php
// include database connection file
$conn = mysqli_connect('localhost','root','','pembayaran_spp');
 
// Get id from URL to delete that user
$id_kelas = $_GET['id_kelas'];
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM kelas WHERE id_kelas=$id_kelas");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:data_kelas.php");
?>