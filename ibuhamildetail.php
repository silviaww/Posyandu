<a href="<?php echo "?p=ibuhamil"; ?>"><button type="button" class='btn btn-add'>IBU HAMIL</button></a> &raquo; 
<button type="button" class='btn btn-dis'>Ibu Hamil Detail</button>
  <?php
  $sqlp = mysqli_query($kon, "select * from ibuhamil where idibu='$_GET[id]'");
  $rp = mysqli_fetch_array($sqlp);
  $sqlk = mysqli_query($kon, "select * from kategori where idkat='$rp[idkat]'");
  $rk = mysqli_fetch_array($sqlk);
  
	
  	echo "<div class='dh12'>";
	echo "<div class='card'>";
	echo "<div class='kepalacard'><small>Kategori :</small> $rk[namakat]</div>";
	echo "<div class='isicard' style='text-align:center;'>";
    echo "<br>";
  	echo "<img src='foto/$rp[foto]' border='1' width='140px'>
		  
			<hr>
			<big>$rp[namaibu]</big>
			<hr>
			<b>Usia Kehamilan: $rp[usiakehamilan]</b> 
			<hr>
			<b>Nama Suami: $rp[namasuami]</b>
			<hr>
			<b>Tanggal Periksa Pertama: $rp[tglperiksapertama]</b>
			<hr>
			<b>Status Kehamilan: $rp[statuskehamilan]</b>
			<hr>
			
			<small><i>Dibuat pada $rp[tglibu] WIB 
			<br>Oleh $ra[namalengkap]</i></small>";
	echo "</div>";
	echo "<div class='kakicard'>";
	echo "<br><a href='?p=ibuhamiledit&id=$rp[idibu]'></a>
			<a href='?p=ibuhamildel&id=$rp[idibu]'></a>";
	echo "</div>";
	echo "</div><br>";
	echo "</div>";
  ?>
