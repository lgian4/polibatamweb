<?php  
include 'koneksi.php'; $hari = $_POST['hari']; 
 $matkul = $_POST['matkul']; 
 
 
 $input = mysqli_query($koneksi,"INSERT INTO jadwal 
 VALUES('$hari','$matkul')") or die(mysql_error());  if($input){ 
  	echo "Data Berhasil Disimpan"; 
  	 	header("location:indexjadwal.php"); 
 }else{ 
  	echo "Gagal Disimpan"; 
 } 
 ?> 
