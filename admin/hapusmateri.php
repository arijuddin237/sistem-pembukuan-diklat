<?php
include "koneksi.php";
$kode=$_REQUEST['id_materi'];
$qry="delete from materi where id_materi='$kode'";
$hasil=mysql_query($qry);
if ($hasil)
	echo "Anda telah berhasil menghapus materi $kode";	
else
		echo "Anda GAGAL menghapus materi ! <br>";
		
	echo "<a href=\"tampilmateri.php\">Lihat Materi</a>";
?>
