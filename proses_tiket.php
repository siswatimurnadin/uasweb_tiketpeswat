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

$simpan= mysqli_query ($con,"INSERT INTO tambah-tiket VALUES ('$kodetiket','$kodepesawat','$namapembeli','$penerbangan','$tujuan','$tglberangkat','$waktuberangkat','$waktusampai','$harga','$nokursi','$kelas','$total')");

    echo "Data Anda Berhasil Di Simpan";

?>

 