<?php

require '../../../config/database.php';

if ( $_POST ) {

	$query = "INSERT INTO categorie (nom)
	VALUE (:nom)";

	$statement = $pdo->prepare( $query );
	$statement->bindValue( ':nom', $_POST['categorie_nom'] );
	$statement->execute();

	// rediriger après sauvegarde
	header("Location: /TFA_pistache/public/admin/categories.php");
	exit();
}
