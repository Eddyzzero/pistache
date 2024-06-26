<?php

require_once 'include/has_session.php';
require_once '../../config/database.php';

$page = "post --list";

$query = "SELECT m.id, m.nom, m.description, m.prix, m.categorie_id, m.status, m.created_at, m.updated_at
FROM menu m
LEFT JOIN users u ON u.username = u.id";

$statement = $pdo->prepare( $query );
$statement->execute();
$posts = $statement->fetchAll();

// $pdo = null;
include 'views/layout/admin.php';

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    $query = "DELETE FROM menu WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();

}