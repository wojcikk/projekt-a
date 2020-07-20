<?php
	session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Strona główna</title>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	

</head>

<body id="body" onload="odliczanie(); zmienslajd();" >

	<div id="zegar"></div> 
		
	<script>
	function odliczanie()
	{
		var dzisiaj = new Date();
		
		var dzien = dzisiaj.getDate();
		var miesiac = dzisiaj.getMonth()+1;
		var rok = dzisiaj.getFullYear();
		
		var godzina = dzisiaj.getHours();
		if (godzina<10) godzina = "0"+godzina;
		
		var minuta = dzisiaj.getMinutes();
		if (minuta<10) minuta = "0"+minuta;
		
		var sekunda = dzisiaj.getSeconds();
		if (sekunda<10) sekunda = "0"+sekunda;
		
		document.getElementById("zegar").innerHTML = 
		 dzien+"/"+miesiac+"/"+rok+ "    " +godzina+":"+minuta+":"+sekunda;
		 
		 setTimeout("odliczanie()",1000);	
	}
	
	var numer = Math.floor(Math.random()*4)+1;
		
	function zmienslajd()
	{
		numer++; if(numer>4) numer = 1;
		
		var plik = "<img src=\"slide"+ numer +".png\"/>";
		
		document.getElementById("slider").innerHTML = plik;
				
		setTimeout("zmienslajd()", 5000);
		
	}
		
	</script>
	
	<div id="nav">
		<?php
		echo "Witaj ".$_SESSION['imie'].'!';
		?>
	
	</div>
	
	<div id="account">
		<a href="account.php"> Moje konto</a>
	</div>
	
	<div id="logout">
		<a href="logout.php"> Wyloguj się!</a>
	</div>
	
	<div id="header">
		<div id="head1">
			dolor sit amet
		</div>
			
		<div id="head2">
			consectetur adipiscing elit
		</div>
		
		<div id="head3">
			integer in vestibulum quam
		</div>
	</div>
	
	<div id="slider" onload="zmienslajd();">
	
	</div>
	
	<div id="text1">
		
	</div>
	
	<div id="text2">
	
	</div>
	
	<div id="text3">
	
	</div>
	

	
	
	

</body>
</html>