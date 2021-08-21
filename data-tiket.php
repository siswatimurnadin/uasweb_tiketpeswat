<center>
    <table border="1">
        <form action="simpan-tiket.php" method="POST">
        <tr>
            <th>Kode Tiket</th>
            <th>Kode Pesawat</th>
            <th>Nama Penumpang</th>
            <th>Penerbangan</th>
            <th>Tujuan</th>
            <th>Aksi</th>
        </tr>
        <?php
            include ("db.php");
            
            $tampil = mysqli_query($con, "SELECT  * FROM  tiket");
            while($r = mysqli_fetch_array($tampil,MYSQLI_NUM))
            {
                echo "
                    <tr>
                        <td>$r[0]</td>
                        <td>$r[1]</td>
                        <td>$r[2]</td>
                        <td>$r[3]</td>
                        <td>$r[4]</td>
                        <td>
                            <a href='#'> Edit</a>
                            <a href='#'> Hapus</a>
                    </tr>
                ";
            }
        ?>
       
</table>