<?php
	include('connexion.php');
	
	class Semestre
		{
	
		public function Insert_Semestre($libelle_semestre){
			try{
				$connexion = new connexion();
				$conn = $connexion->connect();

				$req = $conn->prepare("INSERT INTO `semestre1`(`Libelle_Semestre`) VALUES (:libelle_semestre)");
				$req->bindParam(':libelle_semestre', $libelle_semestre);

				return $req->execute();
			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}
	}
?>