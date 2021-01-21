<?php
include "koneksi.php";
$id_diklat=$_POST["id_diklat"];
$nama_diklat=$_POST["nama_diklat"];
$tanggal=$_POST["tanggal"];
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];
$waktu=$_POST["waktu"];
$topik=$_POST["topik"];
$jumlah_jam=$_POST["jumlah_jam"];
$ruang=$_POST["ruang"];
$instruktur=$_POST["instruktur"];
$instruktur2=$_POST["instruktur"];
$perintah="insert into jadwal values('$id_diklat','$nama_diklat''$tahun-$bulan-$tanggal','$waktu','$topik','$jumlah_jam','$ruang','$instruktur','$instruktur2')";
$hasil=mysql_query($perintah);
if($hasil)
echo "Anda berhasil memasukkan data jadwal";
else
echo "Anda gagal menambahkan data jadwal";
?>
