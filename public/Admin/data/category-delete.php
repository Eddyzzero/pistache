<?php

require '../../../config/database.php';

if ( $_POST ) {

	$query="DELETE FROM categories_posts
	WHERE categorie_id = " . $_POST['category_id'];

	$statement = $pdo->prepare( $query );
	$statement->execute();

	$query="DELETE FROM categories
	WHERE id = " . $_POST['category_id'];

	$statement = $pdo->prepare( $query );
	$statement->execute();

	// header("Refresh:0");
	header("Location: http://bioblog.localhost/admin/categories.php");

}
