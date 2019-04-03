<?php

	class connexion

	{
		public function connect(){
			
			try{
				$conn= new PDO("mysql:host=localhost; dbname=base de donnees; charset=utf8;", "root", "");
				return $conn;
			}

			catch(exception $e){
				die("erreur de connexion :" . $e->getMessage());
			}
		}
	}
?>