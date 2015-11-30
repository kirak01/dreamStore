<?php
	// __DIR__ est une constante "magique" de PHP qui contient le chemin du dossier courant
	$ROOT = __DIR__;
	// DS contient le slash des chemins de fichiers, c'est-à-dire '/' sur Linux et '\' sur Windows
	$DS = DIRECTORY_SEPARATOR;
	if ( isset($_GET['controllermabite'])) {
		$controller=$_GET['controller'];
	} 
	else {
		$controller = "reveur";
	}
		switch($controller) {
			case "reve":
				if(!isset($_GET['action']))
				 {
					 $_GET['action'] ="readAll";
				 }
				require ("{$ROOT}{$DS}controller{$DS}controlleurReve.php");
				break;
			case "reveur":
				if(!isset($_GET['action']))
				 {
					 $_GET['action'] ="create";
				 }
				require ("{$ROOT}{$DS}controller{$DS}controlleurReveur.php");
				break;
			case "trajet":
				break;
		}
?>