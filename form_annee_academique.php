
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

		<form action="form_annee_academique.php" method="POST" class="form-horizontal">
			<div id="main">
				<?php
					include('entete.php');
				?>
				<br/>

				<div class="row">
					<div class="col-lg-offset-2 col-lg-6 ">
		
				            <label>Ann&eacute;e Academique</label>
				            <input type="text" name="annee_1" placeholder="1950" /> -
				            <input type="text" name="annee_2" placeholder="1951" /><br />
				            
				            <label>Actif</label>
				            <select name="isactif">
					            <option value="1">True</option>
				               	<option value="0">False</option>
				            </select><br />


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
			include('classe_annee_academique.php');

			if(isset($_POST['btn_enregistrer']))
	       {
	            $annee1 = $_POST['annee_1'];
	            $annee2 = $_POST['annee_2'];
	            
	            $annee_academique = $annee1.'-'.$annee2;            
	            $isactif = $_POST['isactif'];
	            
	            
	            $cls_annee = new Annee_Academique();
	            
	            $cls_annee->Insert_Annee($annee_academique,$isactif);
	        
	       }
		?>	
	</div>

	<script src="../JavaScript/niveau.js"></script>

	</body>
</html>