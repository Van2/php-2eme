<!doctype html>
<meta charset= "utf-8" >
<html>
	<head>
		<title>
			Jeu des chiffres
		</title>
		<?php 
			
			$nbr_utilisateur = $_POST['utilisateur'];
			$nbr_ordi = $_POST['devine'];
			
		?>
	</head>
	<body>
		<h1>resultat</h1>
			<p>
				<?php

				if ($nbr_utilisateur === $nbr_ordi) {

					echo 'Bien jouer';

				}else{

					echo '<a href="javascript:history.back()">faux</a>';

				}

				?>
				
				
			</p>

	</body>
</html> 
