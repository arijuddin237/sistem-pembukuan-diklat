<?php
session_start();
include "cek_session.php";
?>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Administrator - Java Web Media</title>
<script Language="JavaScript" src="AjaxLib.js"></script>
<script language="JavaScript">
function lihatDataChecklist(text){
	document.getElementById("nama_diklat").value="";
	document.getElementById("unit_pelaksana").value=""; 
	document.getElementById("waktu_pelaksana").value=""; 
	
	var pstanggal = text.getElementsByTagName("tanggal_mulai");
	var psnama = text.getElementsByTagName("nama_diklat");
	var psunit = text.getElementsByTagName("unit_pelaksana");
	var psjadwal = text.getElementsByTagName("jadwal");
	var psmodul = text.getElementsByTagName("modul");
	var pskeperluan = text.getElementsByTagName("keperluan");
	var psruang = text.getElementsByTagName("ruang");
	var psinstruktur = text.getElementsByTagName("instruktur");
	
	var tanggal = pstanggal[0].childNodes[0].nodeValue;
	var nama = psnama[0].childNodes[0].nodeValue;
	var unit = psunit[0].childNodes[0].nodeValue;
	var jadwal = psjadwal[0].childNodes[0].nodeValue;
	var modul = psmodul[0].childNodes[0].nodeValue;
	var keperluan = pskeperluan[0].childNodes[0].nodeValue;
	var ruang = psruang[0].childNodes[0].nodeValue;
	var instruktur = psinstruktur[0].childNodes[0].nodeValue;
	
	document.getElementById("nama_diklat").value=nama; 
	document.getElementById("unit_pelaksana").value=unit;
	document.getElementById("waktu_pelaksana").value=tanggal;	
	if (jadwal=="1")
		document.getElementById("rbjadwalsiap").checked=true;
	else
		document.getElementById("rbjadwalbelum").checked=true;
	if (modul=="1")
		document.getElementById("rbmodulsiap").checked=true;
	else
		document.getElementById("rbmodulbelum").checked=true;
	if (keperluan=="1")
		document.getElementById("rbkeperluansiap").checked=true;
	else
		document.getElementById("rbkeperluanbelum").checked=true;
	if (ruang=="1")
		document.getElementById("rbruangsiap").checked=true;
	else
		document.getElementById("rbruangbelum").checked=true;
	if (instruktur=="1")
		document.getElementById("rbinstruktursiap").checked=true;
	else
		document.getElementById("rbinstrukturbelum").checked=true;
}
</script>
<link href="../images/Vedc.jpg" rel="shortcut icon">
<link href="../css/style-admin.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style3 {color: #FFFFFF}
-->
</style>
<?php include "koneksi.php";
$user=$_SESSION["username"];
$tanggal=$_REQUEST["tanggal"];
$bulan=$_REQUEST["bulan"];
$tahun=$_REQUEST["tahun"];
$id_diklat=$_REQUEST["id_diklat"];
$nama_diklat=$_REQUEST["nama_diklat"];
$unit_pelaksana=$_REQUEST["unit_pelaksana"];
$waktu_pelaksana=$_REQUEST["waktu_pelaksana"];
$perintah="SELECT id_diklat, materi,jumlah_jam from kerangka where id_diklat='$id_diklat'";
$hasil=mysql_query($perintah);
$row=mysql_fetch_array($hasil);
while($row){
?>
</head>

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
    <div class="myform">
<form name="form1" action="<?php echo $_SERVER ['PHP_SELF']; ?>" method="post">
<table width="957" border="0" cellpadding="0" cellspacing="0">
<td height="27" colspan="12" valign="top"><div align="center" class="sukses top">Kerangka Diklat</div></td>
</table>
<table width="538" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="52" height="4"></td>
    <td colspan="2" rowspan="2" valign="top"><p>ID Diklat</p></td>
    <td width="59"></td>
    <td width="102"></td>
    <td width="129"></td>
    <td width="62"></td>
  </tr>
  <tr>
    <td height="52"></td>
    <td></td>
    <td colspan="3" valign="top"><label>
      : 
      <input type="text" name="id_diklat" id="id_diklat" value="<?php echo $id_diklat;  ?>" disabled>
      </label></td>
  </tr>
  
  
  <tr>
    <td height="52">&nbsp;</td>
    <td colspan="2" valign="top">Nama Diklat</td>
    <td>&nbsp;</td>
    <td colspan="3" valign="top"><label>
      : 
      <input type="text" name="nama_diklat" id="nama_diklat" value="<?php echo $nama_diklat;  ?>" disabled>
    </label></td>
  </tr>
  <tr>
    <td height="52">&nbsp;</td>
    <td colspan="2" valign="top">Unit Pelaksana</td>
    <td></td>
    <td colspan="3" valign="top"><label>
      :
      <input type="text" name="unit_pelaksana" id="unit_pelaksana" value="<?php echo $unit_pelaksana;  ?>" disabled>
    </label></td>
  </tr>
  <tr>
    <td height="52">&nbsp;</td>
    <td colspan="2" valign="top">Waktu Pelaksana</td>
    <td></td>
    <td colspan="3" valign="top"><label>
      : 
      <input type="text" name="waktu_pelaksana" id="waktu_pelaksana" value="<?php echo $waktu_pelaksana;  ?>" disabled>
    </label></td>
  </tr>
  <tr>
    <td height="81">&nbsp;</td>
    <td width="71">&nbsp;</td>
    <td width="63">&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="33"></td>
    <td valign="top">No.</td>
    <td colspan="3" valign="top"><div align="center">MATERI</div></td>
    <td colspan="2" valign="top"><div align="center">JUMLAH JAM</div></td>
    </tr>
  <tr>
    <td height="33"></td>
    <td valign="top">1</td>
    <td colspan="3" valign="top"><?php echo $baris[1]; ?></td>
    <td colspan="2" valign="top"><?php echo $baris[2]; ?></td>
  </tr>
  <tr>
    <td height="91"></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="33"></td>
    <td colspan="3" valign="top"><a href="laporan_kerangka.php">Lihat Laporan Kerangka</a></td>
    <td valign="top"><div align="center">Edit</div></td>
    <td valign="top"><div align="center">Hapus</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="391"></td>
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
  </div>
  <?php }?>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
</html>

