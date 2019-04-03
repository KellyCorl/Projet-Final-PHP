<?php
	include('connexion.php');
	
	class Matiere
		{

		public function Insert_Matiere($matiere_code,$matiere_name){
			try{
				$connexion = new connexion();
				$conn = $connexion->connect();

				$req = $conn->prepare("INSERT INTO `matiere`(`Matiere_Code`, `Matiere_Name`) VALUES (:matiere_code,:matiere_name)");

				$req->bindParam(':matiere_code',$matiere_code);
				$req->bindParam(':matiere_name',$matiere_name);
		

				return $req->execute();
			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}
	}
?>