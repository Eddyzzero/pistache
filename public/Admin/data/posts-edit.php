<?php

require_once 'include/has_session.php';
require_once '../../config/database.php';

$page = "post --edit";

$menu_id = $_GET['id'] ?? ''; // equivalent de : $_GET['id'] ? $_GET['id'] : '';

if ($_POST) {
    $menu = $_POST;

    // INSERT INTO
    if (isset($menu['publish'])) {
        $query = "INSERT INTO menu (nom, description, prix, categorie_id, status, created_at, updated_at)
        VALUES (:nom, :description, :prix, :categorie_id, :status, NOW(), NOW())";

        $statement = $pdo->prepare($query);
        $statement->bindValue(':nom', $menu['nom']);
        $statement->bindValue(':description', $menu['description']);
        $statement->bindValue(':prix', $menu['prix']);
        $statement->bindValue(':categorie_id', $menu['categorie_id']);
        $statement->bindValue(':status', $menu['status']);
        $statement->execute();

        $new_id = $pdo->lastInsertId();

        header('Location: posts-edit.php?id=' . $new_id);
    }

    //UPDATE
    if (isset($menu['update']) && !empty($menu_id)) {
        
        $query = "UPDATE menu
        SET nom = :nom, description = :description, prix = :prix, categorie_id = :categorie_id, status = :status, updated_at = NOW()
        WHERE id = " . $menu_id;

        $statement = $pdo->prepare($query);
        $statement->bindValue(':nom', $menu['nom']);
        $statement->bindValue(':description', $menu['description']);
        $statement->bindValue(':prix', $menu['prix']);
        $statement->bindValue(':categorie_id', $menu['categorie_id']);
        $statement->bindValue(':status', $menu['status']);
        $statement->execute();
    }

    // DELETE
    if (isset($menu['delete']) && !empty($menu_id)) {
        $query = "DELETE FROM menu WHERE id = :menu_id";

        $statement = $pdo->prepare($query);
        $statement->bindValue(':menu_id', $menu_id);
        $statement->execute();

        header('Location: posts-list.php');
    }
}

if (isset($menu_id) && !empty($menu_id)) {
    $query = "SELECT m.id, m.nom, m.description, m.prix, m.categorie_id, m.status, m.created_at, m.updated_at, c.nom as categorie_nom
    FROM menu m
    LEFT JOIN categorie c ON c.id = m.categorie_id
    WHERE m.id = :menu_id";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':menu_id', $menu_id);
    $statement->execute();
    $menu = $statement->fetch();
}

$query = "SELECT * FROM categorie";

$statement = $pdo->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
?>


