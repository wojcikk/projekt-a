<?php
	
	session_start();
	
	require_once "connect.php";
	
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	
	if($polaczenie->connect_errno!=0)
	{
		echo "Error".$polaczenie->connect_errno;
	}
	else
	{		
		$email = $_POST['email'];
		$haslo = $_POST['haslo'];
	
		$sql = "SELECT * FROM uzytkownicy WHERE email='$email' AND haslo='$haslo'";
		
		if($rezultat = @$polaczenie->query($sql))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['email'] = $wiersz['email'];
				$_SESSION['login'] = $wiersz['login'];
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['imie'] = $wiersz['imie'];
				$_SESSION['nazwisko'] = $wiersz['nazwisko'];
				$_SESSION['data urodzenia'] = $wiersz['data urodzenia'];
				
				unset($_SESSION['blad']);
				
				$rezultat->close();
				
				header('Location: main.php');
			}
			else
			{
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: login.php');
			}
			
		}
	
		$polaczenie->close();
	}
	



?>