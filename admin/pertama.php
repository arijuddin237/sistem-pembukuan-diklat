<?php
session_start();
include "cek_session.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Administrator - Java Web Media</title>
<link href="images/Vedc.jpg" rel="shortcut icon">
<link href="css/style-admin.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<?php
$user=$_SESSION["username"];
?>
</head>

<body>
<div id="wrapper">

<header>
	  <div class="akun"><a href="#" title="Update konfigurasi"><img src="images/Vedc.jpg" width="16" height="16"> Sistem Informasi Pembukuan Diklat</a></div>
	  <div class="akun"><a href="#" title="Update profil"><img src="images/img/user_red.png" width="16" height="16"><?php echo $user; ?></a></div>
      <div class="akun"><a href="admin/logout.php" title="Logout disini"><img src="images/img/delete.png" width="16" height="16"> Logout</a></div>
	  <div class="home"><a href="../index.php" title="Beranda"><img src="images/img/house_go.png" width="16" height="16"> Beranda</a></div>
  </header>
<!--En header-->

<nav>
    <ul id="MenuBar1" class="MenuBarHorizontal">
                <li><a href="#" class="MenuBarItemSubmenu">Master</a>
          <ul>
            <li><a href="admin/ruang.php">Ruang</a></li>
            <li><a href="admin/instruktur.php">Instruktur</a></li>
            <li><a href="admin/materi.php">Materi</a></li>
            <li><a href="admin/cari_jadwal.php">Jadwal</a></li>
             <li><a href="admin/lihat_diklat.php">Diklat</a></li>
        
          </ul>
        </li>
<li><a href="#" class="MenuBarItemSubmenu">Input Data</a>
        <ul>
            <li><a href="admin/checklist.php">Checklist</a></li>
            <li><a href="admin/jadwal.php">Jadwal</a></li>
            <li><a href="admin/kerangka.php">Kerangka</a></li>
            <li><a href="admin/diklat.php">Diklat</a></li>
          </ul>
        </li>
		<li><a href="#" class="MenuBarItemSubmenu">Laporan</a>
    <ul>
            <li><a href="admin/search_checklist.php">Laporan Checklist Kebutuhan</a></li>
            <li><a href="admin/search_kerangka.php">Laporan Kerangka</a></li>
            <li><a href="admin/cari_lap_jadwal.php">Laporan Jadwal</a></li>
          <li><a href="admin/cari_diklat.php">Laporan Diklat</a></li>
        </ul>
        </li>
              </ul>
              </ul>
  </nav>
  <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script> 
<!--End Navigasi-->
   
    <div align="center" class="konten">
    <img src="images/awal2.jpg" width="444" height="300">
    <p><a href="lihat_jadwal.php"><img src="images/lihat_jadwal.jpg" width="184" height="76"></a></p></div>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
</html>

