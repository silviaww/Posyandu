<?php
	session_start();
	include "koneksi.php";
	$sqlag = mysqli_query($kon, "select * from anggota where email='$_SESSION[userag]' and password='$_SESSION[passag]'");
	$rag = mysqli_fetch_array($sqlag);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="stye.css" />
<title>E-POSYANDU </title>
</head>

<body>

<div class="container1">
  <div class="grid">
    <div class="dh12">
		Padang, Indonesia | 08994863369 | admin@eposyadu.com
	</div>
  </div>
</div>

<?php
	include "menu.php";
?>

<div class="container3">
  <div class="grid">
    <div class="dh12">
	  <form method="post" action="<?php echo "?p=produkterbaru"; ?>">
	    <input name="cari" type="text" placeholder="Ketik yang Akan Dicari" />
		<input type="submit" name="Submit" value="Cari" />
	  </form>
	</div>
  </div>
</div>

<?php
if($_GET["p"] == "anak"){
	include "anak.php";
}else if($_GET["p"] == "anakdetail"){
	include "anakdetail.php";
}else if($_GET["p"] == "ibuhamil"){
	include "ibuhamil.php";
}else if($_GET["p"] == "ibuhamildetail"){
	include "ibuhamildetail.php";
}else if($_GET["p"] == "keranjangedit"){
	include "keranjangedit.php";
}else if($_GET["p"] == "keranjangdel"){
	include "keranjangdel.php";
}else if($_GET["p"] == "register"){
	include "register.php";
}else if($_GET["p"] == "login"){
	include "login.php";
}else if($_GET["p"] == "logout"){
	include "logout.php";
}else{
	include "home.php";
}
?>

<div class="container6">
	<div class="grid">
		<div class="dh12">
			Copyright &copy; Silvia Wulandari 2023
		</div>
	</div>
</div>
	
</body>
</html>
