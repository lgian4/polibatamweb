<?php
    //memulai sesi
    session_start();
    $user =  $_SESSION['username'];
    $pass =  $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Sesi 2</title>
</head>
<body>
    <?php
        //echo variable sesi yang telah diset di halaman sebellumnya
        echo "Username : ".$user."<br>";
        echo "Pass : ".$pass."<br>";
        $_SESSION['password'] = 'admin';

        
        echo "<h2>Hapus SESSION KLIK <a href='sesi4.php'>Di SINI</a</h2";
    ?>
</body>
</html>