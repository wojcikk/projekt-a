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
	<link rel="stylesheet" href="login.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>

<body id="body" style="background-color: #333333;">
		
	<div id="header" style="background-color: #1a1a1a; box-shadow: 1px 1px 1px 1px #1a1a1a;">
	Zaloguj się!
	</div>

	
	<div id="main" style="background-color: #1a1a1a; box-shadow: 1px 1px 1px 1px #1a1a1a;"> 
		
		
		<form action="logowanie.php" method="post">
			E-mail: </br>
			<input type="text" name="email" style="background-color: #1a1a1a;color: white; font-family: 'Russo One', sans-serif;"/> </br>
			Hasło: </br>
			<input type="password" name="haslo" style="background-color: #1a1a1a; color: white; font-family: 'Russo One', sans-serif;"/> </br>
			<input type="submit" value="Zaloguj" style="background-color: #1a1a1a; color: white; font-family: 'Russo One', sans-serif; margin-top: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 8px; padding-right: 8px;"/>
		</form>
		
	
	<?php
		if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
	?>

	
	</div>

</body>
</html>