<?php
// include database connection file
$conn = mysqli_connect('localhost','root','','pembayaran_spp');
 
// Get id from URL to delete that user
$id_petugas = $_GET['id_petugas'];
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas=$id_petugas");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:data_petugas.php");
?>