<?php
session_start();
session_unset();
session_destroy();
$_SESSION["sesiutama"]="5";
header ("location:../index.php?param=5");
?>