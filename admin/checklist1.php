<?php
include "koneksi.php";
$jadwal=$_POST["jadwal"];
$modul=$_POST["modul"];
$keperluan=$_POST["keperluan_peserta"];
$ruang=$_POST["ruang"];
$instruktur=$_POST["instruktur"];
$tanggal=$_POST["tanggal_mulai"];
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];
$id_diklat=$_POST["id_diklat"];
$nama_diklat=$_POST["nama_diklat"];
$unit_pelaksana=$_POST["unit_pelaksana"];
$perintah="insert into checklist values('$tanggal','$id_diklat','$nama_diklat','$unit_pelaksana','$jadwal','$modul','$keperluan','$ruang','$instruktur')";
$hasil=mysql_query($perintah);
if($hasil){
echo "Anda berhasil memasukkan data checklist";
echo "<a href=\"search_checklist.php\">Tampilkan Daftar Checklist</a>";
}else{
echo "Anda gagal menambahkan data checklist";
echo "<a href=\"checklist.php\">Entry Checkllist</a>";
echo $perintah;
}
?>