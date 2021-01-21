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
.style1 {
	font-size: 14px;
	font-weight: bold;
}
.style2 {font-size: 18px}
-->
</style>
</head>
<?php
$user=$_SESSION["username"]; 
$id_diklat=$_POST["id_diklat"];
$nama_diklat=$_POST["nama_diklat"];
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
    <table>
    <td colspan="2" valign="top"><div align="center" class="sukses style1 style2">Jadwal Diklat</div></td>
    </table>
    
    <table width="849" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
 <tr>
 <td height="20">
 </td>
 </tr>
  <tr>
    <td height="21" valign="top">ID Diklat </td>
    <td valign="top">: 
      <label><?php echo $id_diklat; ?></label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td height="22" valign="top">Nama Diklat</td>
    <td valign="top"><p>:<?php echo $nama_diklat; ?></p></td>
    <td></td>
    <td></td>
    </tr>
  <tr>
    <td height="30"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
    </table>
    
<table width="1014" border="1" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="24" colspan="9" valign="top" bgcolor="#FF6633"><div align="center">
      <p><font size="5">JADWAL</font></p>
        </div></td>
    </tr>
  
  
  
  
  
  <tr> 
    <td width="94" height="19" valign="top" bgcolor="#009999"><div align="center">Tanggal</div></td>
    <td width="71" valign="top" bgcolor="#009999"><div align="center">Waktu</div></td>
    <td width="215" valign="top" bgcolor="#009999"><div align="center">Topik dan kegiatan</div></td>
    <td width="135" valign="top" bgcolor="#009999"><div align="center">Jumlah jam</div></td>
    <td width="77" valign="top" bgcolor="#009999"><div align="center">Ruang</div></td>
    <td width="106" valign="top" bgcolor="#009999"><div align="center">Instruktur</div></td>
    <td width="135" valign="top" bgcolor="#009999"><div align="center">Instruktur 2</div></td>
    <td width="80" valign="top" bgcolor="#009999"><div align="center">Edit</div></td>
    <td width="81" valign="top" bgcolor="#009999"><div align="center">Hapus</div></td>
  </tr>
    <?php 
	$perintah="SELECT * from jadwal where id_diklat='$id_diklat'";
	$hasil=mysql_query($perintah);
	while($brs=mysql_fetch_array($hasil)){;
	?>
  <tr> 
    <td height="20" align="center" valign="top"><?php echo $brs[2]; ?></td>
    <td align="center" valign="top"><?php echo $brs[3]; ?></td>
    <td align="center" valign="top"><?php echo $brs[4]; ?></td>
    <td align="center" valign="top"><?php echo $brs[5]; ?></td>
    <td align="center" valign="top"><?php echo $brs[6]; ?></td>
    <td align="center" valign="top"><?php echo $brs[7]; ?></td>
    <td align="center" valign="top"><?php echo $brs[8]; ?></td>
    <td valign="top"><a href="edit_jadwal.php?id_diklat=<?php echo $brs[0];?>&nama_diklat=<?php echo $brs[1]; ?>&tanggal_jadwal=<?php echo $brs[2]; ?>"><font face="Geneva, Arial, Helvetica, sans-serif"><center>
      <p><img src="../images/img/update.png" width="22" height="22"></p>
      </center>
    </font></a></td>
    <td valign="top"><a href="hapusjadwal.php?id_diklat=<?php echo $brs[0];?>"><font face="Geneva, Arial, Helvetica, sans-serif"><center>
      <p><img src="../images/img/delete.png" width="22" height="22"></p>
      </center>
    </font></a></td>
  </tr>
  <?php
  }
  ?>
</table>
  <p>&nbsp;</p>
  </form>

  </div>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
</html>

