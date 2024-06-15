<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Pistache-restaurant</title>
</head>
<body>

<!-------- partie gauche de la page ------->
<section>
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

<!------- partie gauche de la page ------>
 <section>
    <article>
        <p>appellez-nous</p>
        <p>+32 (0) 458 25 14 36</p>
    </article>
    <article>
        <p>adresse</p>
        <p>Chau. de Tongres 122,<br>4451 Juprelle</p>
    </article>

    <article>
        <h2>Contact</h2>
        <div>
            <form action="submir" method="post">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required placeholder="example@gmail.com">
                <label for="email">Emai</label>
                <input type="email" id="email" name="email" require>

                <button type="submit">Envoyer</button>
            </form>
        </div>
    </article>

    <!-- map google maps -->
     <div class="google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41358.47184255139!2d6.047834157943715!3d49.61840524414436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47954f2b5522647b%3A0xa64de3489a4f88fe!2sRestaurant%20QoSQo%20Ville!5e0!3m2!1sfr!2sbe!4v1718440174692!5m2!1sfr!2sbe" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
 </section>

 <section>
    <article>
        <div class="social-logos">
            <a href="https://www.facebook.com/"><img src="./assets/icons/facebook-svgrepo-com.svg" alt="facebook"></a>
            <a href="https://wa.me/+320458251436" target="_blank"><img src="./assets/icons/whatsapp-128-svgrepo-com.svg" alt="whatsapp"></a>
            <a href="https://www.instagram.com"><img src="./assets/icons/instagram-f-svgrepo-com.svg" alt=""></a>
        </div>
        <div>
            <p>©Jhon Florez, All rights reserved</p>
        </div>
    </article>
    <article>
        <a href="./index.php">
            <img src="./assets/images/png/logoWhite.png" alt="">
        </a>
    </article>
 </section>
</body>
</html>