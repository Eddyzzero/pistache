<?php 

// require_once '../config/dataBase.php';

// // Récupérer les données des catégories
// $category_sql = "SELECT id, nom FROM categories";
// $category_stmt = $pdo->query($category_sql);
// $categories = [];
// while ($row = $category_stmt->fetch(PDO::FETCH_ASSOC)) {
//     $categories[] = $row;
// }

// // Récupérer les items du menu pour chaque catégorie
// $menu = [];
// foreach ($categories as $category) {
//     $sql = "SELECT nom, prix, description FROM menu WHERE category_id = ?";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute([$category['id']]);
//     $menu[$category['name']] = $stmt->fetchAll(PDO::FETCH_ASSOC);
// }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Pistache-restaurant</title>
</head>
<body class="body-menu">


    <section class="menu-left">
        <section>
            <nav>
                <ul>
                    <li><a href="#entrees">Entrées</a></li>
                    <li><a href="#Plats">Plats</a></li>
                    <li><a href="#Desserts">Desserts</a></li>
                    <li><a href="#boissons">boissons</a></li>
                    <li><a href="#cocktails">cocktails</a></li>
                </ul>
            </nav>
        </section>

        <section class="text">
            <p>
                Découvrez l'essence de la cuisine colombienne, sublimée par des créations gastronomiques uniques. 
                Que ce soit pour savourer des entrées délicates, des plats principaux savoureux, 
                ou des desserts exquis, notre menu est conçu pour émerveiller vos papilles. 
                Profitez également de notre sélection raffinée de cocktails colombiens et de bières belges pour une expérience culinaire complète.
            </p>
            <p>
                Nous vous souhaitons une dégustation inoubliable !
            </p>
        </section>

        <!-- menu et recettes -->
        <section class="container-menu">
            <h2 id="entrees">entrées</h2>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Ceviche de Camarones</p>
                        <div class="line"></div>
                        <div>10€</div>
                    </div>
                    <div>
                        <p>Un ceviche frais de crevettes mariné dans du jus de citron vert avec des oignons rouges, des tomates, du coriandre et un soupçon de piment.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Arepas de Choclo</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Galettes de maïs sucré grillées, souvent garnies de fromage fondu, idéales comme une entrée croustillante et légèrement sucrée.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Empanadas de Carne</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Pâtisseries frites ou cuites au four farcies de viande de bœuf assaisonnée, de pommes de terre, d’oignons et de coriandre.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Patacones con Hogao</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Rondelles de plantain vert frites servies avec une sauce à base de tomates, d'oignons et d'ail.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
        </section>

        <!-- section avec tous les plats principaux -->
        <section class="container-menu">
            <h2 id="plats">plats</h2>
            <article>
                <div >
                    <div class="recipe-title">
                        <p>Bandeja Paisa</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Un plat copieux comprenant du chorizo, du bœuf haché, du lard croustillant, des haricots rouges, du riz, des plantains frits, de l’avocat, une arepa, et un œuf au plat.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Ajiaco</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Une soupe épaisse à base de poulet, de trois types de pommes de terre, de maïs et de guasca (herbe locale), souvent servie avec de la crème, des câpres et de l’avocat.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Lechona Tolimense</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Cochon de lait farci de riz, pois cassés, et d’épices, puis rôti lentement jusqu'à obtenir une peau croustillante</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Sobrebarriga a la Brasa</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Plat de flanchet de bœuf grillé, souvent accompagné de pommes de terre, de yucca, et d’une sauce créole à base de tomates et d'oignons.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Chuleta Valluna</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Côtelettes de porc panées et frites, servies avec du riz, des plantains frits et une salade.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
        </section>

        <!-- section avec tous les desserts -->
        <section class="container-menu">
            <h2 id="Desserts">Desserts Colombiens</h2>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Arroz con Leche</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Riz au lait sucré, souvent agrémenté de cannelle et de raisins secs.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Obleas con Arequipe</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Grandes galettes fines et croustillantes, garnies de confiture de lait (arequipe) et parfois de fromage râpé ou de confitures de fruits.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Torta Negra</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p></p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Flan de Coco</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Flan crémeux à base de lait de coco, avec une texture soyeuse et un goût délicatement sucré.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Brevas con Arequipe</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Figues séchées farcies de confiture de lait, une combinaison sucrée et savoureuse typique des desserts colombiens.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
        </section>

        <!-- section avec tous les boissons et cocktails -->
        <section class="container-menu">
            <h2 id="boissons">Cocktails Colombiens et Bières Belges</h2>
            <h3 id="cocktails">Cocktails Colombiens</h3>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Aguardiente Sour</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Un cocktail à base d'aguardiente (alcool de canne à sucre) mélangé avec du jus de citron vert, du sucre, et des blancs d'œufs.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Canelazo</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Boisson chaude à base d'eau de panela (sucre non raffiné), de cannelle et d'aguardiente.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Cuba Libre</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p> Rhum mélangé avec du cola et du citron vert.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Lulada</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Cocktail rafraîchissant à base de lulo (fruit tropical), de jus de citron vert, de sucre, et parfois de vodka ou d'aguardiente.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Michelada Colombiana</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière mélangée avec du jus de citron, du sel, et parfois de la sauce piquante ou du Worcestershire.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Piña Colada</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Mélange de rhum, lait de coco, et jus d'ananas.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Coco Loco</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Cocktail servi dans une noix de coco, composé de rhum, vodka, tequila, jus de citron vert, lait de coco, et jus d'ananas.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Mojito Colombiano</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Variante locale du mojito classique, souvent avec du rhum colombien et de la canne à sucre fraîche.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Tequila Sunrise</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Tequila, jus d'orange et grenadine.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Ron Canelazo</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Mélange de rhum, cannelle, clous de girofle et sucre de canne.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Cholao</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Cocktail fruité à base de fruits tropicaux hachés, de lait concentré, de sirop de fruit, et de glace pilée, parfois avec une touche d'alcool.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>

            <!-- bieres belges -->
            <h3 id="Bieres">Bières Belges</h3>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Duvel</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière blonde forte avec une fermentation en bouteille, caractérisée par une saveur fruitée et épicée.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Chimay Rouge</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière trappiste ambrée, avec des notes de fruits secs et de caramel</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>La Chouffe</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière blonde non filtrée, légèrement houblonnée, avec des saveurs fruitées et épicées.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Westmalle Tripel</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière trappiste blonde, avec des arômes de fruits et une amertume houblonnée.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Rochefort 10</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière trappiste brune, avec des saveurs complexes de fruits noirs et de caramel.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Orval</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière trappiste unique, avec une fermentation mixte donnant une saveur complexe et légèrement acidulée.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Leffe Blonde</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière d'abbaye blonde, douce et fruitée, avec des notes de clou de girofle et de banane.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Kwak</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière ambrée avec des saveurs maltées et une légère amertume.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Delirium Tremens</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière blonde forte, avec des arômes de fruits et d'épices.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Gueuze</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière lambic, mélange de jeunes et vieilles bières lambic, avec une saveur acidulée et pétillante.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Saison Dupont</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière de ferme blonde, avec des arômes de levure et une légère amertume.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
            <article>
                <div>
                    <div class="recipe-title">
                        <p>Tripel Karmeliet</p>
                        <div class="line"></div>
                    </div>
                    <div>
                        <p>Bière blonde aux arômes de banane et de vanille, avec une texture crémeuse et mousseuse.</p>
                    </div>
                </div>
                <div>
                    <img src="" alt="">
                </div>
            </article>
        </section>
    </section>

    <section class="menu-right">
        <a href="./index.php">
            <img src="./assets/images/png/logoWhite.png" alt="">
        </a>
        
        <section>
            <p>découbrir</p>
            <p>nous plats</p>
        </section>

        <section>
            <?php include_once './include/nav-bar.php' ?>
        </section>
</section>
</body>
</html>


