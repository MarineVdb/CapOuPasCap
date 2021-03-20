<?php 
	$serverBDD = 'localhost';
	$userBDD = 'root';
	$passBDD = '';
	$dbBDD = 'copc';
	
	 //On essaie de se connecter
	try{
		$bdd = new PDO("mysql:host=$serverBDD;dbname=$dbBDD", $userBDD, $passBDD);
		//On définit le mode d'erreur de PDO sur Exception
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connexion reussie";
	}	
	/*On capture les exceptions si une exception est lancée et on affiche
	 *les informations relatives à celle-ci*/
	catch(PDOException $e){
	  echo "Erreur : " . $e->getMessage();
	}
?>
