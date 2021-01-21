<?php
include "koneksi.php";
$kode=$_REQUEST['tanggal'];
$qry="delete from checklist where tanggal='$kode'";
$hasil=mysql_query($qry);
if ($hasil)
	echo "Anda telah berhasil menghapus Checklist $kode";	
else
		echo "Anda GAGAL menghapus checklist ! <br>";
	echo "<a href=\"fromchecklist.php\">Lihat Checklist</a>";
?>
