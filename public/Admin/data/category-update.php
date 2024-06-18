<?php

require '../../../config/database.php';

if ( $_POST ) {

	$menu = $_POST;

	$query = "UPDATE categorie c
	SET c.nom = :nom
	WHERE c.id = " . $menu['categorie_id'];

	$statement = $pdo->prepare( $query );
	$statement->bindValue( ':name', $menu['categorie_nom'] );
	$statement->execute();

	// header("Refresh:0");
	header("Location: http://bioblog.localhost/admin/categories.php");

}
