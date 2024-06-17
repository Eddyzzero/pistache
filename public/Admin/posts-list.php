<?php 

include '../../config/dataBase.php';
include '../Admin/include/has_session.php';

// construction de la requette SQL
// récepere la table avec le menu
// récuperer les starters
$queryStarters = "SELECT id, nom, description, prix, datemodification FROM starters";
$stmStarters = $pdo->query($queryStarters);
$starters = $stmStarters -> fetchAll(PDO::FETCH_ASSOC);

// récuperer les starters
$queryMainCourses = "SELECT id, nom, description, prix, datemodification FROM mainCourses";
$stmStarters = $pdo->query($queryMainCourses);
$mainCourses = $stmStarters -> fetchAll(PDO::FETCH_ASSOC);

// récuperer les starters
$queryDessert = "SELECT id, nom, description, prix, datemodification FROM dessert";
$stmStarters = $pdo->query($queryDessert);
$dessert = $stmDessert -> fetchAll(PDO::FETCH_ASSOC);

// récuperer les starters
$queryBeers= "SELECT id, nom, description, prix, datemodification FROM Beers";
$stmStarters = $pdo->query($queryBeers);
$Beers = $stmBeers -> fetchAll(PDO::FETCH_ASSOC);

// récuperer les starters
$queryCocktails = "SELECT id, nom, description, prix, datemodification FROM cocktails";
$stmStarters = $pdo->query($queryCocktails);
$cocktails = $stmCocktails -> fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Pistache-restaurant</title>
</head>
<body>
    <!-- ajoute de la navbar en php  -->
     <?php  include_once '../Admin/include/header.php'?>
    <section>
        <section>
            <h1>Liste</h1>
        </section>
        <section>
            <form action="" id="search_form" method="GET">
                <input type="text" name="search" placeholder="Chercher">
                <button type="submit">Rechercher</button>
            </form>

            <!-- <form id="sortForm" method="GET" action="menus.php">
                <label for="sort">Trier par :</label>
                <select name="sort" id="sort" onchange="document.getElementById('sortForm').submit()">
                    <option value="date_desc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'date_desc') echo 'selected'; ?>>Du plus récent au plus ancien</option>
                    <option value="date_asc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'date_asc') echo 'selected'; ?>>Du plus ancien au plus récent</option>
                    <option value="alpha_asc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'alpha_asc') echo 'selected'; ?>>Ordre alphabétique A-Z</option>
                    <option value="alpha_desc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'alpha_desc') echo 'selected'; ?>>Ordre alphabétique Z-A</option>
                </select>
            </form> -->
        </section>

        <!-- table de recettes -->
         <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Status</th>
                    <th>Date de modification</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                 <?php foreach ($starters as $starters) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($starters['nom']) ?></td>
                        <td><?php echo htmlspecialchars($starters['description']) ?></td>
                        <td><?php echo htmlspecialchars($starters['datemodification']) ?></td>
                        <td><?php echo htmlspecialchars($starters['prix']) ?>€</td>
                        <td><a href='post-edit.php?id=" . $row['id'] . "'>Modifier</a> / <a href='delete.php?id=" . $row['id'] . "'>Effacer</a></td>
                    </tr>"; 
                <?php endforeach ?>
            </tbody>
         </table>
    </section>

</body>
</html>