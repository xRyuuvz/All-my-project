<h3>DATA BUAH</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">KODE BUAH</td>
            <td><input type="text" name="KODE"></td>
        </tr>
        <tr>
            <td>NAMA BUAH</td>
            <td><input type="text" name="NAMA_BUAH"></td>
        </tr>
        <tr>
            <td >HARGA</td>
            <td><input type="text" name="HARGA_BUAH"></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="Proses" value="submit">
            </td>
        </tr>

    </table>
</form>
<?php
include "koneksi.php";

if(isset($_POST['Proses'])){
    mysqli_query($koneksi,"insert into data_buah set
    ID = '$_POST[KODE_BUAH]', 
    NAMABUAH ='$_POST[NAMA_BUAH]',
    HARGA ='$_POST[HARGA_BUAH]'");
    
    echo "berescuykudunageuskakirim";
}
    ?>
<h2>Data Buah</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>NAMABUAH</th>
        <th>HARGA</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php

    include "koneksi.php";
    $no = 1; 
    $ambildata = mysqli_query($koneksi,"select * from data_buah" );
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr>
        <td>$tampil[ID]</td>
        <td>$tampil[NAMABUAH]</td>
        <td>$tampil[HARGA]</td>
        <td><a href='?Hapus=$tampil[ID]' onClick=\"return confirm('yakin mau haspus koleksi');\">
        <input type='button' value='Hapus'>
        </a>
        </td>
        <td>Ubah</td>
        </tr>";

    }

    ?>
</table>
<?php
if(isset($_GET['Hapus'])){
    mysqli_query($koneksi,"delete from data_buah where ID='$_GET[Hapus]'");

    echo "bisa coyy";
    echo "<meta http-equev=refresh content=2;URL='BUAH.php'>";
}
?>