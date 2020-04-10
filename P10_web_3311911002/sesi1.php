<?php
    //memulai sesi
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Sesi 1</title>
</head>
<body>
    <?php
        //set sesi
        $_SESSION['username'] = 'admin';
        $_SESSION['password'] = 'admin';

        echo "Variable sesi telah diciptakan";
        echo "<h2>CEK SESSION KLIK <a href='sesi2.php'>Di SINI</a</h2";
    ?>
</body>
</html>