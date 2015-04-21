<?php 
			
			$nbr_utilisateur = $_POST['utilisateur'];
			$nbr_ordi = $_POST['devine'];
			
?>
<!doctype html>
<html>
	<head>
        <meta charset="utf-8">
		<title>
			Jeu des chiffres
		</title>
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
