<?php
	include('connexion.php');
	
	class Niveau
		{
			// -----  Table Niveau ----------
		public function Insert_Niveau($libelle_niveau){
			try{
				$connexion = new connexion();
				$conn = $connexion->connect();

				$req = $conn->prepare("INSERT INTO `niveau`(`Libelle_Niveau`) VALUES (:libelle_niveau)");
				$req->bindParam(':libelle_niveau', $libelle_niveau);
		

				return $req->execute();
			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}
	}
?>