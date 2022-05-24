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

    <title>kiwi Comment demander de l'aide</title>
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
            echo '<a href="./inscription.php"><span>Inscrivez-vous</span></a></li>';
        ?>
        <a href="/premium.php">Nos offres premium</a>
        <span class="line"></span>
    </nav>
</header>

<main class="content">


    <h1 id="titre">Comment demander de l'aide</h1>
    <div>

        <p>MORT </p>
    </div>

    <div>

        <h2 class="titre1">Tutoriel</h2>


        <h3>Crier très fort "aled"</h3>
        <img class="illu" src="/medias/help2.jpg">

        <p>Pour attirer l'attention des gens autour de soi</p>

        <h3>2-Pleurer beaucoup</h3>
        <img class="illu" src="/medias/help3.jpg">
        <p> C'est pas si mal de pleurer tkt </p>


        <h3>3- Se mettre en Position Latérale de Sécurité </h3>
        <p> Les gens verront votre désespoir.</p>


    </div>


    <div id="cookiePopup">
        <h4><span id="cookie-text"><img class="cookie-img" src="/medias/Cookie.svg">Utilisation des cookies</span></h4>
        <p>Ce site utilise des cookies ou une technologie similaire, pour améliorer votre expérience et vous proposer des résultats personnalisés, veuillez accepter notre <a href="/confidentialite.php">Politique de confidentialité</a>.</p>
        <button id="acceptCookie">Accepter</button>
    </div>




</main>


<footer>
    <nav class="links" style="--items: 3;">
        <div>
            <form action="newsletter_traitement.php" method="post">
                <input type="email" class="navsearch" name="email_news" placeholder="S'inscrire à la newletter">
                <button type="submit">S'inscire</button>
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

</html> monde