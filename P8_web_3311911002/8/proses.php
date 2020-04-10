<?php
   
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $absen = $_POST['absen'];
  $tugas = $_POST['tugas'];
  $uts = $_POST['uts'];
  $uas = $_POST['uas'];
//menghitung nilai akhir

$akhir = (0.1 *$absen)+(0.2*$tugas)+(0.2*$uts)+(0.4*$uas);

if($akhir >=85)
$huruf = ("A") and $ket=("LULUS");
else 
if($akhir >=80)
$huruf = ("A-") and $ket=("LULUS");
else 
if($akhir >=75)
$huruf = ("B+") and $ket=("LULUS");
else 
if($akhir >=70)
$huruf = ("B") and $ket=("LULUS");
else 
if($akhir >=65)
$huruf = ("B-") and $ket=("LULUS");
else 
if($akhir >=60)
$huruf = ("C") and $ket=("LULUS");
else 
if($akhir >=55)
$huruf = ("D") and $ket=("TIDAK LULUS");
else 
if($akhir >100)
$huruf = ("") and $ket=("NILAI SALAH");
else
$huruf = ("E") and $ket=("TIDAK LULUS");
  echo"NIM :  $nim<br>";
  echo"Nama Mahasiswa : $nama<br>";
  echo"Jurusan : $jurusan<br>";
  echo"Nilai Akhir : $akhir<br>";
  echo"Grade : $huruf<br>";
  echo"Keterangan : $ket<br>";
?>