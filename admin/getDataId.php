<?php
header('Content-Type: text/xml');
echo "<?xml version=\"1.0\" ?>";
include ("koneksi.php");
echo "<akar>";
$param=$_REQUEST['param'];
$query = "SELECT * FROM diklat WHERE nama_diklat='$param'";
$hasil = mysql_query($query);
	while($baris = mysql_fetch_array($hasil))
	{
	echo "<batang_p>";
	echo "<id>".$baris[0]."</id>";
	echo "<tanggal>".$baris[4]."</tanggal>";
	echo "</batang_p>";
	}
echo "</akar>";
?>
