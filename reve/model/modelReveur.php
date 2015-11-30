<?php
 require 'modelR.php'; 
 
	class ModelReveur {
		private $numReveur ;
		private $loginReveur ;
		private $mdpReveur ;
		private $dateNaissanceReveur;
		
		
		// un getter
		public function getnumReveur () {
			return $this->numReveur ;
		}
		public function getloginReveur() {
			return $this->loginReveur;
		}
		public function getmdpReveur() {
			return $this->mdpReveur;
		}
		public function getdateNaissanceReveur() {
			return $this->dateNaissanceReveur;
		}
		


		
		// un setter
		public function setnumReveur ( $numReveur2 ) {
			$this->numReveur = $numReveur2 ;
		}
		public function setloginReveur($loginReveur2) {
			$this->loginReveur = $loginReveur2;
		}
		public function setmdpReveur($mdpReveur2) {
			$this->mdpReveur = $mdpReveur2;
		}
		public function setdateNaissanceReveur($dateNaissanceReveur2) {
			$this->dateNaissanceReveur = $dateNaissanceReveur2;
		}
		
		
		// Un constructeur
		public function __construct ($i = NULL, $m = NULL,$c = NULL, $d = NULL) {
			if (!is_null($m) && !is_null($c) && !is_null($i) && !is_null($d)) {
				$this->numReveur = $m ;
				$this->loginReveur = $c ;
				$this->mdpReveur = $i ;
				$this->dateNaissanceReveur = $d;
				
			}
			$this->options = array();
		
		}

/*		
		// une methode d ' affichage .
		public function afficher() {
			echo ' <p > Reveur '. $this->mdpReveur . ' de numReveur '. $this->numReveur; //. ' . Les options sont : ' ;
		//	foreach ($this->options as $i => $options) {
		//		echo ($this->options[$i] . '. ');
		//	}
			echo '</p>';
		}
*/
		
		// une methode pour ajouter une option
		public function ajouterOption($NouvOption) {
			$this->options[] = $NouvOption;
		}
		
		//retourne toutes les Reveurs de la table
		public static function getAllReveur() {
			$rep = modelR::$pdo->query("SELECT * FROM Reveur;");
			$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelReveur');
			$tab_obj = $rep->fetchAll();
			return $tab_obj;
		}
		
		//Renvoie une Reveur avec l'imm donnée en param
		public static function getReveurBynum($numReveur) {
		  $sql = "SELECT * from Reveur WHERE mdpReveur=:login_var";
		  $req_prep = modelR::$pdo->prepare($sql);
		  $req_prep->bindParam(":login_var", $numReveur);
		  $req_prep->execute();

		  $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelReveur');
		  // Vérifier si $req_prep->rowCount() != 0
		  return $req_prep->fetch();
		}
		
		//Insere une Reveur dans la table
		function save() {
			$sql = "INSERT INTO Reveur
					VALUES (:numReveur, :loginReveur, :mdpReveur, :dateNaissanceReveur);";
			$req_prep = ModelR::$pdo->prepare($sql);
			$values = array(
			  "mdpReveur" => $this->mdpReveur,
			  "numReveur" => $this->numReveur,
			  "loginReveur" => $this->loginReveur,
			  "dateNaissanceReveur" => $this->dateNaissanceReveur,			  
			);
			$req_prep->execute($values);	
			return ($req_prep->rowcount() > 0); //dit si au moins une ligne a été affectée 

		}
		
		//delete un Reveur avec le num en param
		function deleteReveur($numReveur) {
			$sql = "DELETE FROM Reveur
					WHERE mdpReveur = :numReveur;";
			$req_prep = modelR::$pdo->prepare($sql);
			$values = array(
			  "numReveur" => $numReveur
			);
			$req_prep->execute($values);
			return ($req_prep->rowcount() > 0); //dit si au moins une ligne a été affectée 
		}
		
	}
?>