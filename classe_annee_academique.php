<?php
	include('connexion.php');
	
	class Annee_Academique
		{

		public function Insert_Annee($annee_academique,$is_actif){
			try{
				$connexion = new connexion();
				$conn = $connexion->connect();

				$req = $conn->prepare("INSERT INTO `annee_academique`(`Annee_Academique`, `Is_Actif`) VALUES (:annee_academique,:is_actif)");
				$req->bindParam(':annee_academique', $annee_academique);
				$req->bindParam(':is_actif', $is_actif);


				return $req->execute();
			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}
	}
?>