<?php
echo "<center>";
echo "<font size=8>";
echo "<b>Program Penjualan<br>Buah Segar";
echo "<hr>";
echo "<table>";

$namabarang=$_POST['namabarang'];
$jumlah=$_POST['jumlah'];
if($namabarang=="jeruk bali"){$harga=25000;$diskon=0.3;}
if($namabarang=="jeruk mandarin"){$harga=38000;$diskon=0.3;}
if($namabarang=="jeruk kecil"){$harga=18000;$diskon=0.3;}
if($namabarang=="lemon"){$harga=4000;$diskon=0.3;}
if($namabarang=="anggur biasa"){$harga=29000;$diskon=0.2;}
if($namabarang=="anggur super"){$harga=65000;$diskon=0.2;}
if($namabarang=="anggur hijau"){$harga=35000;$diskon=0.2;}
if($namabarang=="apel fuji"){$harga=50000;$diskon=0.15;}
if($namabarang=="apel malang"){$harga=17500;$diskon=0.15;}
if($namabarang=="apel merah"){$harga=26000;$diskon=0.15;}
if($namabarang=="melon"){$harga=15000;$diskon=0.25;}
if($namabarang=="jambu"){$harga=18000;$diskon=0.25;}
if($namabarang=="semangka"){$harga=14000;$diskon=0.25;}
if($namabarang=="salak"){$harga=9000;$diskon=0.25;}
if($namabarang=="lengkeng"){$harga=33000;$diskon=0.25;}

if($namabarang != "pilih buah"){
    if($jumlah > 5){
        $totaldiskon = 5 * ($harga * $diskon);
        $totalharga = $jumlah * $harga;
        $totalbayar = $totalharga - $totaldiskon;
    }else{
        $totaldiskon = $jumlah * ($harga * $diskon);
        $totalharga = $jumlah * $harga;
        $totalbayar = $totalharga - $totaldiskon;
    }
}

$namabarang2=$_POST['namabarang2'];
$jumlah2=$_POST['jumlah2'];
if($namabarang2=="jeruk bali"){$harga2=25000;$diskon2=0.3;}
if($namabarang2=="jeruk mandarin"){$harga2=38000;$diskon2=0.3;}
if($namabarang2=="jeruk kecil"){$harga2=18000;$diskon2=0.3;}
if($namabarang2=="lemon"){$harga2=4000;$diskon2=0.3;}
if($namabarang2=="anggur biasa"){$harga2=29000;$diskon2=0.2;}
if($namabarang2=="anggur super"){$harga2=65000;$diskon2=0.2;}
if($namabarang2=="anggur hijau"){$harga2=35000;$diskon2=0.2;}
if($namabarang2=="apel fuji"){$harga2=50000;$diskon2=0.15;}
if($namabarang2=="apel malang"){$harga2=17500;$diskon2=0.15;}
if($namabarang2=="apel merah"){$harga2=26000;$diskon2=0.15;}
if($namabarang2=="melon"){$harga2=15000;$diskon2=0.25;}
if($namabarang2=="jambu"){$harga2=18000;$diskon2=0.25;}
if($namabarang2=="semangka"){$harga2=14000;$diskon2=0.25;}
if($namabarang2=="salak"){$harga2=9000;$diskon2=0.25;}
if($namabarang2=="lengkeng"){$harga2=33000;$diskon2=0.25;}

if($namabarang2 != "pilih buah"){
    if($jumlah2 > 5){
        $totaldiskon2 = 5 * ($harga2 * $diskon2);
        $totalharga2 = $jumlah2 * $harga2;
        $totalbayar2 = $totalharga2 - $totaldiskon2;
    }else{
        $totaldiskon2 = $jumlah2 * ($harga2 * $diskon2);
        $totalharga2 = $jumlah2 * $harga2;
        $totalbayar2 = $totalharga2 - $totaldiskon2;
    }
}


if($namabarang != "pilih buah"){
    echo "<tr><td>Nama Barang<td>;$namabarang";
    echo "<tr><td>Harga<td>:";
    echo "Rp.".number_format($harga,2,',',',');
    echo "<tr><td>jumlah<td>:$jumlah";
    echo "<tr><td colspan=3><hr>";
    echo "<tr><td>Total harga<td>:";
    echo "Rp.".number_format($totalharga,2,',',',');
    echo "<tr><td>Diskon<td>:";
    echo "Rp.".number_format($totaldiskon,2,',',',');
    echo "<hr>";
}
if($namabarang2 != "pilih buah"){
    echo "<tr><td>Nama Barang<td>;$namabarang2";
    echo "<tr><td>Harga<td>:";
    echo "Rp.".number_format($harga2,2,',',',');
    echo "<tr><td>jumlah<td>:$jumlah2";
    echo "<tr><td colspan=3><hr>";
    echo "<tr><td>Total harga<td>:";
    echo "Rp.".number_format($totalharga2,2,',',',');
    echo "<tr><td>Diskon<td>:";
    echo "Rp.".number_format($totaldiskon2,2,',',',');
    echo "<hr>";
}
if(($namabarang!="pilih buah") && ($namabarang2!="pilih buah")){
    $totalsemua = $totalbayar + $totalbayar2;
}elseif($namabarang!="pilih buah"){
    $totalsemua = $totalbayar;
}elseif($namabarang2!="pilih buah"){
    $totalsemua = $totalbayar2;
}
if(isset($totalsemua)){
    echo "<tr><td>Total Bayar : ";
    echo "Rp.".number_format($totalsemua,2,',',',')."<td>"; 
}else{
    echo "<h4>Anda tidak membeli buah apapun";
}
?>

