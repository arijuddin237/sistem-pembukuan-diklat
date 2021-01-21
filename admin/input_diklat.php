<?php
include "koneksi.php";
$tanggal=$_POST["tanggal"];
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];
$tanggal1=$_POST["tanggal1"];
$bulan1=$_POST["bulan1"];
$tahun1=$_POST["tahun1"];
$nama_diklat=$_POST["nama_diklat"];
$id_diklat=$_POST["id_diklat"];
$jumlah=$_POST["jumlah_peserta"];
$materi=$_POST["materi"];
$ruang=$_POST["ruang"];
$perintah="insert into diklat values('$id_diklat','$nama_diklat','$jumlah','$materi','$tahun-$bulan-$tanggal','$tahun1-$bulan1-$tanggal1','$ruang')";
$hasil=mysql_query($perintah);
if($hasil){
echo "Anda berhasil memasukkan data diklat";
echo "<a href=\"laporan_diklat.php\">Tampilkan Daftar Diklat</a>";
}
else
echo "Anda gagal menambahkan data diklat";
echo "<a href=\"diklat.php\">Tambah Data</a>";
?>
