<?php

    include("db.php");
    $namapembeli=$_GET['namapembeli'];
    $hapus=mysqli-query($con, "DELETE FROM tambah-tiket WHERE namapembeli='$namapembeli'");

    echo "Data Andda Berhasil Dihapus";

?>