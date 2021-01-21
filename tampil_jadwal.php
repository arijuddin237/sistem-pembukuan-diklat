<?php
include "admin/koneksi.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SISTEM INFORMASI PEMBUKUAN DIKLAT</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>
<?php
$user=$_SESSION["username"]; 
$id_diklat=$_POST["id_diklat"];
$nama_diklat=$_POST["nama_diklat"];
?>

<body>
<div id="wrapper">

  <header>
    	<div id="logo"><a href="index.php"><img src="images/Vedc.jpg" width="400" height="400"></a></div>
        <div id="nama"><span class="nama">Sistem Informasi Pembukuan Diklat</span><br>
        <span class="aipni">PPPPTK VEDC Malang</span></div>
  </header>

<nav>
  	<ul>
    	<li><a href="lihat_jadwal.php">Jadwal Diklat</a></li>
        <li><a href="index.php">LOG IN</a></li>
    </ul>
  </nav>
 
<div class="konten">
    <table width="849" border="0" cellpadding="0" cellspacing="0">
    <td colspan="2" valign="top"><div align="center" class="sukses style1 style2 style1">Jadwal Diklat</div></td>
    </table>
    
    <table width="849" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
 <tr>
 <td height="20">
 </td>
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
    <td valign="top"><p>:<?php echo $nama_diklat; ?></p></td>
    <td></td>
    <td></td>
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
    <td width="215" valign="top" bgcolor="#009999"><div align="center">Topik dan kegiatan</div></td>
    <td width="135" valign="top" bgcolor="#009999"><div align="center">Jumlah jam</div></td>
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
  <p>&nbsp;</p>
  </form>

  </div>
    <!-- konten bawah -->
  <div class="clearfix"></div>
     
 <div class="clearfix"></div>
    <footer><a href="http://javawebmedia.com" target="_blank">Sistem Informasi Pembukuan Diklat</a> | &copy;by UDINUS - 2014</footer>
</div>
</body>
</html>
