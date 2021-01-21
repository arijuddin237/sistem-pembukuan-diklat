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
.style1 {
	font-size: 18px
}
.style2 {color: #FFFFFF}
.style3 {font-size: 18px; color: #FFFFFF; }
.style4 {
	font-size: 14px
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
    
      <?php
include "koneksi.php";
?>
<table width="860" border="1" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <?php
  $sql="select * from ruang order by id_ruang";
  $hasil=mysql_query($sql);
  ?> 
  <tr>
    <td width="249" height="23" valign="top" bgcolor="#FF6666"><div align="center" class="style1 style2"><font face="Geneva, Arial, Helvetica, sans-serif">Kode 
      Ruangan</font></div></td>
    <td width="312" valign="top" bgcolor="#FF6666"><div align="center" class="style3"><font face="Geneva, Arial, Helvetica, sans-serif">Nama 
      Ruang</font></div></td>
    <td colspan="2" valign="top" bgcolor="#FF6666"><!--DWLayoutEmptyCell-->&nbsp;</td>  
    </tr>
  
  
  <?php
	while($brs=mysql_fetch_array($hasil)){
	?>
  <tr> 
    <td height="30" align="center" valign="top"> 
      <p><?php echo $brs[0]; ?></p></td>
    <td align="center" valign="top"> 
      <p><?php echo $brs[1]; ?></p></td>
    <td width="158" valign="top"><a href="edit_ruang.php?id_ruang=<?php echo $brs[0];?>"><font face="Geneva, Arial, Helvetica, sans-serif"><center>
     <p><img src="../images/img/update.png" width="22" height="22">
     </p>
      </center>
    </font></a></td>
    <td width="131" valign="top"><a href="hapus_ruang.php?id_ruang=<?php echo $brs[0];?>"><font face="Geneva, Arial, Helvetica, sans-serif"><center>
      <p><img src="../images/img/delete.png" width="22" height="22"></p>
      </center>
    </font></a></td>
    </tr>
  
  
  <?php
  }
  ?></table>
 
</table>
 <table width="254">
    <!--DWLayoutTable-->
  <tr>
  <td width="62" height="16"></td>
  <td width="126"></td>
  <td width="44"></td>
  </tr>
  <tr>
    <td height="25"></td>
    <td valign="top"  bgcolor="#009999"><div align="center">
      <p><a href="tambah_ruang.php" title="Tambah Data" class="style8"><img src="../images/icon/tests64.png" width="16" height="16"><span class="style2"> Tambah Data</span></a></p>
      </div>
    
    <td></td>
  </tr>
  <tr>
    <td height="26"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  </table>

 
  </div>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
</html>

