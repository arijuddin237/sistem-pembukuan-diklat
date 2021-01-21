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
<?php include "koneksi.php";
$tanggal=$_POST["tanggal"];
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];
$id_diklat=$_POST["id_diklat"];
$nama_diklat=$_POST["nama_diklat"];
$perintah="select*from checklist where nama_diklat='$nama_diklat'";
$hasil=mysql_query($perintah);
$row=mysql_fetch_array($hasil);
?>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 14px}
-->
</style>
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p class="style1">CEKLIST PERSIAPAN SARANA DAN PRASARANA  </p>
  <div align="left" class="style3"></div>
</div>
<table width="538" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="77" height="4"></td>
    <td colspan="4" rowspan="2" valign="top"><p>ID Diklat</p></td>
    <td width="75"></td>
    <td width="41"></td>
    <td width="32"></td>
    <td width="56"></td>
    <td width="64"></td>
    <td width="51"></td>
  </tr>
  <tr>
    <td height="19"></td>
    <td></td>
    <td></td>
    <td colspan="4" valign="top">: <?php echo $id_diklat; ?> </td>
  </tr>
  
  
  <tr>
    <td height="24">&nbsp;</td>
    <td colspan="4" valign="top">Nama Diklat</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4" valign="top">: <?php echo $nama_diklat; ?></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td colspan="4" valign="top">Unit Pelaksana</td>
    <td></td>
    <td></td>
    <td colspan="4" valign="top">: <?php echo $row[3]; ?></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td colspan="4" valign="top">Waktu Pelaksana</td>
    <td></td>
    <td></td>
    <td colspan="4" valign="top">: <?php echo $row[0]; ?></td>
  </tr>
  <tr>
    <td height="56">&nbsp;</td>
    <td width="44"></td>
    <td width="34"></td>
    <td width="48"></td>
    <td width="16"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td rowspan="2" valign="top"><div align="center">No.</div></td>
    <td colspan="6" rowspan="2" valign="top"><div align="center">URAIAN</div></td>
    <td colspan="2" valign="top"><div align="center">Kesiapan</div></td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">Siap</div></td>
    <td valign="top"><div align="center">Belum</div></td>
  </tr>
  
  
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">1.</div></td>
    <td colspan="6" valign="top"><div align="center">Jadwal</div></td>
    <td valign="top"> 
      <div align="center">
        <?php
	  if($row[4]=="1")
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" checked disabled>";
	  else
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" disabled>";
	  ?>    
            </div></td>
    <td valign="top">
      <div align="center">
        <?php
    if($row[4]=="2")
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"2\" checked disabled>";
	  else
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"2\" disabled>";
	  ?> 
      </div></td>
  </tr>
  
  
  <tr>
    <td height="24">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">2.</div></td>
    <td colspan="6" valign="top"><div align="center">Modul</div></td>
    <td valign="top"> 
      <div align="center">
        <?php
	  if($row[5]=="1")
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" checked disabled>";
	  else
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" disabled>";
	  ?>    
    </div></td>
    <td valign="top">
      <div align="center">
        <?php
    if($row[5]=="2")
		echo "<input name=\"modul\" type=\"checkbox\" value=\"2\" checked disabled>";
	 else
	 echo "<input name=\"modul\" type=\"checkbox\" value=\"2\" disabled>";
	 ?>
     </div></td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">3.</div></td>
    <td colspan="6" valign="top"><div align="center">Keperluan Peserta</div></td>
    <td valign="top"> 
      <div align="center">
        <?php
	  if($row[6]=="1")
		echo "<input name=\"keperluan_peserta\" type=\"checkbox\" value=\"1\" checked disabled>";
	  else
		echo "<input name=\"keperluan_peserta\" type=\"checkbox\" value=\"1\" disabled>";
	  ?>    
     </div></td>
    <td valign="top">
      <div align="center">
        <?php
    if($row[6]=="2")
		echo "<input name=\"keperluan_peserta\" type=\"checkbox\" value=\"2\" checked disabled>";
	  else
		echo "<input name=\"keperluan_peserta\" type=\"checkbox\" value=\"2\" disabled>";
	  ?> 
      </div></td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">4</div></td>
    <td colspan="6" valign="top"><div align="center">Ruang</div></td>
    <td valign="top"> 
      <div align="center">
        <?php
	  if($row[7]=="1")
		echo "<input name=\"ruang\" type=\"checkbox\" value=\"1\" checked disabled>";
	  else
		echo "<input name=\"ruang\" type=\"checkbox\" value=\"1\" disabled>";
	  ?>    
          </div></td>
    <td valign="top">
      <div align="center">
        <?php
    if($row[7]=="2")
		echo "<input name=\"ruang\" type=\"checkbox\" value=\"2\" checked disabled>";
	  else
		echo "<input name=\"ruang\" type=\"checkbox\" value=\"2\" disabled>";
	  ?>
     </div></td>
  </tr>
  
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">5.</div></td>
    <td colspan="6" valign="top"><div align="center">Instruktur</div></td>
    <td valign="top"> 
      <div align="center">
        <?php
	  if($row[8]=="1")
		echo "<input name=\"instruktur\" type=\"checkbox\" value=\"1\" checked disabled>";
	  else
		echo "<input name=\"instruktur\" type=\"checkbox\" value=\"1\" disabled>";
	  ?>    
          </div></td>
    <td valign="top">
      <div align="center">
        <?php
    if($row[8]=="2")
		echo "<input name=\"instruktur\" type=\"checkbox\" value=\"2\" checked disabled>";
	  else
		echo "<input name=\"instruktur\" type=\"checkbox\" value=\"2\" disabled>";
	  ?>
     </div></td>
  </tr>
  <tr>
    <td height="54">&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="24">&nbsp;</td>
    <td></td>
    <td colspan="2" valign="top"><input type="button" name="Submit" value="     Print     " id="tblprint" onClick="cetak()"></td>
    <td>&nbsp;</td>
    <td valign="top">edit</td>
    <td colspan="2" valign="top">hapus</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="130">&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
