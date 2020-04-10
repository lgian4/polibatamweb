<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Hitung Nilai Mahasiswa</title>
</head>
<body>
    <center><h1>Program Hitung Nilai Dengan PHP </h1></center>
    <form action="proses.php" method="POST">
        <table width="350" border="1" align="center" bordercolor="#0000FF">
            <tr>
                <td><strong>NIM</strong></td>
                <td><input type="text" name="nim" id="nim"></td>
            </tr>
            <tr>
                <td width="142"><strong>Nama Mahasiswa</strong></td>
                <td width="182"><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><strong>Jurusan</strong></td>
                <td><input type="text" name="jurusan" id="jurusan"></td>
            </tr>
            <tr>
                <td><strong>Nilai Absen</strong></td>
                <td><input type="text" name="absen" id="absen"></td>
            </tr>
            <tr>
                <td><strong>Nilai Tugas</strong></td>
                <td><input type="text" name="tugas" id="tugas"></td>
            </tr>
            <tr>
                <td><strong>Nilai UTS</strong></td>
                <td><input type="text" name="uts" id="uts"></td>
            </tr>
            <tr>
                <td><strong>Nilai UAS</strong></td>
                <td><input type="text" name="uas" id="uas"></td>
            </tr>
        </table>
        <center><input type="submit" value="Submit" value="Hitung"></center>
    </form>
</body>
</html>