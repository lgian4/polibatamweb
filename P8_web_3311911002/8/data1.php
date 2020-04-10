<!DOCTYPE html>
<html lang="en">
<head>    
    <title>PHP GET DAN POST</title>
</head>
<body>
    <center><h1>Program data Mahasiswa dengan Method Post </h1></center>
    <form action="tampil1.php" method="POST">
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
                <td><strong>Nilai</strong></td>
                <td><input type="text" name="nilai" id="nilai"></td>
            </tr>
        </table>
        <center><input type="submit" value="Submit" value="Tampil"></center>
    </form>
</body>
</html>