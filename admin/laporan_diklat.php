<?php
session_start();
include "cek_session.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script language="JavaScript">
function cetak(){
document.getElementById("tblprint").style.display="none";
print()
document.getElementById("tblprint").style.display="block";
}
</script>
<title>Halaman Administrator - Java Web Media</title>
<?php
include "koneksi.php";
?>
</head>

<body>
    <table width="849" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
    <tr> 
    <td width="752" height="68">&nbsp;</td>
    <td width="97">&nbsp;</td>
    </tr>
  
  
  <tr>
    <td height="24">&nbsp;</td>
    <td valign="top"><input type="button" name="Submit" value="     Print     " id="tblprint" onClick="cetak()"></td>
    </tr>
  <tr>
    <td height="30"></td>
    <td></td>
  </tr>
    </table>
    
<table width="977" border="1" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="29" colspan="8" valign="top" bgcolor="#FF6633"><div align="center">
      <p><font size="5">DAFTAR DIKLAT</font></p>
    </div></td>
  </tr>
  <tr> 
    <td width="45" height="21" valign="top" bgcolor="#009999"><div align="center">No.</div></td>
    <td width="120" valign="top" bgcolor="#009999"><div align="center">ID Diklat</div></td>
    <td width="215" valign="top" bgcolor="#009999"><div align="center">Nama Diklat</div></td>
    <td width="107" valign="top" bgcolor="#009999"><div align="center">Jumlah Peserta</div></td>
    <td width="105" valign="top" bgcolor="#009999"><div align="center">Materi</div></td>
    <td width="106" valign="top" bgcolor="#009999"><div align="center">Tanggal Mulai</div></td>
    <td width="135" valign="top" bgcolor="#009999"><div align="center">Tanggal Akhir</div></td>
    <td width="126" valign="top" bgcolor="#009999"><div align="center">Ruang</div></td>
  </tr>
<?php
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$no=0;
$perintah="SELECT diklat.id_diklat, diklat.nama_diklat, diklat.jumlah_peserta, materi.materi, diklat.tanggal_mulai, diklat.tanggal_akhir, ruang.nama_ruang, 
DATE_FORMAT(diklat.tanggal_mulai,'%d-%m-%y'),DATE_FORMAT(diklat.tanggal_akhir,'%d-%m-%y') 
FROM diklat, materi, ruang WHERE ruang.id_ruang=diklat.ruang AND materi.id_materi=diklat.materi 
AND MONTH(diklat.tanggal_mulai)=$bulan AND YEAR(diklat.tanggal_mulai)=$tahun";
$hasil=mysql_query($perintah);

while($brs=mysql_fetch_array($hasil)){
	$no++;
?>
  <tr>
    <td height="21" align="center" valign="top"><?php echo $no; ?></td>
    <td align="center" valign="top"><?php echo $brs[0]; ?></td>
    <td align="center" valign="top"><?php echo $brs[1]; ?></td>
    <td align="center" valign="top"><?php echo $brs[2]; ?></td>
    <td align="center" valign="top"><?php echo $brs[3]; ?></td>
    <td align="center" valign="top"><?php echo $brs[4]; ?></td>
    <td align="center" valign="top"><?php echo $brs[5]; ?></td>
    <td valign="top"><?php echo $brs[6]; ?></td>
  </tr>
  <?php }?>
</table>

</div>
</body>
</html>

