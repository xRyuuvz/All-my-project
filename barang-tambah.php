<h3> Tambah Barang </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Kode Barang </td>
        <td> <input type="text" name="KODE_BUAH"> </td>
    </tr>
    <tr>
        <td> Nama Barang </td>
        <td> <input type="text" name="NAMA_BUAH"> </td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="HARGA_BUAH"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into data_buah set  
KODE_BUAH = '$_POST[KODE_BUAH]',
NAMA_BUAH = '$_POST[NAMA_BUAH]',
HARGA_BUAH = '$_POST[HARGA_BUAH]'");

echo "Data barang baru telah tersimpan";

}

?>

<h3> Data Barang <h3>

<table border="1">
    <tr> 
        <th>No</th>
        <th>Kode Buah</th>
        <th>Nama Buah</th>
        <th>Harga</th>
        <th colspan="2">Akses</th>
    </tr>

    <?php
      
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from data_buah ");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
           <td>$no</td>
           <td>$tampil[KODE_BUAH]</td>
           <td>$tampil[NAMA_BUAH]</td>
           <td>$tampil[HARGA_BUAH]</td>
           <td><a href='?kode=$tampil[KODE_BUAH]'> Hapus </a></td>
           <td><a href=Ubah</td>
        </tr>";
        
        $no++;
    }
    ?>
</table>

<?php
if(isset($_GET['kode'])){

mysqli_query($koneksi,"delete from data_buah where KODE_BUAH='$_GET[kode]'");

echo "data telah dihapus";
echo "<meta http-equiv=refresh content=2;URL='barang-tambah.php'>";

}
?>