<?php
	require_once ('connexion.php');

	class Mention
	{
		public function Insert_Mention($code_domaine,$libelle_mention){
			try{

				$connexion = new connexion();
				$conn = $connexion->connect();

				$requete = $conn->prepare("INSERT INTO `mention`(`Code_Domaine`, `Libelle_Mention`) VALUES (:code_domaine,:libelle_mention)") ;
				$requete->bindParam(':code_domaine', $code_domaine);
				$requete->bindParam(':libelle_mention', $libelle_mention);
		

				return $requete->execute();
			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}


		public function Select(){
			try{

				$connexion = new connexion();
				$conn = $connexion->connect();

				$requete = $conn->prepare("SELECT `domaine`.`Libelle_Domaine`, `mention`.`Libelle_Mention`, `mention`.`Code_Mention`, `mention`.`Code_Domaine`FROM `domaine`
   					 LEFT JOIN `mention` ON `mention`.`Code_Domaine` = `domaine`.`Code_Domaine`") ;	

				 $requete->execute();

				 return $requete->fetchAll();

			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}


		public function Select_by_Code_Mention($code_mention){
			try{

				$connexion = new connexion();
				$conn = $connexion->connect();

				$requete = $conn->prepare("SELECT `domaine`.`Libelle_Domaine`, `mention`.`Libelle_Mention`, `mention`.`Code_Mention`, `mention`.`Code_Domaine` FROM `mention`  
					LEFT JOIN `domaine` ON `mention`.`Code_Domaine` = `domaine`.`Code_Domaine` 
					WHERE (`mention`.`Code_Mention` =:code_mention) ") ;	

					$requete->bindParam(':code_mention', $code_mention);

					$requete->execute();

				 	return $requete->fetchAll();

			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}


		public function Select_by_Code_Domaine($code_domaine){
			try{

				$connexion = new connexion();
				$conn = $connexion->connect();

				$requete = $conn->prepare("SELECT `domaine`.`Libelle_Domaine`, `mention`.`Libelle_Mention`, `mention`.`Code_Mention`, `mention`.`Code_Domaine`FROM `domaine`
   					LEFT JOIN `mention` ON `mention`.`Code_Domaine` = `domaine`.`Code_Domaine`
   					WHERE (`mention`.`Code_Domaine` =:code_domaine) ") ;

					$requete->bindParam(':code_domaine', $code_domaine);

				 	$requete->execute();

				return $requete->fetchAll();

			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}


		public function Select_by_Libbele_Mention($libelle_mention){
			try{

				$connexion = new connexion();
				$conn = $connexion->connect();

				$requete = $conn->prepare("SELECT `domaine`.`Libelle_Domaine`, `mention`.`Libelle_Mention`, `mention`.`Code_Mention`, `mention`.`Code_Domaine`FROM `domaine`
   					LEFT JOIN `mention` ON `mention`.`Code_Domaine` = `domaine`.`Code_Domaine`
   					WHERE (`mention`.`Libelle_Mention` =:libelle_mention) ") ;

					$requete->bindParam(':libelle_mention', $libelle_mention);


				 $requete->execute();

				 return $requete->fetchAll();

			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}
	}
?>