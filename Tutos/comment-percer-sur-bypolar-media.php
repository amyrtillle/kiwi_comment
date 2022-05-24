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

    <title>kiwi Comment se faire des amis</title>
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
            echo '<a href="../landing.php">'.$_SESSION["pseudo"].'</a>';
        }
        elseif($_SESSION['email']==false)
            echo '<a href="../connexion.php"><span>se connecter</span></a></li>';
        ?>

        <?php
        session_start();
        if($_SESSION['email']==true){
            echo '<a href="../deconnexion.php"><span>Se déconnecter</span>';
        }
        elseif($_SESSION['email']==false)
            echo '<a href="../inscription.php"><span>Inscrivez-vous</span></a></li>';
        ?>
        <a href="/premium.php">Nos offres premium</a>
        <span class="line"></span>
    </nav>
</header>

<main class="content">


    <h1 id="titre">Comment percer sur <a href="https://b3.gremmi.fr">Bypolar Media? </a></h1>

    <p> Bypolar Media est un réseau social totalement
    </p>
    <h3>1- Créez votre compte Bypolar</h3>
    <p> Pensez à mettre une photo de profil et une bio intéressante qui pourrait attirer des gens. </p>

    <h3>2- Faites un premier post  </h3>
    <p> Présentez-bous, ou partagez une de vos passions/ centres d'intérêts, ou donnez une anecdote sur vous
         qui pourrait vous introduire à une communauté</p>

    <h3>3- Likez, dislikez et commentez </h3>
    <p> Pour gagner en popularité, vous devez discuter et intéragir avec le plus de monde possible.  </p>
















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