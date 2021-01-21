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
</head>

<body>
<div id="wrapper">

  <header>
    	<div id="logo"><a href="index.php"><img src="http://www.pngall.com/wp-content/uploads/2016/04/WhatsApp-Free-PNG-Image.png" width="50" height="50"></a></div>
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
    	<div class="slider"><img src="images/awal2.jpg" width="324" height="212"></div>
<div class="anggota">
          <h3>Login Administrator</h3>
          <form name="form2" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<?php
				if($sesiutama=="3"){
			?> 
            <p>
			  <label >Username atau password salah </label>
              <label >Username</label>
              <input type="text" name="username" id="email" placeholder="username" title="admin">
            </p>
            <p>
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="password" title="123">
            </p>
            <p>
              <input type="submit" name="submit2" id="submit2" value="Masuk">
              <input type="reset" name="submit3" id="submit3" value="Reset">
            </p>
			<?php
			}else{
			?>
			<p>
              <label >Username</label>
              <input type="text" name="username" id="email" placeholder="username" title="admin">
            </p>
            <p>
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="password" title="123">
            </p>
            <p>
              <input type="submit" name="submit2" id="submit2" value="Masuk">
              <input type="reset" name="submit3" id="submit3" value="Reset">
            </p>
			<?php
			}
			?>
            <!--<p><a href="lohin.php?ref=lupa">Lupa password?</a> | <a href="daftar.php">Daftar jadi anggota</a></p>-->
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
