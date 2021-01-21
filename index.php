<?php
session_start();
include "admin/koneksi.php";
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$sesi=$_SESSION['username'];
$kirim=$_REQUEST['submit2'];
$param=$_REQUEST['param'];
if (!$kirim&&!isset($sesi)){
		if($param=="5"){?>
			<script language="javascript">
			alert ("Anda telah logout");
			</script>
			<?php
		}
		elseif($param=="6"){?>
			<script language="javascript">
			alert ("Anda harus Login!!!");
			</script>
			<?php
		}
	include "depan.php";
}
elseif(!isset($sesi)){
		$username=$_POST["username"];
		$password=$_POST["password"];
		$qry="select*from login where username='$username' and password='$password'";
		$hasil=mysql_query($qry);
		$row=mysql_fetch_array($hasil);
		if($username==""||$password="")
			$cek=false;
		else
			$cek=true;
		if($row&&$cek){
				$_SESSION["username"]=$row[username];
				$_SESSION["password"]=$row[password];
				$_SESSION["sesiutama"]="1";
				include "admin/pertama.php";
		}
		else{
		$_SESSION["sesiutama"]="3";
		include "depan.php";
		}
}
else
include "admin/pertama.php";
?>
</body>
</html>
