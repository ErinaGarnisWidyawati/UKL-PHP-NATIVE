<?php
// include database connection file
$conn = mysqli_connect('localhost','root','','pembayaran_spp');
 
// Get id from URL to delete that user
$nisn = $_GET['nisn'];
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM siswa WHERE nisn=$nisn");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:data_siswa.php");
?>