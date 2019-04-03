
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="exo.css">
		<script src="js/jquery.min.js" ></script>
    	<script src="js/bootstrap.min.js" ></script>
		
		<title> Projet </title>
		
	</head>
	<body>

		<form action="form_inscription.php" method="POST" class="form-horizontal">
			<div id="main">
				<?php
					include('entete.php');
				?>
				<br/>

				<div class="row">
					<div class="col-lg-4 col-lg-offset-1">
						<legend>Formulaire De l'Etablissement</legend>

							<div class="form-group">
							   	<label for="etudiant"> Etudiant : </label>
							    <input type="text" class="form-control" name="txt_libelle_code_etudiant" id="etudiant"   required>
							     <span id="aidevacation"></span>
							</div>

							<div class="form-group">
							   	<label for="nom"> Nom : </label>
							    <input type="text" class="form-control" name="txt_libelle_nom" id="nom"   required>
							     <span id="aidevacation"></span>
							</div>

							<div class="form-group">
							   	<label for="prenom"> Prenom : </label>
							    <input type="text" class="form-control" name="txt_libelle_prenom" id="prenom"   required>
							     <span id="aidevacation"></span>
							</div>

							<div class="form-group">
							   	<label for="vacation"> Sexe : </label>
							    <input type="text" class="form-control" name="txt_libelle_sexe" id="vacation"   required>
							     <span id="aidevacation"></span>
							</div>

							<div class="form-group">
							   	<label for="date_naissance"> Date Naissance : </label>
							    <input type="text" class="form-control" name="txt_libelle_date" id="date_naissance"   required>
							     <span id="aidevacation"></span>
							</div>

							<div class="form-group">
							   	<label for="email"> Email : </label>
							    <input type="text" class="form-control" name="txt_libelle_email" id="email"   required>
							     <span id="aidevacation"></span>
							</div>

							<button class="btn btn-primary" value="Enregistrer" name="btn_enregistrer">Envoyer</button>		
							<button class="btn btn-primary" value="Modifier" name="btn_modifier"> Modifier </button>
							<button class="btn btn-primary" value="Supprimer" name="btn_supprimer"> Supprimer </button>
							<button class="btn btn-primary" value="Lister" name="btn_lire"> Lecture </button>
								
					</div>
				</div>
				
			</div>
		</form> </br>

		<div class="col-lg-8 col-lg-offset-1">

		<?php
			include('classe_inscription.php');
			if (isset($_POST['btn_enregistrer'])) {
				
				$code_etudiant = $_POST['txt_libelle_code_etudiant'];
				$nom = $_POST['txt_libelle_nom'];
				$prenom = $_POST['txt_libelle_prenom'];
				$sexe = $_POST['txt_libelle_sexe'];
				$date_naissance = $_POST['txt_libelle_date'];
				$email = $_POST['txt_libelle_email'];

				
				$classe = new Inscription();

				$classe->Insert_Inscription($code_etudiant,$nom,$prenom,$sexe,$date_naissance,$email);
				
			}
		?>	
	</div>

	<script src="../JavaScript/niveau.js"></script>

	</body>
</html>