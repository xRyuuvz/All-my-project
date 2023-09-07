<?php
    echo "<center>";
    echo "<font size=8>";
    echo "<b>Toko Buah<br>Isekai";
    echo "<hr>";
    echo "<table>";
        $namabuah=$_POST['$namabuah'];
        $jumlah=$_POST['jumlah'];
            if($namabuah=="Jeruk Bali")$harga=25000;
            if($namabuah=="Jeruk Mandarin")$harga=38000;
            if($namabuah=="Jeruk Kecil")$harga=18000;
            if($namabuah=="Lemon")$harga=40000;
            if($namabuah=="Anggur Hijau")$harga=35000;
            if($namabuah=="Anggur Biasa")$harga=29000;
            if($namabuah=="Anggur Super")$harga=65000;
            if($namabuah=="Apel Fuji")$harga=50000;
            if($namabuah=="Apel Merah")$harga=26000;
            if($namabuah=="Apel Malang")$harga=17500;
            if($namabuah=="Melon")$harga=15000;
            if($namabuah=="Jambu")$harga=18000;
            if($namabuah=="Semangka")$harga=14000;
            if($namabuah=="Salak")$harga=9000;
            if($namabuah=="Lengkeng")$harga=33000;
            $totalharga=$jumlah*$harga;
            $diskon=$totalharga*0.15;
            $totalbayar=$totalharga-$diskon;
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



            
            
        
    
    


