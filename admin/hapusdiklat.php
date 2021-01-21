<?php
include "koneksi.php";
$kode=$_REQUEST['id_diklat'];
$qry="delete from diklat where id_diklat='$kode'";
$hasil=mysql_query($qry);
if ($hasil)
	echo "Anda telah berhasil menghapus diklat $kode";	
else
		echo "Anda GAGAL menghapus diklat ! <br>";
	echo "<a href=\"laporan_diklat.php\">Lihat diklat</a>";
?>