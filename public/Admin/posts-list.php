<?php include '../../config/dataBase.php';

// construction de la requette SQL
$sql = "SELECT * FROM starters";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Pistache-restaurant</title>
</head>
<body>
    <!-- ajoute de la navbar en php  -->
     <?php  include_once 'header.php'?>
    <section>
        <div>
            <h1>Liste</h1>
        </div>
        <div>
            <form action="" id="search_form" method="GET">
                <input type="text" name="search" placeholder="Chercher">
                <button type="submit">Rechercher</button>
            </form>

            <form id="sortForm" method="GET" action="menus.php">
                <label for="sort">Trier par :</label>
                <select name="sort" id="sort" onchange="document.getElementById('sortForm').submit()">
                    <option value="date_desc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'date_desc') echo 'selected'; ?>>Du plus récent au plus ancien</option>
                    <option value="date_asc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'date_asc') echo 'selected'; ?>>Du plus ancien au plus récent</option>
                    <option value="alpha_asc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'alpha_asc') echo 'selected'; ?>>Ordre alphabétique A-Z</option>
                    <option value="alpha_desc" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'alpha_desc') echo 'selected'; ?>>Ordre alphabétique Z-A</option>
                </select>
            </form>
        </div>

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
                <?php 
                // creation de boucle pour l'affichage des plats
                if($result->num_rows > 0) {
                while ( $row = $result->fetch_assoc()) {
                echo " <tr>
                            <td>" . htmlspecialchars($row['nom']) . "</td>
                            <td>" . htmlspecialchars($row['status']) . "</td>
                            <td>modifié le " . htmlspecialchars($row['date_modification']) . "</td>
                            <td><a href='edit.php?id=" . $row['id'] . "'>Modifier</a> / <a href='delete.php?id=" . $row['id'] . "'>Effacer</a></td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
         </table>
    </section>

</body>
</html>