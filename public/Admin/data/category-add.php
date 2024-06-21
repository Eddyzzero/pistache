<?php

require '../../../config/database.php';

if ( $_POST ) {

	$query = "INSERT INTO categorie (nom)
	VALUE (:nom)";

	$statement = $pdo->prepare( $query );
	$statement->bindValue( ':nom', $_POST['category_name'] );
	$statement->execute();

	// // header("Refresh:0");
	header("Location: http://localhost/TFA_pistache/public/admin/categories.php");

}
