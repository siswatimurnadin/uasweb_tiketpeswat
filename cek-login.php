<?php
    include 'db.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];
 
    $cek = mysqli_query("select * from user where user='$user' and pass='$pass'");
    
        $_SESSION['user'] = $user;
        echo say("Selamat Datang","index.php");
    
?>