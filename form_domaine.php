
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


		<form action="form_domaine.php" method="POST" class="form-horizontal">
			<div id="main">
				<?php
					include('entete.php');
				?>
				<br/>

				<div class="row">
					<div class="col-lg-4 col-lg-offset-1">
						<legend>Formulaire De l'Etablissement</legend>

							<div class="form-group col-lg-4" >
							   	<label for="domaine"> Domaine : </label>
							    <input type="text" class="form-control" name="txt_libelle_domaine" id="domaine" required>
							     <span id="aidedomaine"></span>
							</div>

						

							<button class="btn btn-primary" value="Enregistrer" name="btn_enregistrer">Envoyer</button>		
							<button class="btn btn-primary" value="Modifier" name="btn_modifier"> Modifier </button>
							<button class="btn btn-primary" value="Supprimer" name="btn_supprimer"> Supprimer </button>
							<button class="btn btn-primary" value="Lister" name="btn_lire"> Lecture </button>
								
					</div>
				</div>
				
			</div>
		</form> </br>

		<div class="col-lg-4 col-lg-offset-2">
		<?php
			include('classe_domaine.php');
			if (isset($_POST['btn_enregistrer'])) {

				$domaine = $_POST['txt_libelle_domaine'];

				$classe = new Domaine();
		
				$classe ->Insert_Domaine($domaine);
				
			}

			if(isset($_POST['btn_lire'])){

				$domaine = new Domaine(); 
				$list_domaine = $domaine->Select_All();

				echo ' <table class="table table-bordered col-lg-8 ">';
				echo "<tr>
						<th> Domaine </th>
						<th> </th>
					</tr>";
				 
				$i=0;
				while ( $i<count($list_domaine)) {
				 	
				 	echo "<tr><td>". $list_domaine[$i]["Libelle_Domaine"]. "</td>";
					echo '<td><a href="form_classe.php?id='. $list_domaine[$i]["Code_Domaine"].'">Selectionner</a>';
					
					$i++;
				 }			
				
				echo "</table>";	
				         
			}
		?>	
	</div>

	<script src="../JavaScript/domaine.js"></script>

	</body>
</html>