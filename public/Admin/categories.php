<?php
require 'data/categories.php';
ob_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories</title>
</head>
<body class="categorie">
    <section class="container-categories">
        <section>
            <?php require 'views/layout/admin.php'; ?>
        </section>
        <section class="categories">
            <header class="admin-header">
                <h1>Catégories</h1>
                <button class="btn active" type="button" data-click="new-category">Ajouter la catégorie</button>
            </header>

            <div class="admin-content">
                <table class="categories-list">
                    <tbody>
                        <?php foreach ($categories as $categorie) : ?>
                            <tr class="categorie-item categorie-id-<?php echo $categorie['id']; ?>">
                                <td>
                                    <form action="data/category_update.php" method="POST">
                                        <input type="hidden" name="categorie_id" value="<?php echo $categorie['id']; ?>">
                                        <input type="text" name="categorie_name" value="<?php echo $categorie['nom']; ?>">
                                        <div>
                                            <button class="btn" type="submit" data-click="update">Modifier</button>
                                            <button class="btn" type="button" data-click="delete">Supprimer</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </section>


    <!-- <script src="path/to/your/js/script.js"></script> -->
</body>
</html>


<script src="../../src/js/script.js"></script>