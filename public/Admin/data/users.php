<?php

require_once 'includes/has_session.php';
require_once '../../config/database.php';

$page = "users";

$query = "SELECT u.id, u.username, u.mail
FROM users u";

$statement = $pdo->prepare( $query );
$statement->execute();
$users = $statement->fetchAll();

// $pdo = null;
