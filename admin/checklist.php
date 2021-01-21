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
.style3 {color: #FFFFFF}
.style4 {font-size: 18px}
-->
</style>
</head>
<script Language="JavaScript" src="AjaxLib.js"></script>
<script Language="JavaScript">
function viewDataChecklist(text){
	document.getElementById("id_diklat").value="";
	document.getElementById("tanggal_mulai").value="";
	
	var psid = text.getElementsByTagName("id");
	var pstanggal = text.getElementsByTagName("tanggal");
	
	var id = psid[0].childNodes[0].nodeValue;
	var tanggal = pstanggal[0].childNodes[0].nodeValue;
	
	document.getElementById("id_diklat").value=id;
	document.getElementById("tanggal_mulai").value=tanggal;
}
</script>
<body>
<?php
$user=$_SESSION["username"];
?>
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
    
      <?php
include "koneksi.php";
?>
<table width="765" border="0" cellpadding="0" cellspacing="0">
 <td height="27" colspan="13" valign="top" bgcolor="#FF6666"><div align="center" class="sukses style4">Daftar Kebutuhan Diklat</div></td>
</table>
<div class="myform">
<form name="form1" method="post" action="checklist1.php">
<table width="765" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  
  <tr> 
    <td width="41" height="33"></td>
    <td width="100">&nbsp;</td>
    <td width="39">&nbsp;</td>
    <td width="36">&nbsp;</td>
    <td width="54">&nbsp;</td>
    <td width="70">&nbsp;</td>
    <td width="95">&nbsp;</td>
    <td width="68">&nbsp;</td>
    <td width="39">&nbsp;</td>
    <td width="118">&nbsp;</td>
    <td width="48">&nbsp;</td>
    <td width="57">&nbsp;</td>
    </tr>
  
  
  <tr>
    <td height="41"></td>
    <td valign="top">Nama Diklat</td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7" valign="top"> 
      <label>
      : 
      <select name="nama_diklat" id="nama_diklat">
      <option value="-" selected>Pilih Nama diklat</option>
       <?php 
  		$hasil = mysql_query("SELECT * FROM diklat");
		while($baris = mysql_fetch_row($hasil)){
		echo "<option value='$baris[1]' onclick=\"doAjax('getDataId.php','param=$baris[1]','viewDataChecklist','get','1')\">$baris[1]</option>";
		} ?>
      </select>
      </label></td>
    </tr>
  <tr>
    <td height="52"></td>
    <td valign="top">ID Diklat</td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7" valign="top"><label>
      : 
      <input type="text" name="id_diklat" id="id_diklat">
      </label></td>
    </tr>
  <tr>
    <td height="52"></td>
    <td valign="top">Tanggal Diklat</td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7" valign="top"><label>
      : 
      <input type="text" name="tanggal_mulai" id="tanggal_mulai">
      </label></td>
    </tr>
  
  <tr>
    <td height="53"></td>
    <td valign="top">Masukkan Tanggal</td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="3" valign="top">: 
      <select name="tanggal" id="tanggal">
        <option value="0">Tanggal</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        </select></td>
    <td colspan="2" valign="top">
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
        </select></td>
    <td colspan="2" valign="top"><input name="tahun" type="text" id="tahun" size="4" maxlength="4" /></td>
    </tr>
  
  <tr>
    <td height="52"></td>
    <td valign="top">Unit Pelaksana</td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7" valign="top"><label>
      : 
      <input type="text" name="unit_pelaksana" id="unit_pelaksana">
      </label></td>
    </tr>
  <tr>
    <td height="38"></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
  <tr>
    <td height="33"></td>
    <td colspan="3" rowspan="2" valign="top" bgcolor="#444444"><div align="center" class="style3">
      
      <p>URAIAN</p>
    </div></td>
    <td colspan="7" valign="top" bgcolor="#444444"><div align="center" class="style3">KESIAPAN</div></td>
    <td></td>
    </tr>
  <tr>
    <td height="33"></td>
    <td colspan="3" valign="top" bgcolor="#444444"><div align="center" class="style3">Sudah</div></td>
    <td colspan="4" valign="top" bgcolor="#444444"><div align="center" class="style3">Belum</div></td>
    <td></td>
    </tr>
  <tr>
    <td height="38"></td>
    <td colspan="3" valign="top">Jadwal</td>
    <td colspan="3" valign="top"><div align="center">
      <input name="jadwal" type="checkbox" id="jadwal" value="1">
    </div></td>
    <td colspan="4" valign="top">
      <div align="center">
        <input name="jadwal" type="checkbox" id="jadwal" value="2">
      </div></td>
    <td></td>
    </tr>
  <tr>
    <td height="53"></td>
    <td colspan="3" valign="top">Modul</td>
    <td colspan="3" valign="top"><div align="center">
      <input name="modul" type="checkbox" id="modul" value="1">
    </div></td>
    <td colspan="4" valign="top"><label>
      <div align="center">
        <input name="modul" type="checkbox" id="modul" value="2">
      </div>      </label></td>
    <td></td>
    </tr>
  

  
  <tr>
    <td height="53"></td>
    <td colspan="3" valign="top">Keperluan Peserta</td>
    <td colspan="3" valign="top"><div align="center">
      <input name="keperluan_peserta" type="checkbox" id="keperluan_peserta" value="1">
    </div></td>
    <td colspan="4" valign="top"><label>
      <div align="center">
        <input name="keperluan_peserta" type="checkbox" id="keperluan_peserta" value="2">
      </div>      </label></td>
    <td></td>
    </tr>
  
  <tr>
    <td height="53"></td>
    <td colspan="3" valign="top">Ruang</td>
    <td colspan="3" valign="top"><div align="center">
      <input name="ruang" type="checkbox" id="ruang" value="1">
    </div></td>
    <td colspan="4" valign="top"><label>
      
        <div align="center">
          <input name="ruang" type="checkbox" id="ruang" value="2">
        </div>        </label></td>
    <td></td>
    </tr>
  <tr>
    <td height="53"></td>
    <td colspan="3" valign="top"><p>Instruktur</p></td>
    <td colspan="3" valign="top"><div align="center">
      <input type="checkbox" name="checkbox5" value="checkbox">
    </div></td>
    <td colspan="4" valign="top"><label>
      <div align="center">
        <input name="instruktur" type="checkbox" id="checkbox5" value="2">
      </div>      </label></td>
    <td></td>
    </tr>
  
  <tr>
    <td height="80"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
  <tr>
    <td height="82"></td>
    <td></td>
    <td>&nbsp;</td>
    <td colspan="3" valign="top"><label>
      <input type="reset" name="reset" id="reset" value="Reset">
    </label></td>
    <td colspan="3" valign="top"><input name="simpan" type="submit" id="simpan" value="   Simpan   "></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
</table>
</form>

  </div>
   </div>
<!--End Konten-->

<div class="clearfix">
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
</html>

