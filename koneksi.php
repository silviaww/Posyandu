<?php
	$host = "127.0.0.1"; //IP server: boleh diisikan localhost atau 127.0.0.1
	$user = "root";		 //Username untuk masuk ke MySQL
	$pass = "";			 //Password untuk masuk ke MySQL
	$db	  = "pusyanduu";	 //Nama database yang akan diakses
	
	$kon  = mysqli_connect($host, $user, $pass, $db);
	
	// Cuma buat ngetes doank
	 /*
	if($kon){
		echo "Terkoneksi dengan MySQL Server <br>";
		echo "Database $db bisa diakses";
		}else{
			echo "Gagal Koneksi Bos";
		}
	*/
?>