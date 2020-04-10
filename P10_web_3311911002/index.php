<?php
    //memulai sesi
    session_start();
    $user =  $_SESSION['user'];    
?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Administrator</title>
</head>
<body>
    <h3>Selaman datang <?php echo $user; ?></h3>
</body>
</html>