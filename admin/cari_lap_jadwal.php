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
.style2 {
	font-size: 18px;
	font-weight: bold;
}
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
$user=$_SESSION["username"];
?>
<body>
<div id="wrapper">

<header>
	  <div class="akun"><a href="#" title="Update konfigurasi"><img src="../images/Vedc.jpg" width="16" height="16"> Sistem Informasi Pembukuan Diklat</a></div>
	  <div class="akun"><a href="#" title="Update profil"><img src="../images/img/user_red.png" width="16" height="16"><?php echo $user ?></a></div>
      <div class="akun"><a href="#" title="Logout disini"><img src="../images/img/delete.png" width="16" height="16"> Logout</a></div>
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
    
<table width="531" border="0" cellpadding="0" cellspacing="0">
 <td colspan="6" valign="top"><div align="center" class="sukses style2">Laporan Jadwal</div></td>
 </table>   
<form name="form2" method="post" action="laporan_jadwal.php">
<table width="531" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  
  <tr> 
    <td width="86" height="15">&nbsp;</td>
    <td width="105">&nbsp;</td>
    <td width="207">&nbsp;</td>
    <td width="89">&nbsp;</td>
    <td width="44">&nbsp;</td>
    </tr>
  
  <tr>
    <td height="41">&nbsp;</td>
    <td valign="top">Nama Diklat </td>
    <td colspan="2" valign="top"><label>
      :
      <select name="nama_diklat" id="nama_diklat">
	  <option value="-" selected>Pilih Nama diklat</option>
	  <?php 
  		$hasil = mysql_query("SELECT * FROM diklat");
		while($baris = mysql_fetch_row($hasil)){
		echo "<option value='$baris[1]' onclick=\"doAjax('getDataId.php','param=$baris[1]','viewDataNama','get','1')\">$baris[1]</option>";
		} ?>
      </select>
      </label></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td height="52">&nbsp;</td>
    <td valign="top">ID Diklat</td>
    <td colspan="3" valign="top"><label>
      : 
      <input type="text" name="id_diklat" id="id_diklat">
      </label></td>
    </tr>
  <tr>
    <td height="34"></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    </tr>
  <tr>
    <td height="82"></td>
    <td></td>
    <td valign="top"><label>
      <input type="submit" name="lihat" id="lihat" value="   Lihat Jadwal    ">
    </label></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  
  
  

  
  
  
  
    <?php  
	$id_diklat=$_POST["id_diklat"];
	$nama_diklat=$_POST["nama_diklat"]; 
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

