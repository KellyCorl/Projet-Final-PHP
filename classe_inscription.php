<?php
	include('connexion.php');
	
	class Inscription
		{

		public function Insert_Inscription($code_etudiant,$nom,$prenom,$sexe,$date_naissance,$email){
			try{
				$connexion = new connexion();
				$conn = $connexion->connect();

				$req = $conn->prepare("INSERT INTO `etudiant`(`Code_Etudiant`, `Nom`, `Prenom`, `Sexe`, `Date_Naissance`, `Email`) VALUES (:code_etudiant,:nom,:prenom,:sexe,:date_naissance,:email)");
				$req->bindParam(':code_etudiant',$code_etudiant);
				$req->bindParam(':nom', $nom);
				$req->bindParam(':prenom', $prenom);
				$req->bindParam(':sexe', $sexe);
				$req->bindParam(':date_naissance', $date_naissance);
				$req->bindParam(':email', $email);

				return $req->execute();
			}
			catch (exception $e){

				die("Erreur d'insertion :". $e->getMessage());
			}
		}
	}
?>