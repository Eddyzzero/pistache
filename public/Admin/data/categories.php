<?php

require_once 'include/has_session.php';
require_once '../../config/database.php';

$page = "categorie";

$query = "SELECT c.id, c.nom
FROM categorie c";

$statement = $pdo->prepare( $query );
$statement->execute();
$categories = $statement->fetchAll();

// $pdo = null;
