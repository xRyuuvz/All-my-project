<?php
    echo "<center>";
    echo "<font size=8>";
    echo "<b>Toko Buah<br>Isekai";
    echo "<hr>";
    echo "<table>";
    $namabuah=$_POST['namabuah'];
    $jumlah=$_POST['jumlah'];
        if ($namabuah == "jeruk_bali" || $namabuah == "jeruk_mandarin" || $namabuah == "jeruk_kecil")
        $diskon = 0.30;
        elseif ($namabuah == "lemon")
        $diskon = 0.35; 
        elseif ($namabuah == "anggur_hijau" || $namabuah == "anggur_biasa" || $namabuah == "anggur_super")
        $diskon = 0.20;
        elseif ($namabuah == "apel_fuji" || $namabuah == "apel_merah" || $namabuah == "apel_malang")
        $diskon = 0.15;
        else{
            $diskon = 0.25;
        }
            if ($namabuah=="jeruk_bali")$harga=25000;
            if ($namabuah=="jeruk_mandarin")$harga=38000;
            if ($namabuah=="jeruk_kecil")$harga=18000;
            if ($namabuah=="lemon")$harga=40000;
            if ($namabuah=="anggur_hijau")$harga=35000;
            if ($namabuah=="anggur_biasa")$harga=29000;
            if ($namabuah=="anggur_super")$harga=65000;
            if ($namabuah=="apel_fuji")$harga=50000;
            if ($namabuah=="apel_merah")$harga=26000;
            if ($namabuah=="apel_malang")$harga=17500;
            if ($namabuah=="melon")$harga=15000;
            if ($namabuah=="jambu")$harga=18000;
            if ($namabuah=="semangka")$harga=14000;
            if ($namabuah=="salak")$harga=9000;
            if ($namabuah=="lengkeng")$harga=33000;
            $totalharga=$jumlah*$harga;
            $hasildiskon=$totalharga*$diskon;
            $totalbayar=$totalharga-$hasildiskon;
                echo "<tr><td>Nama Buah<td>:$namabuah";
                echo "<tr><td>Harga<td>";
                echo "Rp.".number_format($harga,2,',',',');
                echo "<tr><td>Jumlah<td>:$jumlah";
                echo "<tr><td colspan=3><hr>";
                echo "<tr><td>Total Harga<td>";
                echo "Rp.".number_format($totalharga,2,',',',');
                echo "<tr><td>Diskon<td>:";
                echo "Rp.".number_format($diskon,2,',',',');
                echo "<tr><td>Total Bayar<td>:";
                echo "Rp.".number_format($totalbayar,2,',',',');
?>

