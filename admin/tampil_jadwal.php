<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
function cetak(){
document.getElementById("tblprint").style.display="none";
print()
document.getElementById("tblprint").style.display="block";
}
</script>
<?php include "koneksi.php"; ?>
</head>

<body>

<table width="830" border="1" cellpadding="0" cellspacing="0">
  <!--DWLayoutDefaultTable-->
  <tr> 
    <td height="29" colspan="6" valign="top"><div align="center"><font size="5">JADWAL</font></div></td>
  </tr>
  <tr> 
    <td width="125" height="19" valign="top"><div align="center">Tanggal</div></td>
    <td width="97" valign="top"><div align="center">Waktu</div></td>
    <td width="206" valign="top"><div align="center">Topik dan kegiatan</div></td>
    <td width="153" valign="top"><div align="center">Jumlah jam</div></td>
    <td width="130" valign="top"><div align="center">Ruang</div></td>
    <td width="119" valign="top"><div align="center">Instruktur</div></td>
  </tr>
    <?php 
	$perintah="SELECT DATE_FORMAT(jadwal.tanggal,'%d-%m-%Y'), jadwal.waktu, jadwal.topik_dan_kegiatan, jadwal.jumlah_jam, ruang.ruang, instruktur.nama
	FROM jadwal, ruang, instruktur
	WHERE jadwal.ruang=ruang.id_ruang AND jadwal.instruktur=instruktur.nik";
	$hasil=mysql_query($perintah);
	while($brs=mysql_fetch_array($hasil)){;
	?>
  <tr> 
    <td height="20" valign="top" align="center"><?php echo $brs[0]; ?></td>
    <td valign="top" align="center"><?php echo $brs[1]; ?></td>
    <td valign="top" align="center"><?php echo $brs[2]; ?></td>
    <td valign="top" align="center"><?php echo $brs[3]; ?></td>
    <td valign="top" align="center"><?php echo $brs[4]; ?></td>
    <td valign="top" align="center"><?php echo $brs[5]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<table width="531" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutDefaultTable-->
  <tr> 
    <td width="297" height="26">&nbsp;</td>
    <td width="225">&nbsp;</td>
    <td width="9">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td valign="top"><input type="button" name="Button" value="                                 Print                                " id="tblprint" onClick="cetak()"></td>
  <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
