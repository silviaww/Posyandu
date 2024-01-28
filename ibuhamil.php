<button type="button" class="btn btn-dis">IBU HAMIL</button> &raquo;

<br>
<?php
$batas = 4;
$halaman = $_GET["pg"];
if(empty($halaman)){
 $posisi = 0;
 $halaman = 1;
}else{
 $posisi = ($halaman - 1) * $batas;
}
$sqlp = mysqli_query($kon, "select * from ibuhamil order by tglibu desc limit $posisi, $batas");
while($rp = mysqli_fetch_array($sqlp)){
 $sqlk = mysqli_query($kon, "select * from kategori where idkat='$rp[idkat]'");
 $rk = mysqli_fetch_array($sqlk);
 $bb = number_format($rp["bb"]);
 $tb = number_format($rp["tb"]);
 $nm = substr($rp["namaibu"], 0, 25);
 
 
 
 
 echo "<div class='dh3'>";
 echo "<div class='card'>";
 echo "<div class='kepalacard'><small>Kategori :</small> $rk[namakat]</div>";
 echo "<div class='isicard' style='text-align:center;'>";
 echo "<br>";
 echo "<img src='foto/$rp[foto]' border='1' width='100px'>
 
    <hr>
    <big>$nm...</big>
    <hr>
    <b>Nama Suami: $rp[namasuami]</b>
    <hr>
    <b>Status Kehamilan: $rp[statuskehamilan]</b>
    <hr>
    <small><i>Dibuat pada $rp[tglibu] WIB
    <br>oleh $ra[namalengkap]</i></small>";
 echo "</div>";
 echo "<div class='kakicard'>";
 echo "<br><a href='?p=ibuhamildetail&id=$rp[idibu]'><button type='button' class='btn btn-add'>Lihat Detail</button></a>
  <a href='?p=ibuhamiledit&id=$rp[idibu]'></a>
  <a href='?p=ibuhamildel&id=$rp[idibu]'></a>";
 echo "</div>";
 echo "</div><br>";
 echo "</div>";
}

echo "<div class='dh12' align='right'>";
echo "Halaman ";
$sqlhal = mysqli_query($kon, "select * from ibuhamil");
$jmldata = mysqli_num_rows($sqlhal);
$jmlhal = ceil($jmldata / $batas);

for($i=1; $i<=$jmlhal; $i++){
 if($i == $halaman){
  echo "<span class='kotak'><b>$i</b></span>";
 }
}

if($halaman > 1){
 $prev = $halaman -1;
 echo "<span class='kotak'><a href='?p=ibuhamil&pg=$prev'>&laquo; Prev</a></span>";
}else{
 echo "<span class='kotak'>&laquo; Prev</span>";
}

if($halaman < $jmlhal){
 $next = $halaman + 1;
 echo "<span class='kotak'><a href='?p=ibuhamil&pg=$next'>Next &raquo;</a></span>";
}else{
 echo "<span class='kotak'>Next &raquo;</span>";
}

echo " Total Ibu Hamil <span class='kotak'><b>$jmldata</b></span>";
echo "<p></div>";
echo "<p>&nbsp;</p>";
?>