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
                                    <form action="data/category-update.php" method="POST">
                                        <input type="hidden" name="categorie_id" value="<?php echo $categorie['id']; ?>">
                                        <input type="text" name="categorie_nom" value="<?php echo $categorie['nom']; ?>">
                                        <div class="btn-container">
                                            <button type="submit" data-click="update">Modifier</button>
                                            <button type="button" class="delete-category-btn" data-id="<?php echo $categorie['id']; ?>">Supprimer</button>
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

    // Suppression des catégories
    document.querySelectorAll('.delete-category-btn').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            if (confirm('Voulez-vous vraiment supprimer cette catégorie?')) {
                fetch(`/data/category-delete.php?id=${id}`, { method: 'GET' })
                    .then(response => response.text())
                    .then(data => {
                        if (data === 'success') {
                            document.querySelector(`.categorie-id-${id}`).remove();
                            alert('La catégorie a été supprimée avec succès.');
                        } else {
                            alert('Erreur lors de la suppression de la catégorie.');
                        }
                    })
                    .catch(error => {
                        console.error('Erreur lors de la suppression:', error);
                        alert('Erreur lors de la suppression de la catégorie.');
                    });
            }
        });
    });
});


//     document.addEventListener('DOMContentLoaded', function() {
// if (document.body.classList.contains('categorie')) {
//     document.querySelectorAll('[data-click="delete"]').forEach(function(button) {
//         button.addEventListener('click', function(event) {
//             event.preventDefault();
//             document.querySelector('body').classList.add('has-modal-active');
//             document.querySelector('.modal-delete').classList.add('active');

//             let category_id = event.currentTarget.closest('form').querySelector('[type="hidden"]').value;
//             document.querySelector('.modal-delete').querySelector('[type="hidden"]').value = category_id;
//         });
//     });

//     document.querySelector('[data-click="new-category"]').addEventListener('click', function(event) {
//         event.preventDefault();
//         document.querySelector('body').classList.add('has-modal-active');
//         document.querySelector('.modal-add').classList.add('active');
//     });

//     document.querySelectorAll('[data-click="close"]').forEach(function(button) {
//         button.addEventListener('click', function(event) {
//             document.querySelector('body').classList.remove('has-modal-active');
//             event.currentTarget.closest('.modal.active').classList.remove('active');
//         });
//     });
// }

// if (document.body.classList.contains('home')) {
//     document.querySelector('[name="categorie"]').addEventListener('change', function(event) {
//         event.target.closest('form').submit();
//     });
// }

// if (document.body.classList.contains('single')) {
//     var glide = new Glide('.glide', {
//         type: 'carousel',
//         animationDuration: 600,
//         gap: 24,
//         startAt: 0,
//         perView: 3,
//         breakpoints: {
//             1000: {
//                 perView: 2
//             },
//             600: {
//                 perView: 1
//             }
//         }
//     });
//     glide.mount();
// }
// });
</script>

</body>
</html>


