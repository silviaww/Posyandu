<div class="container2">
  <div class="grid">
    <div class="topnav" id="myTopnav">
	<div class="dh6">
	  <a href="<?php echo "?p=home"; ?>">E-POSYANDU</a>
	  <a href="javascript:void(0);" class="icon" style="font-size:14px;" onclick="myFunction">&#9776;</a>
	  <?php
	  if($_GET["p"] == "home"){
	    $pilih = "class='pilih'";
	  }else{
	    $pilih = "";
	  }
	  echo "<a href='?p=home' $pilih>Home</a>";
	  
	  while($rk = mysqli_fetch_array($sqlk)){
	    if($_GET["idk"] == $rk["idkat"]){
		  $pil = "class='pilih'";
		}else{
		  $pil = "";
		}
		echo "<a href='?p=home&idk=$rk[idkat]' $pil>$rk[namakat]</a>";
	  }
	  ?>
	</div>
	<div class="dh6">
	  <?php
	  if(!empty($_SESSION["userag"]) and !empty($_SESSION["passag"])){
	    echo "<a><b>$rag[nama]</b></a>";
		echo "<a href='?p=anak&idag=$rag[idanak]'>Anak</a>";
		echo "<a href='?p=ibuhamil&idag=$rag[idibu]'>Ibu Hamil</a>";
		echo "<a href='?p=logout'>Logout</a>";
	  }else{
	    echo "<a href='?p=register'>Register</a>";
		echo "<a href='?p=login'>Login</a>";
	  }
	  ?>
	</div>
	</div>
	<script>
	  function myFunction(){
	    var x = document.getElementById("myTopnav");
		if(x.className === "topnav"){
		  x.className += " responsive";
		}else{
		  x.className = "topnav";
		}
	  }
	</script>
  </div>
</div>