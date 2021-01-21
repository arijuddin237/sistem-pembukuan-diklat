<?php
session_start();
include "cek_session.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Administrator - Java Web Media</title>
<link href="../images/Vedc.jpg" rel="shortcut icon">
<link href="../css/style-admin.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style2 {
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
}
.style3 {
	font-size: 18px;
	color: #FFFFFF;
}
.style5 {
	font-size: 16px
}
-->
</style>
</head>

<body>
<div id="wrapper">

<header>
	  <div class="akun"><a href="#" title="Update konfigurasi"><img src="../images/Vedc.jpg" width="16" height="16"> Sistem Informasi Pembukuan Diklat</a></div>
	  <div class="akun"><a href="#" title="Update profil"><img src="../images/img/user_red.png" width="16" height="16"> Andoyo cakep</a></div>
      <div class="akun"><a href="#" title="Logout disini"><img src="../images/img/delete.png" width="16" height="16"> Logout</a></div>
	  <div class="home"><a href="../index.php" title="Beranda"><img src="../images/img/house_go.png" width="16" height="16"> Beranda</a></div>
  </header>
<!--En header-->

<nav>
    <ul id="MenuBar1" class="MenuBarHorizontal">
        <li><a href="#">Dashboard</a>        </li>
                <li><a href="#" class="MenuBarItemSubmenu">Master</a>
          <ul>
            <li><a href="ruang.php">Ruang</a></li>
            <li><a href="instruktur.php">Instruktur</a></li>
            <li><a href="cari_jadwal.php">Materi</a></li>
          </ul>
        </li>
<li><a href="#" class="MenuBarItemSubmenu">Input Diklat</a>
        <ul>
            <li><a href="checklist.php">Checklist</a></li>
            <li><a href="jadwal.php">Jadwal</a></li>
            <li><a href="kerangka.php">Kerangka</a></li>
            <li><a href="diklat.php">Diklat</a></li>
        </ul>
        </li>
	<li><a href="#" class="MenuBarItemSubmenu">Laporan</a>
    <ul>
            <li><a href="search_checklist.php">Laporan Checklist Kebutuhan</a></li>
            <li><a href="search_kerangka.php">Laporan Kerangka</a></li>
            <li><a href="cari_lap_jadwal.php">Laporan Jadwal</a></li>
          <li><a href="cari_diklat.php">Laporan Diklat</a></li>
        </ul>
        </li>
              </ul>
              </ul>
  </nav>
  <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script> 
<!--End Navigasi-->
   
    <div class="konten">
    
      <?php
include "koneksi.php";
?>
<form name="form1" method="post" action="checklist1.php">
<table width="589" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  
  <tr> 
    <td height="27" colspan="6" valign="top"><div align="center"><font size="5">CHECKLIST</font></div></td>
    <td width="10"></td>
  </tr>
  <tr> 
    <td width="20" height="18"></td>
    <td width="106"></td>
    <td width="28"></td>
    <td width="65"></td>
    <td width="18"></td>
    <td width="342"></td>
    <td></td>
  </tr>
  <tr> 
    <td height="19"></td>
    <td valign="top">Jadwal</td>
    <td>&nbsp;</td>
    <td valign="top"> 
      <?php
	  if($row[0]=="1")
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" checked disabled>";
	  else
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" disabled>";
	  ?>    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr> 
    <td height="20"></td>
    <td valign="top">Modul</td>
    <td></td>
    <td valign="top"> 
      <?php
	  if($row[1]=="1")
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" checked disabled>";
	  else
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" disabled>";
	  ?>    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="19"></td>
    <td colspan="2" valign="top">Keperluan Peserta</td>
    <td valign="top"> 
      <?php
	  if($row[2]=="1")
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" checked disabled>";
	  else
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" disabled>";
	  ?>    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="19"></td>
    <td valign="top">Ruang</td>
    <td></td>
    <td valign="top"> 
      <?php
	  if($row[3]=="1")
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" checked disabled>";
	  else
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" disabled>";
	  ?>    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="20"></td>
    <td valign="top">Instruktur</td>
    <td></td>
    <td valign="top"> 
      <?php
	  if($row[4]=="1")
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" checked disabled>";
	  else
		echo "<input name=\"jadwal\" type=\"checkbox\" value=\"1\" disabled>";
	  ?>    </td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="37"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> 
    <td height="24">&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td colspan="2" valign="top"><input type="button" name="Submit" value="     Print     " id="tblprint" onClick="cetak()"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td height="197"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</form>

  </div>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
</html>

