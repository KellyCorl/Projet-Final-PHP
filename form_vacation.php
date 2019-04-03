
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

		<form action="form_vacation.php" method="POST" class="form-horizontal">
			<div id="main">
				<?php
					include('entete.php');
				?>
				<br/>

				<div class="row">
					<div class="col-lg-4 col-lg-offset-1">
						<legend>Formulaire De l'Etablissement</legend>

							<div class="form-group">
							   	<label for="vacation"> Vacation : </label>
							    <input type="text" class="form-control" name="txt_libelle_vacation" id="vacation"   required>
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
			include('classe_vacation.php');
			if (isset($_POST['btn_enregistrer'])) {
				
				$vacation = $_POST['txt_libelle_vacation'];
				
				$classe = new Vacation();

				$classe->Insert_Vacation($vacation);
				
			}
		?>	
	</div>

	<script src="../JavaScript/niveau.js"></script>

	</body>
</html>