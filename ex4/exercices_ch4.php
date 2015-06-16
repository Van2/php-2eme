<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    
        <title>Ajout utilisateur</title>
    </head>

        <body>

            <?php
                if ($_POST['envoyer']) {
		
                    $mail = $_POST['mail'];
		
                    $mailclean = filter_input($mail, FILTER_SANITIZE_EMAIL);
        
                    if (filter_input($mailclean, FILTER_VALIDATE_EMAIL)) {
                
                            echo "adresse valable";
                    } else {
                            echo "adresse non valable";}
                            echo "<br>";
        
        
		
                    $dbh = new mysqli( "localhost" , "cpnv", "cpnv1234", "ch4" );
		
                    if ( $dbh->connect_errno ) {
                            echo "Erreur de connexion" .$dbh->connect->error;}
		
		
                    $sql = "INSERT INTO liste_email VALUES (NULL, '" . $emailclean . "', NOW() )";
                    
                    if ( $resultat = $dbh->query( $sql ) ) {
                            echo $resultat->nom_rows . " ligne ";
                    } else {
                            echo "L'erreur : ", $dbh->error, " est survenue<br>";}
		
                    } else { 
                ?>



<form id="insert" name="insert" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"> 
<p>
                    adresse mail : <input type="mail" id="mail" name="mail" required="required">
</p>
<input type="submit" id="envoyer" name="envoyer" value="envoyer";

</form>
<?php
        }
?>

<?php
    mixed mysqli::query ( string $query [, int $resultmode = MYSQLI_STORE_RESULT ] )

?>

        </body> 
</html>
