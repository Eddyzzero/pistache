<?php

require_once 'include/has_session.php';
require_once '../../config/database.php';

$page = "users";

// récuperer les utilisateurs dans la DB
$query = "SELECT u.id, u.username, u.mail
FROM users u";

$statement = $pdo->prepare( $query );
$statement->execute();
$users = $statement->fetchAll();

// $pdo = null;
