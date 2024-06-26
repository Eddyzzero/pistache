<?php
require_once '../../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM categorie WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    if ($statement->rowCount() > 0) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>
