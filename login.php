<div id="signin">
<fieldset>
<img src="foto/av.jpg" width="130px">
<form name="form1" method="post" action="">
  <h3>ANGGOTA</h3>
  <p>Silahkan Login</p>
  <input name="email" type="text" id="email" placeholder="Email">
  <input name="password" type="password" id="password" placeholder="Password">
  <input name="login" type="submit" id="login" value="LOGIN ANGGOTA">
  <p>
  Belum terdaftar? <a href="<?php echo "?p=register"; ?>">Register</a> disini
</form>

<?php
if($_POST["login"]){
	$sqlag= mysqli_query($kon, "select * from anggota where email='$_POST[email]' and password='$_POST[password]'");
	$rag = mysqli_fetch_array($sqlag);
	$row = mysqli_num_rows($sqlag);
	if($row > 0){
		session_start();
		$_SESSION["userag"] = $rag["email"];
		$_SESSION["passag"] = $rag["password"];
		echo "<div align='center'>Login Berhasil</div>";
	}else{
		echo "<div align='center'>Login Gagal</div>";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=home'>";
}

?>
</fieldset>
</div>


