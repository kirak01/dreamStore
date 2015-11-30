<?php

include ("{$ROOT}{$DS}model{$DS}modelReveur.php"); // chargement du modèle
$action = $_GET['action'];          // recupère l'action passée dans l'URL


switch ($action) {
    case "readAll":
        $tab_v = modelreveur::getAllReveur();     //appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}reveurs{$DS}viewAllReveur.php");  //"redirige" vers la vue
        break;
    case "read":
		$tab_reveur = $_GET['numReveur'];
        $v = modelReveur::getReveurBynum($tab_reveur);     //appel au modèle pour gerer la BD
        if($v==null){
			require("{$ROOT}{$DS}view{$DS}reveurs{$DS}viewErrorReveur.php");
		}
		else{
			require ("{$ROOT}{$DS}view{$DS}reveurs{$DS}viewReveurs.php");  //"redirige" vers la vue
        }
        break;
    case "create":
		require ("{$ROOT}{$DS}view{$DS}reveur{$DS}viewCreateReveur.php");
		break;
    case "created":	
		$numReveur=$_POST["numReveur"];
		$loginReveur=$_POST["loginReveur"];
		$mdpReveur=$_POST["mdpReveur"];
		$dateNaissanceReveur=$_POST["dateNaissanceReveur"];
		$reveur=new modelreveur($numReveur,$loginReveur, $mdpReveur, $dateNaissanceReveur);
		if($reveur->save())
			require ("{$ROOT}{$DS}view{$DS}reveurs{$DS}viewCreatedReveur.php");
		else
			require("{$ROOT}{$DS}view{$DS}reveurs{$DS}viewErrorReveur.php");
		break;
	case "delete":
		$numreveur = $_GET['numReveur'];
		if (modelreveur::deletereveur($numreveur)) //BIEN EFFACÉ
			require("{$ROOT}{$DS}view{$DS}reveurs{$DS}viewDeleteReveur.php");		
		else 
			require("{$ROOT}{$DS}view{$DS}reveurs{$DS}viewErrorReveur.php");
		break;
}
?>