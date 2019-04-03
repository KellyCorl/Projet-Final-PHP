<?php
	include ('connexion.php');

	class Domaine
	{
		public function Insert_Domaine($libelle_domaine){
			try{

				$connexion = new connexion();
				$conn = $connexion->connect();

				$requete = $conn->prepare("INSERT INTO `Domaine`(`Libelle_Domaine`) VALUES (:libelle_domaine)") ;
				$requete->bindParam(':libelle_domaine', $libelle_domaine);
		

				return $requete->execute();
			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}

		public function Select_All(){

			try{
				$connexion = new connexion();
				$conn = $connexion->connect();

				$req = $conn->prepare("SELECT * FROM 'domaine' ");
				$req->execute();

				return $req->fetchAll();  
			}
			catch (exception $e){

				die("Erreur de selection :". $e->getMessage());
			}
		}


		public function Select_by_code_domaine($code_domaine){

			try{
				$connexion = new connexion();
				$conn = $connexion->connect();

				$req = $conn->prepare("SELECT * FROM `domaine` WHERE `Code_Domaine` = :code_domaine");
				$req->bindParam(':code_domaine',$code_domaine);
				$req->execute();

				return $req->fetchAll();
			}
			catch (exception $e){

				die("Erreur de selection :". $e->getMessage());

			}
		}
	}
?>