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
.style6 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>
<?php
$user=$_SESSION["username"];
?>
<body>
<div id="wrapper">

<header>
	  <div class="akun"><a href="#" title="Update konfigurasi"><img src="../images/Vedc.jpg" width="16" height="16"> Sistem Informasi Pembukuan Diklat</a></div>
	  <div class="akun"><a href="#" title="Update profil"><img src="../images/img/user_red.png" width="16" height="16"> <?php echo $user; ?></a></div>
      <div class="akun"><a href="logout.php" title="Logout disini"><img src="../images/img/delete.png" width="16" height="16"> Logout</a></div>
	  <div class="home"><a href="../index.php" title="Beranda"><img src="../images/img/house_go.png" width="16" height="16"> Beranda</a></div>
  </header>
<!--En header-->

<nav>
    <ul id="MenuBar1" class="MenuBarHorizontal">
                <li><a href="#" class="MenuBarItemSubmenu">Master</a>
          <ul>
            <li><a href="ruang.php">Ruang</a></li>
            <li><a href="instruktur.php">Instruktur</a></li>
            <li><a href="materi.php">Materi</a></li>
            <li><a href="cari_jadwal.php">Jadwal</a></li>
             <li><a href="lihat_diklat.php">Diklat</a></li>
        
          </ul>
        </li>
<li><a href="#" class="MenuBarItemSubmenu">Input Data</a>
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
    <div align="center" class="myform">
    
      <?php
include "koneksi.php";
?>
<table width="554" border="0" cellpadding="0" cellspacing="0">
<td colspan="5" valign="top" ><div align="center" class="sukses"><span class="style6">Form Input Mater</span>i</div></td>
</table>
<table width="554" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="33" height="15">&nbsp;</td>
    <td width="95">&nbsp;</td>
    <td width="57">&nbsp;</td>
    <td width="136">&nbsp;</td>
    <td width="144">&nbsp;</td>
    <td width="89">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="25">&nbsp;</td>
    <td valign="top">ID Materi</td>
    <td>&nbsp;</td>
    <td colspan="3" valign="top"><label>
      : 
      <input type="text" name="id_materi" id="id_materi" />
      </label></td>
  </tr>
  <tr>
    <td height="16"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td valign="top">Nama Materi</td>
    <td>&nbsp;</td>
    <td colspan="3" valign="top"><label>
      : 
      <input type="text" name="textfield" id="textfield" />
      </label></td>
  </tr>
  <tr>
    <td height="36">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="24">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><label>
      <input type="reset" name="reset" id="reset" value="Reset">
    </label></td>
    <td valign="top"><label>
      <input type="submit" name="simpan" id="simpan" value="Simpan">
    </label></td>
    <td>&nbsp;</td>
  </tr>
</table>

  </div>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
</html>

