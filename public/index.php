<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Pistache-restaurant</title>
</head>
<body class="body-main-page">
    <section class="logo-pistache">
        <!-- header -->
        <?php include_once './include/header.php'; ?>
    </section>
    <section  class="form-container">
        <form>
            <label for="adults">Adultes</label>
            <input type="text" id="adults" name="adults">
            
            <label for="children">Enfants</label>
            <input type="text" id="children" name="children">

            <label for="date">Date</label>
            <input type="date" id="date" name="date">
            
            <label for="time">Heure</label>
            <input type="time" id="time" name="time">

            <label for="name">Nom</label>
            <input type="text" id="name" name="name">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="phone">Téléphone</label>
            <input type="tel" id="phone" name="phone">

            <label for="special">Demande spéciale</label>
            <textarea id="special" name="special"></textarea>
        </form>
    </section>
    <section>
        <!-- navbar menu -->
        <?php include_once './include/nav-bar.php'; ?>
    </section>



</body>
</html>