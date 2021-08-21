<?php
    
    $user = 'root';
    $pass = '';
    $host = 'localhost';
    $db = 'tiket';

    $con = mysqli_connect($host, $user, $pass, $db);
     
    if (mysqli_connect_errno())
    {
        echo "koneksi gagal : " ;
        mysqli_connect_error();
    
    }
?>