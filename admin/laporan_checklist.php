<?php
session_start();
include "cek_session.php";
?>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Administrator - Java Web Media</title>
<script Language="JavaScript" src="AjaxLib.js"></script>
<script language="JavaScript">
function cetak(){
document.getElementById("tblprint").style.display="none";
print()
document.getElementById("tblprint").style.display="block";
}
function lihatDataChecklist(text){
	document.getElementById("nama_diklat").value="";
	document.getElementById("unit_pelaksana").value=""; 
	document.getElementById("waktu_pelaksana").value=""; 
	
	var pstanggal = text.getElementsByTagName("tanggal_mulai");
	var psnama = text.getElementsByTagName("nama_diklat");
	var psunit = text.getElementsByTagName("unit_pelaksana");
	var psjadwal = text.getElementsByTagName("jadwal");
	var psmodul = text.getElementsByTagName("modul");
	var pskeperluan = text.getElementsByTagName("keperluan");
	var psruang = text.getElementsByTagName("ruang");
	var psinstruktur = text.getElementsByTagName("instruktur");
	
	var tanggal = pstanggal[0].childNodes[0].nodeValue;
	var nama = psnama[0].childNodes[0].nodeValue;
	var unit = psunit[0].childNodes[0].nodeValue;
	var jadwal = psjadwal[0].childNodes[0].nodeValue;
	var modul = psmodul[0].childNodes[0].nodeValue;
	var keperluan = pskeperluan[0].childNodes[0].nodeValue;
	var ruang = psruang[0].childNodes[0].nodeValue;
	var instruktur = psinstruktur[0].childNodes[0].nodeValue;
	
	document.getElementById("nama_diklat").value=nama; 
	document.getElementById("unit_pelaksana").value=unit;
	document.getElementById("waktu_pelaksana").value=tanggal;	
	if (jadwal=="1")
		document.getElementById("rbjadwalsiap").checked=true;
	else
		document.getElementById("rbjadwalbelum").checked=true;
	if (modul=="1")
		document.getElementById("rbmodulsiap").checked=true;
	else
		document.getElementById("rbmodulbelum").checked=true;
	if (keperluan=="1")
		document.getElementById("rbkeperluansiap").checked=true;
	else
		document.getElementById("rbkeperluanbelum").checked=true;
	if (ruang=="1")
		document.getElementById("rbruangsiap").checked=true;
	else
		document.getElementById("rbruangbelum").checked=true;
	if (instruktur=="1")
		document.getElementById("rbinstruktursiap").checked=true;
	else
		document.getElementById("rbinstrukturbelum").checked=true;
	
}
</script>
<link href="../images/Vedc.jpg" rel="shortcut icon">

<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style3 {color: #FFFFFF}
-->
</style>
<?php include "koneksi.php";
$user=$_SESSION["username"];
$tanggal=$_POST["tanggal"];
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];
$id_diklat=$_POST["id_diklat"];
$nama_diklat=$_POST["nama_diklat"];
$perintah="SELECT DAY(tanggal_mulai),MONTH(tanggal_mulai),YEAR(tanggal_mulai),unit_pelaksana,jadwal,modul,keperluan_peserta,ruang,instruktur from checklist where nama_diklat='$nama_diklat'";
$hasil=mysql_query($perintah);
$row=mysql_fetch_array($hasil);
?>
</head>

<body>
<!--End Navigasi-->
    <div class="myform">
<table width="957" border="0" cellpadding="0" cellspacing="0">
<td height="27" colspan="12" valign="top"><div align="center" class="sukses top">
  <p>Daftar Kebutuhan Diklat</p>
  <p>&nbsp;</p>
