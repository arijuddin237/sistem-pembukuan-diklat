<?php
include "koneksi.php";
$kode=$_REQUEST['id_jadwal'];
$qry="delete from jadwal where tanggal='$kode'";
$hasil=mysql_query($qry);
if ($hasil)
	echo "Anda telah berhasil menghapus jadwal $kode";	
else
		echo "Anda GAGAL menghapus jadwal ! <br>";
	echo "<a href=\"fromjadwal.php\">Lihat Jadwal</a>";
?>
