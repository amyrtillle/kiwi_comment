<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta lang="fr">
    <meta name="viewport" content="width=device-width">



    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/cookie.css" rel="stylesheet" type="text/css" />
    <link href="/css/header-footer.css" rel="stylesheet" type="text/css" />
    <link href="/css/article.css" rel="stylesheet" type="text/css" />




    <link rel="icon" href="/medias/logo.svg">

    <title>kiwi Comment prendre soin de sa plante</title>
</head>

<body>
<header id="header">
    <nav class="links" style="--items: 7;">
        <a href="/index.php"><img class="logo_img" src="/medias/logo_text.png"></a>
        <a href="#"><input type="text" class="navsearch" placeholder="Recherche.."></a>
        <a href="/all.php">Les tutos</a>
        <a href="/contact.php">Contact</a>
        <?php
        session_start();
        if($_SESSION['email']==true){
            echo '<a href="./landing.php">'.$_SESSION["email"].'</a>';
        }
        elseif($_SESSION['email']==false)
            echo '<a href="./connexion.php"><span>se connecter</span></a></li>';
        ?>

        <?php
        session_start();
        if($_SESSION['email']==true){
            echo '<a href="./deconnexion.php"><span>Se déconnecter</span>';
        }
        elseif($_SESSION['email']==false)
            echo '<a href="./inscription.php"><span>S inscire</span></a></li>';
        ?>
        <a href="/premium.php">Nos offres premium</a>
        <span class="line"></span>
    </nav>
</header>

<main class="content">


    <h1 id="titre">Comment prendre soin de sa plante ft <a href="https://a14.gremmi.fr"> Lavandula  </a></h1>

    <p></p>

    <h3>1- Achetez une plante appropriée à votre environnement</h3>

    <img class="illu" src="/medias/plante.jpg" width="500">
    <p> Tout d'abord, observez votre entourage, vivez-vous dans un appartement? Une maison dans le sud, ou dans le Nord?..
        Les plantes n'ont pas toutes leurs mêmes caractéristiques et certaines auront tendance à plus s'en sortir là où d'autres vont mourir.
        Choisissez donc bien votre plante avec considération. </p>

    <h3>2- Placez-la dans un endroit approprié  </h3>
    <p> Même si les plantes ont tendance à apprécier la lumière du soleil, il faut souvent éviter de les exposer directement sous les rayons du soleil. </p>

    <h3>3- Arrosez-la avec une quantité d'eau appropriée </h3>
    <p> Toutes les plantes n'ont pas le même besoin en arrosage, prenez par exemple un cactus qui est une plante vivant dans des milieux désertiques
        et une chrysanthème qui a besoin d'un sol humide pour se développer correctement.Vous n'allez donc pas noyer le cactus sous 3L d'eau
        et ne rien donner à la chrysanthème pas vrai?</p>

    <h3>3- Vérifiez son état régulierement</h3>
    <p> Parfois une plante peut tourner de l'oeil très rapidement, c'est pour cela qu'il faut faire attention à son état. Jetez un coup d'oeil à votre plante
    de temps en temps</p>










    <div id="cookiePopup">
        <h4><span id="cookie-text"><img class="cookie-img" src="/medias/Cookie.svg">Utilisation des cookies</span></h4>
        <p>Ce site utilise des cookies ou une technologie similaire, pour améliorer votre expérience et vous proposer des résultats personnalisés, veuillez accepter notre <a href="/confidentialite.php">Politique de confidentialité</a>.</p>
        <button id="acceptCookie">Accepter</button>
    </div>




</main>


<footer>
    <nav class="links" style="--items: 3;">
        <div>
            <form action="newsletter.php" method="post">
                <input type="email" class="navsearch" placeholder="S'inscrire à la newletter">
                <input type="submit" value="S'inscrire" name="submit_form"/>
            </form>
        </div>



        <table>
            <tr>
                <td class="colonnefooter"><a href="/help.php">Aide</a></td>
            </tr>
            <tr>
                <td class="colonnefooter"><a href="/contact.php">Nous contacter</a></td>
            </tr>
            <tr>
                <td class="colonnefooter"> <a href="/confidentialite.php">Conditions d'utilisations</a></td>
            </tr>
        </table>



        <table>
            <tr>
                <td class="colonnefooter" class="icons"><a href="http://facebook.com" target="_blank" ><img src="/medias/facebook-app-symbol.png" class="icon" alt="logo_facebook"> </a></td>
                <td class="colonnefooter" class="icons"><a href="http://youtube.com" target="_blank" ><img src="/medias/youtube.png" class="icon" alt="logo_youtube"></a></td>
                <td class="colonnefooter" class="icons"><a href="http://instagram.com" target="_blank" ><img src="/medias/instagram-logo.png" class="icon" alt="logo_instagram"></a></td>
                <td class="colonnefooter" class="icons"><a href="http://twitter.com" target="_blank" ><img src="/medias/twitter.png" class="icon" alt="logo_twitter"></a></td>
            </tr>
        </table>



    </nav>
</footer>


<script src="/js/cookies.js"></script>

</body>

</html>