<?php
session_start();
include "cek_session.php";
?>
<!doctype html>
<html>
<head>
<?php
$user=$_SESSION["username"]
?>
<meta charset="utf-8">
<title>Halaman Administrator - Java Web Media</title>
<link href="../images/Vedc.jpg" rel="shortcut icon">
<link href="../css/style-admin.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style4 {
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
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
    <div class="myform">
    
      <?php
include "koneksi.php";
$kirim=$_REQUEST["simpan"];
if (!$kirim){
?>
<center>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<table width="957" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
<tr>  <td width="238" height="60">&nbsp;</td>
  <td width="453" valign="top"><div align="center" class="sukses top">Kerangka Diklat</div></td>
<td width="266">&nbsp;</td>
</table>
<table width="502" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="138" height="46"></td>
    <td width="80"></td>
    <td width="40"></td>
    <td width="98"></td>
    <td width="146"></td>
  </tr>
  
  <tr>
    <td height="41" valign="top">Materi</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" rowspan="2" valign="top"><label>
      :
      <input type="text" name="materi" id="materi" />
        </label></td>
    </tr>
  <tr>
    <td height="11"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="7"></td>
    <td></td>
    <td></td>
    <td colspan="2" rowspan="3" valign="top"><label>
      : 
      <input type="text" name="jumlah_jam" id="jumlah_jam" />
            </label></td>
    </tr>
  <tr>
    <td height="42" valign="top">Jumlah Jam</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="3"></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td height="50"></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="82"></td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top"><label>
      <input type="reset" name="button2" id="button2" value="Reset" />
    </label></td>
    <td valign="top"><label>
      <input type="submit" name="simpan" id="simpan" value="Simpan" />
    </label></td>
    </tr>
  
  <tr>
    <td height="69"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</center>

  </div>
  </div>
<?php
}else{
$materi=$_POST["materi"];
$jumlah_jam=$_POST["jumlah_jam"];

$perintah="insert into kerangka values('$materi','$jumlah_jam')";
$hasil=mysql_query($perintah);
if ($hasil){
	echo "Anda berhasil menambahkan kerangka";
	}
else{
	echo "Anda gagal menambahkan kerangka";
	}
}
 ?>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
</html>

