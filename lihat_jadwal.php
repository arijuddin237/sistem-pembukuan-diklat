<?php
session_start();
include "admin/koneksi.php";
$sesiutama=$_SESSION["sesiutama"];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SISTEM INFORMASI PEMBUKUAN DIKLAT</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>
<script Language="JavaScript" src="AjaxLib.js"></script>
<script Language="JavaScript">
function viewDataDiklat(text){
	document.getElementById("id_diklat").value="";
	var psid = text.getElementsByTagName("id");
	var id = psid[0].childNodes[0].nodeValue;
	document.getElementById("id_diklat").value=id;
}
</script>


<body>
<div id="wrapper">

  <header>
    	<div id="logo"><a href="index.php"><img src="images/Vedc.jpg" width="400" height="400"></a></div>
        <div id="nama"><span class="nama">Sistem Informasi Pembukuan Diklat</span><br>
        <span class="aipni">PPPPTK VEDC Malang</span></div>
  </header>

<nav>
  	<ul>
    	<li><a href="lihat_jadwal.php">Jadwal Diklat</a></li>
        <li><a href="index.php">LOG IN</a></li>
    </ul>
  </nav>
 
<div class="konten">
    <div align="center" class="myform">
    
<table width="355" border="0" cellpadding="0" cellspacing="0">
    <td colspan="6" valign="top"><div align="center" class="sukses style6 style9 style2 style1">Cari  Jadwal Diklat</div>
      </p></td>
</table>    
    
<form name="form2" method="post" action="tampil_jadwal.php">
<table width="355" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  
  <tr>
    <td height="48" colspan="2" valign="top">Nama Diklat </td>
    <td colspan="2" valign="top"><label>
      : 
      <select name="nama_diklat" id="nama_diklat">
	  <option value="-" selected>Pilih Nama diklat</option>
	  <?php 
  		$hasil = mysql_query("SELECT * FROM diklat");
		while($baris = mysql_fetch_row($hasil)){
		echo "<option value='$baris[1]' onclick=\"doAjax('getDataDiklat.php','param=$baris[1]','viewDataDiklat','get','1')\">$baris[1]</option>";
		} ?>
      </select>
      </label></td>
    </tr>
  <tr>
    <td height="52" colspan="2" valign="top">ID Diklat</td>
    <td colspan="2" valign="top"><label>
      :
      <input type="text" name="id_diklat" id="id_diklat" placeholder="ID Diklat">
      </label></td>
    </tr>
  <tr>
    <td width="105" height="15"></td>
    <td width="19"></td>
    <td width="179"></td>
    <td width="79"></td>
    </tr>
  <tr>
    <td height="82"></td>
    <td colspan="2" valign="top">
      <input type="submit" name="lihat" id="lihat" value="   Lihat Jadwal    ">    </td>
    <td>&nbsp;</td>
    </tr>
</table>
</form>
  </div>
</div>
    <!-- konten bawah -->
  <div class="clearfix"></div>
     
 <div class="clearfix"></div>
    <footer><a href="http://javawebmedia.com" target="_blank">Sistem Informasi Pembukuan Diklat</a> | &copy;by UDINUS - 2014</footer>
</div>
</body>
</html>
