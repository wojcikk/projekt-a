<?php
	session_start();
	
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
		header("Location: main.php");
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Logowanie do serwisu! </title>
</head>

<body>
	
	<div> 
		
		<form action="logowanie.php" method="post">
			E-mail: </br>
			<input type="text" name="email"/> </br>
			Hasło: </br>
			<input type="password" name="haslo"/> </br>
			<input type="submit" value="Zaloguj"/>
		</form>
	
	<?php
		if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
	?>

	
	</div>

</body>
</html>