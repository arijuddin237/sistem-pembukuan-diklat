<?php session_start();
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
<?php 
$id_diklat=$_POST["id_diklat"];
$nama_diklat=$_POST["nama_diklat"];
?>

<body>
    <table width="849" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
    <tr> 
    <td width="126" height="24">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center" class="style1">JADWAL DIKLAT</div></td>
    <td width="97">&nbsp;</td>
    </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td width="116">&nbsp;</td>
    <td width="510">&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td height="21" valign="top">ID Diklat </td>
    <td valign="top">: 
      <label><?php echo $id_diklat; ?></label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td height="22" valign="top">Nama Diklat</td>
    <td valign="top">: <?php echo $nama_diklat; ?></td>
    <td></td>
    <td valign="top"><input type="button" name="Submit" value="     Print     " id="tblprint" onClick="cetak()"></td>
    </tr>
  <tr>
    <td height="30"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
    </table>
    
<table width="849" border="1" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="24" colspan="7" valign="top" bgcolor="#FF6633"><div align="center">
      <p><font size="5">JADWAL</font></p>
        </div></td>
  </tr>
  
  
  
  
  
  <tr> 
    <td width="94" height="19" valign="top" bgcolor="#009999"><div align="center">Tanggal</div></td>
    <td width="71" valign="top" bgcolor="#009999"><div align="center">Waktu</div></td>
    <td width="215" valign="top" bgcolor="#009999"><div align="center">Topik dan Kegiatan</div></td>
    <td width="135" valign="top" bgcolor="#009999"><div align="center">Jumlah Jam</div></td>
    <td width="77" valign="top" bgcolor="#009999"><div align="center">Ruang</div></td>
    <td width="106" valign="top" bgcolor="#009999"><div align="center">Instruktur</div></td>
    <td width="135" valign="top" bgcolor="#009999"><div align="center">Instruktur 2</div></td>
  </tr>
    <?php 
	$perintah="SELECT * from jadwal where id_diklat='$id_diklat'";
	$hasil=mysql_query($perintah);
	while($brs=mysql_fetch_array($hasil)){;
	?>
  <tr> 
    <td height="20" align="center" valign="top"><?php echo $brs[2]; ?></td>
    <td align="center" valign="top"><?php echo $brs[3]; ?></td>
    <td align="center" valign="top"><?php echo $brs[4]; ?></td>
    <td align="center" valign="top"><?php echo $brs[5]; ?></td>
    <td align="center" valign="top"><?php echo $brs[6]; ?></td>
    <td align="center" valign="top"><?php echo $brs[7]; ?></td>
    <td align="center" valign="top"><?php echo $brs[8]; ?></td>
  </tr>
  <?php
  }
  ?>
</table>

</div>
</body>
</html>

