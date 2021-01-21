<?php
include "koneksi.php";
$kode=$_REQUEST['nik'];
$qry="delete from instruktur where nik='$kode'";
$hasil=mysql_query($qry);
if ($hasil)
	echo "Anda telah berhasil menghapus instruktur $kode";	
else
		echo "Anda GAGAL menghapus ruangan ! <br>";
	echo "<a href=\"instruktur.php\">Lihat Instruktur</a>";
?>
