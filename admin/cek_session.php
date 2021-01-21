<?php
session_start();
if(empty($_SESSION["username"]) OR empty($_SESSION["password"])){
$_SESSION["sesiutama"]="6";
header ("location:../index.php?param=6");
	die();//atau exit()
}
?>