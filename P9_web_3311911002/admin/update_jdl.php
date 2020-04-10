<?php 
 // include database connection file 
 include 'koneksi.php';  
    $hari= $_POST['hari']; 
     $matkul=$_POST['matkul']; 
   
 
     $result = mysqli_query($koneksi, "UPDATE jadwal SET matkul='$matkul' WHERE hari='$hari'"); 
     // Redirect to homepage to display updated user in list   
      header("Location: indexjadwal.php"); ?> 
