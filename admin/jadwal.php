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
<script Language="JavaScript" src="AjaxLib.js"></script>
<script Language="JavaScript">
function viewDataNama(text){
	document.getElementById("id_diklat").value="";
	var psid = text.getElementsByTagName("id");
	var id = psid[0].childNodes[0].nodeValue;
	document.getElementById("id_diklat").value=id;
}
</script>
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
?>
<?php $kirim=$_REQUEST["simpan"];
if (!$kirim){
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
            <li><a href="cari_diklat.php">Diklat</a></li>
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
             
              </ul>
  </nav>
  <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script> 
<!--End Navigasi-->
   
    <div class="konten">
    <div class="myform">
    
    <table width="706" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
    <tr>
    <td width="252" valign="top" bgcolor="#FFFFFF"><p align="center" class="sukses style6 style9 style1">FORM JADWAL</p></td>
    </tr>
    </table>    
    
<form name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table width="706" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="36" height="48"></td>
    <td width="87" valign="top"></td>
    <td width="104"></td>
    <td width="41"></td>
    <td width="37"></td>
    <td width="43"></td>
    <td colspan="5" valign="top"><label>
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
    <td width="66"></td>
    </tr>
  <tr>
    <td height="52"></td>
    <td valign="top"><p>ID Diklat</p></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" valign="top"><label>
      : 
      <input type="text" name="id_diklat" id="id_diklat" placeholder="ID Diklat">
      </label></td>
    <td></td>
    </tr>
  
  <tr>
    <td height="52"></td>
    <td rowspan="2" valign="top">Tanggal</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="2" rowspan="2" valign="top"><label>
      :
          <select name="tanggal" id="select5">
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
          </select>
    </label></td>
    <td width="133" valign="top"><select name="bulan" id="select6">
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
    <td width="86" valign="top"><input name="tahun" type="text" id="textfield" size="4" maxlength="4" placeholder="Tahun"/></td>
    <td width="1">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="2"></td>
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
    <td height="52"></td>
    <td valign="top">Waktu</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" valign="top"><label>
      : 
      <input type="text" name="waktu" id="waktu" placeholder="Waktu" />
        </label></td>
    <td></td>
    </tr>
  
  <tr>
    <td height="41"></td>
    <td colspan="2" valign="top">Topik dan Kegiatan</td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" valign="top"><label>
      :
      <select name="topik" id="topik">
	  <option value="-" selected>Pilih Topik</option>
        <?php
			$sql="select * from materi order by id_materi";
			$hasil=mysql_query($sql);
			while($brs=mysql_fetch_array($hasil)){
			echo "<option value=\"$brs[0]\">$brs[1]</option>";
			}
		?>
      </select>
      </label></td>
    <td></td>
    </tr>
  <tr>
    <td height="52"></td>
    <td valign="top">Jumlah Jam</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" valign="top"><label>
      : 
      <input type="text" name="jumlah_jam" id="jumlah_jam" placeholder="Ruang"/>
        </label></td>
    <td></td>
    </tr>
  
  <tr>
    <td height="48"></td>
    <td valign="top">Ruang</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" valign="top">
      <label>
      : <select name="ruang" id="select">
        <option value="-" selected>Pilih Ruang</option>
        <?php
			$sql="select * from ruang order by id_ruang";
			$hasil=mysql_query($sql);
			while($brs=mysql_fetch_array($hasil)){
			echo "<option value=\"$brs[0]\">$brs[1]</option>";
			}
		?>
      </select>
      </label></td>
    <td></td>
    </tr>
  
  <tr>
    <td height="47"></td>
    <td valign="top">Instruktur</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" valign="top"><label>: 
        <select name="instruktur" id="instruktur">
        <option value="-" selected>Pilih Instruktur</option>
        <?php
			$sql="select * from instruktur order by nik";
			$hasil=mysql_query($sql);
			while($brs=mysql_fetch_array($hasil)){
			echo "<option value=\"$brs[0]\">$brs[1]</option>";
			}
		?>
      </select>
      </label></td>
    <td></td>
    </tr>
  
  <tr>
    <td height="43"></td>
    <td colspan="2" valign="top">Instruktur 2</td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" valign="top"><label>
      : 
      <select name="instruktur2" id="instruktur2">
        <option value="-" selected>Pilih Instruktur</option>
        <?php
			$sql="select * from instruktur order by nik";
			$hasil=mysql_query($sql);
			while($brs=mysql_fetch_array($hasil)){
			echo "<option value=\"$brs[0]\">$brs[1]</option>";
			}
		?>
      </select>
      </label></td>
    <td></td>
    </tr>
  <tr>
    <td height="72"></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td width="102"></td>
    <td width="53"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
  <tr>
    <td height="82"></td>
    <td></td>
    <td colspan="2" valign="top"><label>
      <input type="reset" name="reset" id="reset" value="Reset" />
    </label></td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top"><label>
      <input type="submit" name="simpan" id="simpan" value="Simpan" />
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    </tr>
</table>
</form>
</div>
  </div>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
<?php
}else{

$id_diklat=$_POST["id_diklat"];
$nama_diklat=$_POST["nama_diklat"];
$tanggal=$_POST["tanggal"];
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];
$waktu=$_POST["waktu"];
$topik=$_POST["topik"];
$jumlah_jam=$_POST["jumlah_jam"];
$ruang=$_POST["ruang"];
$instruktur=$_POST["instruktur"];
$instruktur2=$_POST["instruktur"];
$perintah="insert into jadwal values('$id_diklat','$nama_diklat','$tahun-$bulan-$tanggal','$waktu','$topik','$jumlah_jam','$ruang','$instruktur','$instruktur2')";
$hasil=mysql_query($perintah);

if($hasil){
echo "Anda berhasil memasukkan data jadwal";}
else{
echo "Anda gagal menambahkan data jadwal";
echo $perintah;
}
}
?>
</html>

