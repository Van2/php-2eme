
<!doctype html>
<meta charset= "utf-8" >
<html>
    
	<head>
		<title>
			Inscrivez-vous
		</title>
		<?php 
			
			$nbr_max = 5;
			$nbr_min = 1;
			$random = rand($nbr_min, $nbr_max);
			
			
		?>
	</head>
	<body>
		<form action="resultat.php"  method="post">
			<fieldset>
				<p>devinez un nombre entre 10 et 50</p>
				<input type="text" name="utilisateur" />

				<input type="hidden" name="devine" value="<?= $random ?>">

				<input type="submit" name="envoyer">

			</fieldset>
		</form>

	</body>
</html> 
