<?php

include ("{$ROOT}{$DS}model{$DS}modelReve.php"); // chargement du modèle
$action = $_GET['action'];          // recupère l'action passée dans l'URL


switch ($action) {
    case "readAll":
        $tab_v = modelReve::getAllReve();     //appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}reves{$DS}viewAllReve.php");  //"redirige" vers la vue
        break;
    case "read":
		$tab_Reve = $_GET['numReve'];
        $v = modelReve::getRevebynum(numReve);     //appel au modèle pour gerer la BD
        if($v==null){
			require("{$ROOT}{$DS}view{$DS}reves{$DS}viewErrorReve.php");
		}
		else{
			require ("{$ROOT}{$DS}view{$DS}reves{$DS}viewreves.php");  //"redirige" vers la vue
        }
        break;
    case "create":
		require ("{$ROOT}{$DS}view{$DS}reve{$DS}viewCreateReve.php");
		break;
    case "created":	
		$numReve=$_POST["numReve"];
		$catReve=$_POST["catReve"];
		$nomReve=$_POST["nomReve"];
		$prix=$_POST["prix"];
		$description=$_POST["description"];
		$reve=new modelReve($numReve,$nomReve, $catReve, $prix, $description);
		if($reve->save())
			require ("{$ROOT}{$DS}view{$DS}reves{$DS}viewCreatedReve.php");
		else
			require("{$ROOT}{$DS}view{$DS}reves{$DS}viewErrorReve.php");
		break;
	case "delete":
		$numReve = $_GET['numReve'];
		if (modelReve::deleteReve($cnumReve)) //BIEN EFFACÉ
			require("{$ROOT}{$DS}view{$DS}reves{$DS}viewDeleteReve.php");		
		else 
			require("{$ROOT}{$DS}view{$DS}reves{$DS}viewErrorReve.php");
		break;
}
?>