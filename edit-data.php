<?php
include "koneksi.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    // Ambil data barang dari database berdasarkan kode barang
    $ambildata = mysqli_query($koneksi, "select * from data_buah where KODE_BUAH='$id'");
    $tampil = mysqli_fetch_array($ambildata);
}
?>

<h3> Edit Barang </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Kode Barang </td>
        <td> <input type="text" name="KODE_BUAH" value="<?php echo @$tampil['KODE_BUAH']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama Barang </td>
        <td> <input type="text" name="NAMA_BUAH" value="<?php echo @$tampil['NAMA_BUAH']; ?>"> </td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="HARGA_BUAH" value="<?php echo @$tampil['HARGA_BUAH']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="update" value="Update"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['update'])){
    $kode = $_POST['KODE_BUAH'];
    $nama = $_POST['NAMA_BUAH'];
    $harga = $_POST['HARGA_BUAH'];
    
    // Lakukan query UPDATE pada tabel data_buah
    mysqli_query($koneksi, "update data_buah set  
    NAMA_BUAH = '$nama',
    HARGA_BUAH = '$harga'
    where KODE_BUAH = '$kode'");
    
    echo "Data barang berhasil diubah";
}
?>
