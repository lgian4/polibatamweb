<?php
  
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Membuat login dengan PHP dan MySQLi</title>
</head>
<body>
   <h3>Masukkan Username & Password</h3>
   <form action="cek_login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" id="username" placeholder="Masukkan Username"></td>                
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" id="password" placeholder="Masukkan Password"></td>                
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Login"></td>                
            </tr>
        </table>
   </form>
</body>
</html>