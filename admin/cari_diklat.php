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
<?php
include "koneksi.php";
?>
<style type="text/css">
<!--
.style2 {font-size: 18px}
-->
</style>
</head>
<script Language="JavaScript" src="AjaxLib.js"></script>
<script Language="JavaScript">
function viewDataNama(text){
	document.getElementById("id_diklat").value="";
	var psid = text.getElementsByTagName("id");
	var id = psid[0].childNodes[0].nodeValue;
	document.getElementById("id_diklat").value=id;
}
</script>
<?php
$user=$_SESSION["username"]
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
    
    
<table width="471" border="0" cellpadding="0" cellspacing="0">
<tr> 
    
    <td colspan="4" valign="top"><div align="center" class="sukses style6 style9 style2">Laporan Diklat</div></td>
    </tr>
</table>    
<form name="form2" method="post" action="laporan_diklat.php">
<table width="393" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  
  
  <tr>
    <td width="133" height="14"></td>
    <td width="160"></td>
    <td width="51"></td>
    <td width="49"></td>
  </tr>
  <tr>
    <td height="52" valign="top">Pilih Bulan dan Tahun:</td>
    <td valign="top">
      <label>
      :
      <select name="bulan" id="bulan">
        <option value="0">Bulan</option>
        <option value="1">Januari</option>
        <option value="2">Ferbuari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
      </select>
                              </label></td>
    <td colspan="2" valign="top"><input name="tahun" type="text" id="tahun" size="4" maxlength="4" placeholder="Tahun" /></td>
    </tr>
  
  <tr>
    <td height="44"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="82"></td>
    <td colspan="2" valign="top"><label>
      <input type="submit" name="lihat" id="lihat" value="   Lihat Diklat    ">
    </label></td>
    <td>&nbsp;</td>
  </tr>
  
  

  


  
  
  
    <?php  
	$bulan=$_POST["bulan"];
	$tahunt=$_POST["tahun"]; 
  ?>
</table>
</form>
  </div>
  </div>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>

</html>

