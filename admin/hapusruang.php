<?php
include "koneksi.php";
$kode=$_REQUEST['id_ruang'];
$qry="delete from ruang where id_ruang='$kode'";
$hasil=mysql_query($qry);
if ($hasil)
	echo "Anda telah berhasil menghapus ruangan $kode";	
else
		echo "Anda GAGAL menghapus ruangan ! <br>";
	echo "<a href=\"fromruangan.php\">Lihat Ruangan</a>";
?>
