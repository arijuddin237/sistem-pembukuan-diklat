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
-->
</style>
<?php include "koneksi.php";
$user=$_SESSION["username"];
?>
</head>
<?php 
		$tanggal=$_POST['tanggal'];
		$bulan=$_POST["bulan"];
		$tahun=$_POST["tahun"];
		$id_diklat=$_POST["id_diklat"];
		$nama=$_POST["nama_diklat"];
		$unit=$_POST["unit_pelaksana"];
		$kirim=$_REQUEST['simpan'];
		$waktu=$_POST["waktu_pelaksana"];
		
		if (!$kirim){
		$sql = "select*from checklist where id_diklat='$id_diklat'";
		$hasil = mysql_query($sql);
		$row=mysql_fetch_array($hasil);
	?>
	
<form name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

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
    
      <?php
include "koneksi.php";
?>
<table width="957" border="0" cellpadding="0" cellspacing="0">
<td height="27" colspan="12" valign="top"><div align="center" class="sukses top">Daftar Kebutuhan Diklat</div></td>
</table>
<form name="form1" method="post" action="checklist1.php">
<table width="957" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  
  <tr> 
    <td width="54" height="35"></td>
    <td width="111">&nbsp;</td>
    <td width="52">&nbsp;</td>
    <td width="52">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="15">&nbsp;</td>
    <td width="51">&nbsp;</td>
    <td width="83">&nbsp;</td>
    <td width="87">&nbsp;</td>
    <td width="50">&nbsp;</td>
    <td width="15">&nbsp;</td>
    <td width="45">&nbsp;</td>
    <td width="101">&nbsp;</td>
    <td width="54">&nbsp;</td>
    <td width="75">&nbsp;</td>
    <td width="72">&nbsp;</td>
    </tr>
  
  <tr>
    <td height="40"></td>
    <td valign="top">Tanggal Diklat</td>
    <td></td>
    <td></td>
    <td colspan="3" valign="top">: <?php echo $waktu;?>&nbsp;</td><label>
      <input type="hidden" name="tanggal_diklat" id="textfield3" value="<?php echo $waktu;?>">
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><label>
      <input type="hidden" name="id" id="textfield2" value="<?php echo $id_diklat ?>">
    </label></td>
    <td></td>
    </tr>
  
  <tr>
    <td height="37"></td>
    <td valign="top">ID Diklat</td>
    <td></td>
    <td></td>
    <td colspan="9" valign="top"><label>: <?php echo $id_diklat ?></label></td>
    <td></td>
    <td valign="top"><label>
      <input type="hidden" name="nama_diklat" id="textfield4" value="<?php echo $nama ?>">
    </label></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="36"></td>
    <td valign="top">Nama Diklat</td>
    <td></td>
    <td></td>
    <td colspan="9" valign="top"><label>: <?php echo $nama ?></label></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="52"></td>
    <td valign="top">Unit Pelaksana</td>
    <td></td>
    <td></td>
    <td colspan="9" valign="top">
      <label>
      : <input type="text" name="unit_pelaksana" id="textfield" value="<?php echo $unit ?>">
      </label></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="76"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
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
    <td height="33"></td>
    <td colspan="2" rowspan="2" valign="top" bgcolor="#444444"><div align="center" class="style3">
      
      <p>URAIAN</p>
    </div></td>
    <td colspan="8" valign="top" bgcolor="#444444"><div align="center" class="style3">KESIAPAN</div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="33"></td>
    <td colspan="3" valign="top" bgcolor="#444444"><div align="center" class="style3">Sudah</div></td>
    <td colspan="5" valign="top" bgcolor="#444444"><div align="center" class="style3">Belum</div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  
  <tr>
    <td height="51"></td>
    <td colspan="2" valign="top">Jadwal</td>
    <td colspan="3" valign="top"><div align="center">
      <?php
		if($row[4]=="1")
			echo "<input name=\"jadwal\" type=\"radio\" value=\"1\" checked>";
		else
			echo "<input name=\"jadwal\" type=\"radio\" value=\"1\">";
	  ?> 
    </div></td>
    <td colspan="5" valign="top">
      <div align="center">
        <?php
		if($row[4]=="2")
			echo "<input name=\"jadwal\" type=\"radio\" value=\"2\" checked>";
		else
			echo "<input name=\"jadwal\" type=\"radio\" value=\"2\">";
	  ?>      
      </div></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
  <tr>
    <td height="51"></td>
    <td colspan="2" valign="top">Modul</td>
    <td colspan="3" valign="top"><div align="center">
      <?php
		if($row[5]=="1")
			echo "<input name=\"modul\" type=\"radio\" value=\"1\" checked>";
		else
			echo "<input name=\"modul\" type=\"radio\" value=\"1\">";
		?> 
    </div></td>
    <td colspan="5" valign="top"><label>
      <div align="center">
        <?php
		if($row[5]=="2")
			echo "<input name=\"modul\" type=\"radio\" value=\"2\" checked>";
		else
			echo "<input name=\"modul\" type=\"radio\" value=\"2\">";
		?>
      </div>      </label></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="51"></td>
    <td colspan="2" valign="top">Keperluan Peserta</td>
    <td colspan="3" valign="top"><div align="center">
      <?php
	  if($row[6]=="1")
		echo "<input name=\"keperluan\" type=\"radio\" value=\"1\" checked>";
	  else
		echo "<input name=\"keperluan\" type=\"radio\" value=\"1\">";
	  ?>
    </div></td>
    <td colspan="5" valign="top"><label>
      <div align="center">
        <?php
    if($row[6]=="2")
		echo "<input name=\"keperluan\" type=\"radio\" value=\"2\" checked>";
	  else
		echo "<input name=\"keperluan\" type=\"radio\" value=\"2\">";
	  ?> 
      </div>      </label></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="51"></td>
    <td colspan="2" valign="top">Ruang</td>
    <td colspan="3" valign="top"><div align="center">
      <?php
	  if($row[7]=="1")
		echo "<input name=\"ruang\" type=\"radio\" value=\"1\" checked>";
	  else
		echo "<input name=\"ruang\" type=\"radio\" value=\"1\">";
	  ?>  
    </div></td>
    <td colspan="5" valign="top"><label>
      
        <div align="center">
          <?php
    if($row[7]=="2")
		echo "<input name=\"ruang\" type=\"radio\" value=\"2\" checked>";
	  else
		echo "<input name=\"ruang\" type=\"radio\" value=\"2\">";
	  ?>
        </div>        </label></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="51"></td>
    <td colspan="2" valign="top"><p>Instruktur</p></td>
    <td colspan="3" valign="top"><div align="center">
      <?php
	  if($row[8]=="1")
		echo "<input name=\"instruktur\" type=\"radio\" value=\"1\" checked>";
	  else
		echo "<input name=\"instruktur\" type=\"radio\" value=\"1\">";
	  ?>
    </div></td>
    <td colspan="5" valign="top"><label>
      <div align="center">
        <?php
    if($row[8]=="2")
		echo "<input name=\"instruktur\" type=\"radio\" value=\"2\" checked>";
	  else
		echo "<input name=\"instruktur\" type=\"radio\" value=\"2\">";
	  ?>
      </div>      </label></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="35"></td>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="82"></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td colspan="5" valign="top"><input name="simpan" type="submit" id="simpan" value="   Simpan Perubahan   "></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="114"></td>
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
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
<?php
}else{
$jadwal=$_POST["jadwal"];
$modul=$_POST["modul"];
$keperluan=$_POST["keperluan"];
$ruang=$_POST["ruang"];
$instruktur=$_POST["instruktur"];
$tanggal=$_REQUEST['tanggal'];
$id_diklat=$_POST["id"];
$nama=$_POST["nama_diklat"];
$unit=$_POST["unit_pelaksana"];
$nama_diklat=$_POST["nama_diklat"];
$perintah="update checklist set nama_diklat='$nama', unit_pelaksana='$unit', jadwal='$jadwal', modul='$modul', keperluan_peserta='$keperluan', ruang='$ruang', instruktur='$instruktur' where id_diklat='$id_diklat'";
$hasil=mysql_query($perintah);
if($hasil){
echo "Anda berhasil memasukkan data checklist";
echo "<a href=\"search_checklist.php\">Tampilkan Daftar Checklist</a>";
}else{
echo "Anda gagal menambahkan data checklist";
echo "<a href=\"checklist.php\">Entry Checkllist</a>";
echo $perintah;
}
}
?>
</html>

