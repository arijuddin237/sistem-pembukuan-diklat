<?php
include "koneksi.php";
$kode=$_REQUEST['materi'];
$qry="delete from kerangka where materi='$kode'";
$hasil=mysql_query($qry);
if ($hasil)
	echo "Anda telah berhasil menghapus kerangka $kode";	
else
		echo "Anda GAGAL menghapus kerangka ! <br>";
	echo "<a href=\"fromkerangka.php\">Lihat Kerangka</a>";
?>
