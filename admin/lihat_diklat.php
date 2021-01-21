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
$user=$_SESSION["username"];
?>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<?php include "koneksi.php";
$tanggal=$_POST["tanggal"];
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];
$id_diklat=$_POST["id_diklat"];
$nama_diklat=$_POST["nama_diklat"];
$perintah="select*from checklist where nama_diklat='$nama_diklat'";
$hasil=mysql_query($perintah);
$row=mysql_fetch_array($hasil);
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
    <table width="1125" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
    <tr> 
    <td width="1125" height="42">&nbsp;</td>
    </tr>
    <tr>
      <td height="24" valign="top"><div align="center" class="style1">Daftar Diklat</div></td>
    </tr>
    <tr>
      <td height="54">&nbsp;</td>
    </tr>
    </table>
    
    <table width="1125" border="1" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="29" colspan="10" valign="top" bgcolor="#FF6633"><div align="center">
      <p><font size="5">DAFTAR DIKLAT</font></p>
    </div></td>
    </tr>
  
  
  
  
  
  <tr> 
    <td width="45" height="21" valign="top" bgcolor="#009999"><div align="center">No.</div></td>
    <td width="120" valign="top" bgcolor="#009999"><div align="center">ID Diklat</div></td>
    <td width="215" valign="top" bgcolor="#009999"><div align="center">Nama Diklat</div></td>
    <td width="107" valign="top" bgcolor="#009999"><div align="center">Jumlah Peserta</div></td>
    <td width="105" valign="top" bgcolor="#009999"><div align="center">Materi</div></td>
    <td width="106" valign="top" bgcolor="#009999"><div align="center">Tanggal Mulai</div></td>
    <td width="135" valign="top" bgcolor="#009999"><div align="center">Tanggal Akhir</div></td>
    <td width="126" valign="top" bgcolor="#009999"><div align="center">Ruang</div></td>
    <td width="71" valign="top" bgcolor="#009999"><div align="center">Edit</div></td>
    <td width="73" valign="top" bgcolor="#009999"><div align="center">Hapus</div></td>
  </tr>
<?php
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$no=0;
$perintah="SELECT diklat.id_diklat, diklat.nama_diklat, diklat.jumlah_peserta, materi.materi, diklat.tanggal_mulai, diklat.tanggal_akhir, ruang.nama_ruang, 
DATE_FORMAT(diklat.tanggal_mulai,'%d-%m-%y'),DATE_FORMAT(diklat.tanggal_akhir,'%d-%m-%y') 
FROM diklat, materi, ruang WHERE ruang.id_ruang=diklat.ruang AND materi.id_materi=diklat.materi";
$hasil=mysql_query($perintah);

while($brs=mysql_fetch_array($hasil)){
	$no++;
?>
  <tr>
    <td height="21" align="center" valign="top"><?php echo $no; ?></td>
    <td align="center" valign="top"><?php echo $brs[0]; ?></td>
    <td align="center" valign="top"><?php echo $brs[1]; ?></td>
    <td align="center" valign="top"><?php echo $brs[2]; ?></td>
    <td align="center" valign="top"><?php echo $brs[3]; ?></td>
    <td align="center" valign="top"><?php echo $brs[4]; ?></td>
    <td align="center" valign="top"><?php echo $brs[5]; ?></td>
    <td valign="top"><?php echo $brs[6]; ?></td>
    <td valign="top"><a href="editdiklat.php?id_diklat=<?php echo $brs[0];?>"><font face="Geneva, Arial, Helvetica, sans-serif"><center>
      <p><img src="../images/img/update.png" width="22" height="22"></p>
      </center>
    </font></a></td>
    <td valign="top"><a href="hapusidiklat.php?id_diklat=<?php echo $brs[0];?>"><font face="Geneva, Arial, Helvetica, sans-serif"><center>
      <p><img src="../images/img/delete.png" width="22" height="22"></p>
      </center>
    </font></a></td>
  </tr>
  <?php }?>
</table>
  </form>

  </div>
<!--End Konten-->

<div class="clearfix"></div>
    <footer>Sistem Informasi Pembukuan Diklat | &copy;by Mahasiswa UDINUS - 2014</footer>    
</div>
</body>
</html>

