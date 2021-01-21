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
.style5 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<?php include "koneksi.php"; ?>
</head>
<?php
$user=$_SESSION["username"];
$kode=$_REQUEST['id_diklat'];
$nama_diklat=$_REQUEST['nama_diklat'];
$peserta=$_REQUEST['jumlah_peserta'];
$materi=$_REQUEST['materi'];
$tanggal=$_REQUEST['tanggal'];
$tanggal1=$_REQUEST['tanggal1'];
$ruang=$_REQUEST['ruang'];
$kirim=$_REQUEST['simpan'];
if (!$kirim){
$qry="SELECT nama_diklat,jumlah_peserta,materi,ruang FROM diklat WHERE id_diklat='$kode'";
$hasil=mysql_query($qry);
$brs=mysql_fetch_array($hasil);
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
    <div class="myform">
  <table width="722" border="0" cellpadding="0" cellspacing="0">
    <td height="30" colspan="5" valign="top"><div align="center" class="sukses style5">EDIT FORM DIKLAT</div></td>
    </table>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table width="722" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="33" height="33">&nbsp;</td>
    <td width="65">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="45">&nbsp;</td>
    <td width="33">&nbsp;</td>
    <td width="144">&nbsp;</td>
    <td width="166">&nbsp;</td>
    <td width="80">&nbsp;</td>
    <td width="33"></td>
    <td width="33"></td>
  </tr>
  
  
  <tr>
    <td height="52">&nbsp;</td>
    <td colspan="3" valign="top">ID Diklat</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="5" valign="top"><label>
       : 
           <input type="text" name="id_diklat" id="id_diklat" value="<?php echo $kode ?>">
      </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="52"></td>
    <td colspan="3" valign="top">Nama Diklat</td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" valign="top"><label>
      :  
      <input type="text" name="nama_diklat" id="nama_diklat" value="<?php echo $brs[0] ?>"/>
        </label></td>
    <td></td>
  </tr>
  <tr>
    <td height="52"></td>
    <td colspan="5" valign="top">Jumlah Peserta</td>
    <td>&nbsp;</td>
    <td colspan="5" valign="top"><label>
      : 
      <input type="text" name="jumlah_peserta" id="jumlah_peserta" value="<?php echo $brs[1] ?>"/>
      </label></td>
    <td></td>
  </tr>
  <tr>
    <td height="41"></td>
    <td valign="top">Materi</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" valign="top"><label>
      : 
      <select name="materi" id="materi">
	   <option value="-" selected>Pilih Materi</option>
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
    <td height="55"></td>
    <td colspan="4" valign="top">Tanggal Mulai</td>
    <td>&nbsp;</td>
    <td></td>
    <td colspan="2" valign="top"><label>
      : 
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
      </select>
      </label>
      <label></label>
      <label></label></td>
    <td valign="top"><select name="bulan" id="bulan">
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
    <td valign="top"><input name="tahun" type="text" id="tahun" size="4" maxlength="4" /></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="52"></td>
    <td colspan="4" valign="top">Tanggal akhir</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top"><label>
      :
      <select name="tanggal1" id="tanggal1">
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
      </label>
      <label></label>
      <label></label></td>
    <td valign="top"><select name="bulan1" id="select1">
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
    <td valign="top"><input name="tahun1" type="text" id="tahun1" size="4" maxlength="4" /></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="41"></td>
    <td colspan="2" valign="top">Ruang</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="4" valign="top"><label>
      : 
      <select name="ruang" id="ruang">
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
    <td></td>
  </tr>
  <tr>
    <td height="77"></td>
    <td></td>
    <td></td>
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
  </tr>
  <tr>
    <td height="82"></td>
    <td></td>
    <td>&nbsp;</td>
    <td colspan="5" valign="top"><label>
      <input type="reset" name="button2" id="button2" value="Reset" />
    </label></td>
    <td valign="top"><label>
      <input type="submit" name="simpan" id="button" value="Simpan" />
    </label></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</form>

<?php
}else{
$iddiklat=$_POST["id_diklat"];
$namadiklat=$_POST["nama_diklat"];
$peserta=$_POST["jumlah_peserta"];
$materi=$_POST["materi"];
$tanggal=$_POST["tanggal"];
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];
$tanggal1=$_POST["tanggal1"];
$bulan1=$_POST["bulan1"];
$tahun1=$_POST["tahun1"];
$ruang=$_POST["ruang"];
$perintah="UPDATE diklat set nama_diklat='$namadiklat',jumlah_peserta='$peserta',materi='$materi',tanggal_mulai='$tahun-$bulan-$tanggal', tanggal_akhir='$tahun1-$bulan1-$tanggal1',ruang='$ruang' where id_diklat='$iddiklat'";
$hasil=mysql_query($perintah);
echo $perintah;
if ($hasil){
	echo "instruksi sukses !<br>";
	echo "<a href=\"lihat_diklat.php\">tampil Diklat</a>";
	echo "&nbsp;&nbsp;&nbsp;<a href=\"jadwal.html\">Tambah diklat</a>";
}
else{
	echo "instruksi gagal !";
	echo "<a href=\"diklat.html\">kembali input</a>";
}
}
?>

  </div>
   </div>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
</html>

