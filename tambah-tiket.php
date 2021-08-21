<link rel="stylesheet" type="text/css" href="style.css">
<!--header-->

<table class="khusus">
<form  method="POST" action="proses-tiket.php">
    <tr>
        <td>Kode Tiket</td>
        <td>:</td>
        <td><input type="number" name="kodetiket" value="<?= rand(0, 999999)?>"></input></td>
    </tr>
    <tr>
        <td>Kode Pesawat</td>
        <td>:</td>
        <td>
            <select name="kodepesawat" class="input">
                <option>KP001</option>
                <option>KP002</option>
                <option>KP003</option>
                <option>KP004</option>
                <option>KP005</option>
                <option>KP006</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Nama Pembeli</td>
        <td>:</td>
        <td><input type="text" name="namapembeli" class="input" required placeholder="namapembeli"></input></td>
    </tr>
    <tr>
        <td>Penerbangan</td>
        <td>:</td>
        <td><input type="text" name="penerbangan" value="Ambon" class="input" ></input></td>
    </tr>
    <tr>
        <td>Tujuan</td>
        <td>:</td>
        <td><input type="text" name="tujuan" class="input" placeholder="tujuan" ></input></td>
    </tr>
    <tr>
        <td>Tanggal Berangkat</td>
        <td>:</td>
        <td><input type="date" placeholder="tglberangkat" name="tglberangkat" class="input" ></input></td>
    </tr>
    <tr>
        <td>Waktu Pemberangkatan</td>
        <td>:</td>
        <td><input type="time" name="waktuberangkat" class="input" placeholder="waktuberangkatan" ></input></td>
    </tr>
    <tr>
        <td>Waktu Sampai</td>
        <td>:</td>
        <td><input type="time" name="waktusampai" placeholder="waktusampai" class="input" ></input></td>
    </tr>
    <tr>
        <td>Harga Tiket</td>
        <td>:</td>
        <td><input type="number" placeholder="hargatiket" name="harga" class="input" ></input></td>
    </tr>
    <tr>
        <td>No Kursi</td>
        <td>:</td>
        <td><input type="text" name="nokursi" value="<?= rand(0, 100)?>"></input></td>
    </tr>
    <tr>
        <td>Kelas Pesawat</td>
        <td>:</td>
        <td>
            <select name="kelas" class="input">
                <option>Pilih Kelas Pesawat</option>
                <option>Esekutif</option>
                <option>Ekonomi</option>
                <option>Bisnis</option>
            </select>
        </td>
    </tr>
    <tr>
    <td colspan="3"><input type="submit" class="submit kanan" value="SIMPAN" required=""></input></td>
        
    </tr>
</form> 
</table> 