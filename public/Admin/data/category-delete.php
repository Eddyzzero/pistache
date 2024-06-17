<?php

require '../../../config/database.php';

if ( $_POST ) {

	$queryStarters="DELETE FROM starters
	WHERE id = " . $_POST['id'];

	$statement = $pdo->prepare( $queryStarters );
	$statement->execute();
//------------
	$queryMainCourses="DELETE FROM mainCourse
	WHERE id = " . $_POST['id'];

	$statement = $pdo->prepare( $queryMainCourses );
	$statement->execute();
//------------
    $querydessert="DELETE FROM dessert
	WHERE id = " . $_POST['id'];

	$statement = $pdo->prepare( $querydessert );
	$statement->execute();
//------------
    $querybeers="DELETE FROM beers
	WHERE id = " . $_POST['id'];

	$statement = $pdo->prepare($querybeers);
	$statement->execute();
//------------
    $querycocktails="DELETE FROM cocktails
	WHERE id = " . $_POST['id'];

	$statement = $pdo->prepare($querycocktails);
	$statement->execute();

	// header("Refresh:0");
	header("Location: http://bioblog.localhost/admin/categories.php");

}
