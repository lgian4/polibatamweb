
<?php 
 // include database connection file 
 include 'koneksi.php';  $hari = $_GET['hari']; 
 $result = mysqli_query($koneksi, "DELETE FROM jadwal WHERE hari='$hari'"); 
 header("Location:indexjadwal.php");  ?> 
