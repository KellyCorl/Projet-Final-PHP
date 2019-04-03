<?php
	include('connexion.php');
	
	class Vacation
		{
		
		public function Insert_Vacation($libelle_vacation){
			try{
				$connexion = new connexion();
				$conn = $connexion->connect();

				$req = $conn->prepare("INSERT INTO `vacation`(`Libelle_Vacation`) VALUES (:libelle_vacation)");
				$req->bindParam(':libelle_vacation', $libelle_vacation);

				return $req->execute();
			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}
	}
?>