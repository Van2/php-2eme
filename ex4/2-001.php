
<!doctype html>
<meta charset= "utf-8" >
<html>
	<head>
		<title>
			Inscrivez-vous
		</title>
	</head>
	<body>
		<form action="ajout_utilisateur_post.php"  method="post">
			<fieldset>
				<label>login :<br/>
					<input type="text" name="login"/>
				</label><br/>
				<label>Password<br/>
					<input type="password" name="password"/>
				</label><br/>

				<p>majorité</p>
				<select name="majeur">
				  <option value="oui">oui</option>
				  <option value="non">non</option>
				</select>
				<p>age</p>
				<input type="text" name="age">
				<p>sexe</p>
				<input type="radio" name="genre" value="Homme"/> Homme
				<input type="radio" name="genre" value="Femme"/> Femme
				<p>options</p>
				<input type="checkbox" name="newslettre" value="newslettre" /> newslettre
				<input type="checkbox" name="membredesoutien" value="membredesoutien" /> membredesoutien
				<br>
				<p>présentation</p>
				<textarea name="presentation">

				</textarea><br>
				<INPUT TYPE="submit" NAME="nom" VALUE=" Envoyer " />


			</fieldset>
		</form>
	</body>
</html> 
