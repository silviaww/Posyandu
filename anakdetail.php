<a href="<?php echo "?p=anak"; ?>"><button type="button" class='btn btn-add'>ANAK</button></a> &raquo; 
<button type="button" class='btn btn-dis'>Anak Detail</button>
  <?php
  $sqlp = mysqli_query($kon, "select * from anak where idanak='$_GET[id]'");
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
			<big>$rp[namaanak]</big>
			<hr>
			<b>Usia: $rp[usia]</b> 
			<hr>
			<b>Tinggi Badan: $rp[tb] cm</b>
			<hr>
			<b>Berat Badan : $rp[bb] Kg</b>
			<hr>
			<b>Perkembangan Gizi: $rp[perkembangangizi]</b> 
			<hr>
			<b>Nama Ibu: $rp[namaibu]</b> 
			<hr>
			<b>Nama Ayah: $rp[namaayah]</b> 
			<hr>
			<b>No Handphone: $rp[nohp]</b>
</b> 			
			<hr>
			
			<small><i>Dibuat pada $rp[tglanak] WIB 
			<br>Oleh $ra[namalengkap]</i></small>";
	echo "</div>";
	echo "<div class='kakicard'>";
	echo "<br><a href='?p=anakedit&id=$rp[idanak]'></a>
			<a href='?p=anakdel&id=$rp[idanak]'></a>";
	echo "</div>";
	echo "</div><br>";
	echo "</div>";
  ?>
