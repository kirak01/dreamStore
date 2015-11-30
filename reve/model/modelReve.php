<?php
 require 'modelR.php'; 
 
	class ModelReve {
		private $numReve ;
		private $nomReve ;
		private $catReve ;
		private $description;
		private $prix;
		
		// un getter
		public function getnumReve () {
			return $this->numReve ;
		}
		public function getnomReve() {
			return $this->nomReve;
		}
		public function getcatReve() {
			return $this->catReve;
		}
		public function getdescription() {
			return $this->description;
		}
		public function getprix() {
			return $this->prix;
		}


		
		// un setter
		public function setnumReve ( $numReve2 ) {
			$this->numReve = $numReve2 ;
		}
		public function setnomReve($nomReve2) {
			$this->nomReve = $nomReve2;
		}
		public function setcatReve($catReve2) {
			$this->catReve = $catReve2;
		}
		public function setdescription($description2) {
			$this->description = $description2;
		}
		public function setprix($prix2) {
			$this->prix = $prix2;
		}
		
		// Un constructeur
		public function __construct ($i = NULL, $m = NULL,$c = NULL, $d = NULL, $p = NULL) {
			if (!is_null($m) && !is_null($c) && !is_null($i) && !is_null($d) && !is_null($p)) {
				$this->numReve = $m ;
				$this->nomReve = $c ;
				$this->catReve = $i ;
				$this->description = $d;
				$this->prix = $p;
			}
			$this->options = array();
		
		}

/*		
		// une methode d ' affichage .
		public function afficher() {
			echo ' <p > reve '. $this->catReve . ' de numReve '. $this->numReve; //. ' . Les options sont : ' ;
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
		
		//retourne toutes les reves de la table
		public static function getAllReve() {
			$rep = modelR::$pdo->query("SELECT * FROM reve;");
			$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelReve');
			$tab_obj = $rep->fetchAll();
			return $tab_obj;
		}
		
		//Renvoie une reve avec l'imm donnée en param
		public static function getReveBynum($numReve) {
		  $sql = "SELECT * from reve WHERE catReve=:nom_var";
		  $req_prep = modelR::$pdo->prepare($sql);
		  $req_prep->bindParam(":nom_var", $numReve);
		  $req_prep->execute();

		  $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelReve');
		  // Vérifier si $req_prep->rowCount() != 0
		  return $req_prep->fetch();
		}
		
		//Insere une reve dans la table
		function save() {
			$sql = "INSERT INTO reve
					VALUES (:numReve, :nomReve, :catReve, :description, :prix);";
			$req_prep = ModelR::$pdo->prepare($sql);
			$values = array(
			  "catReve" => $this->catReve,
			  "numReve" => $this->numReve,
			  "nomReve" => $this->nomReve,
			  "description" => $this->description,
			  "prix" => $this->prix
			);
			$req_prep->execute($values);	
			return ($req_prep->rowcount() > 0); //dit si au moins une ligne a été affectée 

		}
		
		//delete un Reve avec le num en param
		function deleteReve($numReve) {
			$sql = "DELETE FROM reve
					WHERE catReve = :numReve;";
			$req_prep = modelR::$pdo->prepare($sql);
			$values = array(
			  "numReve" => $numReve
			);
			$req_prep->execute($values);
			return ($req_prep->rowcount() > 0); //dit si au moins une ligne a été affectée 
		}
		
	}
?>