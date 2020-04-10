<?php
    //memulai sesi
    session_start();
    //hapus variable
    session_unset();
    //hapus session
    session_destroy();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Sesi 2</title>
</head>
<body>
    <h3>Sesi telah dihapus</h3>  
</body>
</html>