<?php
include ("db.php");

$kodetiket=$_POST['kodetiket'];
$kodepesawat=$_POST['kodepesawat'];
$namapembeli=$_POST['namapembeli'];
$penerbangan=$_POST['penerbangan'];
$tujuan=$_POST['tujuan'];
$tglberangkat=$_POST['tglberangkat'];
$waktuberangkat=$_POST['waktuberangkat'];
$waktusampai=$_POST['waktusampai'];
$harga=$_POST['harga'];
$nokursi=$_POST['nokursi'];
$kelas=$_POST['kelas'];
$total=$harga;

$queri= mysqli_query ($con,"UPDATE tambah-tiket SET namapembeli='$namapembeli',tujuan='$tujuan',tglberangkat='$tglberangkat','$harga',kelas='$kelas','$total' WHERE nokursi='$nokursi'");
mysqli_query($con,$queri);
    echo "Data Anda Berhasil DiUbah";
?>

 