</div></td>
</table>
<table width="538" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr> 
    <td width="77" height="4"></td>
    <td colspan="4" rowspan="2" valign="top"><p>ID Diklat</p></td>
    <td width="116"></td>
    <td width="88"></td>
    <td width="66"></td>
    <td width="51"></td>
  </tr>
  <tr>
    <td height="19"></td>
    <td></td>
    <td colspan="3" valign="top">:
	<select name="id_diklat" id="id_diklat">
      <option value="-" selected>Pilih Nama diklat</option>
       <?php 
  		$hasil = mysql_query("SELECT * FROM checklist");
		while($baris = mysql_fetch_row($hasil)){
		echo "<option value='$baris[1]' onclick=\"doAjax('getDataChecklist.php','param=$baris[1]','lihatDataChecklist','get','1')\">$baris[1]</option>";
		} ?>
      </select></td>
  </tr>
  
  
  <tr>
    <td height="24">&nbsp;</td>
    <td colspan="4" valign="top">Nama Diklat</td>
    <td>&nbsp;</td>
    <td colspan="3" valign="top"><label>
      : 
      <input type="text" name="nama_diklat2" id="nama_diklat">
    </label></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td colspan="4" valign="top">Unit Pelaksana</td>
    <td></td>
    <td colspan="3" valign="top"><label>
      :
      <input type="text" name="unit_pelaksana" id="unit_pelaksana">
    </label></td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td colspan="4" valign="top">Waktu Pelaksana</td>
    <td></td>
    <td colspan="3" valign="top"><label>
      : 
      <input type="text" name="waktu_pelaksana" id="waktu_pelaksana">
    </label></td>
  </tr>
  <tr>
    <td height="56">&nbsp;</td>
    <td width="44"></td>
    <td width="34"></td>
    <td width="48"></td>
    <td width="16"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td rowspan="2" valign="top"><div align="center">No.</div></td>
    <td colspan="4" rowspan="2" valign="top"><div align="center">URAIAN</div></td>
    <td colspan="2" valign="top"><div align="center">Kesiapan</div></td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">Siap</div></td>
    <td valign="top"><div align="center">Belum</div></td>
  </tr>
  
  
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">1.</div></td>
    <td colspan="4" valign="top"><div align="center">Jadwal</div></td>
    <td valign="top"> 
      <div align="center">
        <label>
        <input name="radio" type="radio" id="rbjadwalsiap" value="1">
        </label>
      </div></td>
    <td valign="top">
      <div align="center">
        <label>
        <input type="radio" name="radio" id="rbjadwalbelum">
        </label>
      </div></td>
  </tr>
  
  
  <tr>
    <td height="24">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">2.</div></td>
    <td colspan="4" valign="top"><div align="center">Modul</div></td>
    <td valign="top"> 
      <div align="center">
		<input name="modul" type="radio" id="rbmodulsiap">
    </div></td>
    <td valign="top">
      <div align="center">
		<input name="modul" type="radio" id="rbmodulbelum">
     </div></td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">3.</div></td>
    <td colspan="4" valign="top"><div align="center">Keperluan Peserta</div></td>
    <td valign="top"> 
      <div align="center">
		<input name="keperluan" type="radio" id="rbkeperluansiap">  
     </div></td>
    <td valign="top">
      <div align="center">
		<input name="keperluan" type="radio" id="rbkeperluanbelum">
      </div></td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">4</div></td>
    <td colspan="4" valign="top"><div align="center">Ruang</div></td>
    <td valign="top"> 
      <div align="center">
        <input name="ruang" type="radio" id="rbruangsiap"> 
          </div></td>
    <td valign="top">
      <div align="center">
        <input name="ruang" type="radio" id="rbruangbelum">
     </div></td>
  </tr>
  
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">5.</div></td>
    <td colspan="4" valign="top"><div align="center">Instruktur</div></td>
    <td valign="top"> 
      <div align="center">
        <input name="instruktur" type="radio" id="rbinstruktursiap">   
          </div></td>
    <td valign="top">
      <div align="center">
        <input name="instruktur" type="radio" id="rbinstrukturbelum">
     </div></td>
  </tr>
  <tr>
    <td height="54">&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="42">&nbsp;</td>
    <td></td>
    <td colspan="2" valign="top"><input type="button" name="Submit" value="     Print     " id="tblprint" onClick="cetak()"></td>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td height="130">&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
  </div>
</body>
</html>

