<div class="card">
<div class="kepalacard">Register Anggota</div>
<div class="isicard" style="text-align:center;">
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <input name="email" type="text" id="email" placeholder="Email Angota" />
  <input name="password" type="text" id="password" placeholder="Password Login" />
  <input name="nama" type="text" id="nama" placeholder="Nama Lengkap" /><p>
  <input name="jk" type="radio" value="L" />Laki-Laki
  <input name="jk" type="radio" value="P" />Perempuan<p>
  <input name="tgllahir" type="date" id="tgllahir" placeholder="Tanggal Lahir" />
  <textarea name="alamat" id="alamat" placeholder="Alamat Lengkap"></textarea>
  <input name="nohp" type="text" id="nohp" placeholder="No. Handphone" />
  <input name="foto" type="file" id="foto" /><p>
  <input name="register" type="submit" id="register" value="DAFTAR SEBAGAI ANGGOTA" />
</form>

<?php
if($_POST["register"]){
  if(!empty($_POST["email"]) and !empty($_POST["password"]) and !empty($_POST["nama"]) and !empty($_POST["jk"]) and !empty($_POST["tgllahir"]) and !empty($_POST["alamat"]) and !empty($_POST["nohp"])){
  $nmfoto  = $_FILES["foto"]["name"];
  $lokfoto = $_FILES["foto"]["tmp_name"];
  if(!empty($lokfoto)){
    move_uploaded_file($lokfoto, "foto/$nmfoto");
	$foto = ", '$nmfoto'";
  }else{
    $foto = "";
  }
  
  $sqlag = mysqli_query($kon, "insert into anggota (email, password, nama, jk, tgllahir, alamat, nohp, foto, tgldaftar) values ('$_POST[email]', '$_POST[password]', '$_POST[nama]', '$_POST[jk]', '$_POST[tgllahir]', '$_POST[alamat]', '$_POST[nohp]' $foto, NOW())");
  
  if($sqlag){
    echo "Register Berhasil";
  }else{
    echo "Register Gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=login'>";
  }else{
    echo "Data harus isi dengan lengkap";
  }
}
?>

</div>
</div>
