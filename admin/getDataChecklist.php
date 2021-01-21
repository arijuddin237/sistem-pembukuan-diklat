<?php
header('Content-Type: text/xml');
echo "<?xml version=\"1.0\" ?>";
include ("koneksi.php");
echo "<akar>";
$param=$_REQUEST['param'];
$query = "SELECT * FROM checklist WHERE id_diklat='$param'";
$hasil = mysql_query($query);
	while($baris = mysql_fetch_array($hasil))
	{
	echo "<batang_p>";
	echo "<tanggal_mulai>".$baris[0]."</tanggal_mulai>";
	//echo "<id_diklat>".$baris[1]."</id_diklat>";
	echo "<nama_diklat>".$baris[2]."</nama_diklat>";
	echo "<unit_pelaksana>".$baris[3]."</unit_pelaksana>";
	echo "<jadwal>".$baris[4]."</jadwal>";
	echo "<modul>".$baris[5]."</modul>";
	echo "<keperluan>".$baris[6]."</keperluan>";
	echo "<ruang>".$baris[7]."</ruang>";
	echo "<instruktur>".$baris[8]."</instruktur>";
	echo "</batang_p>";
	}
echo "</akar>";
?>
