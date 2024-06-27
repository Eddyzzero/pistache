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
    <link rel="stylesheet" href="../../style.css"> <!-- Assurez-vous d'avoir un fichier CSS pour le style -->
</head>
<body class="categorie">
    <section class="container-categories">
        <section>
            <?php require 'views/layout/admin.php'; ?>
        </section>
        <section class="categories">
            <header class="admin-header">
                <h1>Catégories</h1>
                <button class="btn active" type="button" id="new-category-btn">Ajouter la catégorie</button>
            </header>

            <div class="admin-content">
                <table class="categories-list">
                    <tbody>
                        <?php foreach ($categories as $categorie) : ?>
                            <tr class="categorie-item categorie-id-<?php echo $categorie['id']; ?>">
                                <td>
                                    <form action="../admin/data/category-delete.php" method="POST">
                                        <input type="hidden" name="categorie_id" value="<?php echo $categorie['id']; ?>">
                                        <input type="text" name="categorie_nom" value="<?php echo $categorie['nom']; ?>">
                                        <div class="btn-container">
                                            <button type="submit" data-click="update">Modifier</button>
                                            <button type="button" class="delete-category-btn" data-id="<?php echo $categorie['id']; ?>" onclick="deleteCategory(<?php echo $categorie['id']; ?>)">Supprimer</button>
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

    <!-- Fenêtre modale pour ajouter une catégorie -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Ajouter une nouvelle catégorie</h2>
            <form action="../admin/data/category-add.php" method="POST">
                <label for="new-category-name">Nom de la catégorie:</label>
                <input type="text" id="new-category-name" name="categorie_nom" required>
                <div class="btn-container">
                    <button type="submit">Ajouter</button>
                    <button type="button" class="close">Annuler</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>



<!-- ajoute des instructions pour les  fenetres modales d'ajout et suppresion de categories -->
<script>

document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById("modal");
    const btn = document.getElementById("new-category-btn");
    const span = document.getElementsByClassName("close")[0];

    // Ouvrir la fenêtre modale
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // Fermer la fenêtre modale
    span.onclick = function () {
        modal.style.display = "none";
    }

    // Fermer la fenêtre modale si l'utilisateur clique en dehors de la fenêtre
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Fermer la fenêtre modale sur bouton Annuler
    document.querySelectorAll('.close').forEach(button => {
        button.onclick = function () {
            modal.style.display = "none";
        }
    });
});


// requete pour la suppresion de la categorie : 
    function deleteCategory(id) {
        if (confirm('Êtes-vous sûr de vouloir supprimer cette catégorie?')) {
            // Créer une requête AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '../admin/data/category-delete.php?id=' + id, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Réponse du serveur
                    if (xhr.responseText === 'success') {
                        // Supprimer la ligne de la catégorie du tableau
                        document.querySelector('.categorie-id-' + id).remove();
                    } else {
                        alert('Erreur lors de la suppression de la catégorie.');
                    }
                } else {
                    alert('Erreur lors de la requête.');
                }
            };
            xhr.send();
        }
    }
</script>

</body>
</html>


