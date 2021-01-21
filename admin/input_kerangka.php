<?php
include "koneksi.php";
$materi=$_POST["materi"];
$jumlah=$_POST["jumlah"];
$perintah="insert into kerangka values('$materi','$jumlah')";
$hasil=mysql_query($perintah);
if($hasil)
echo "Anda berhasil memasukkan data kerangka";
else
echo "Anda gagal menambahkan data kerangka";
?>
