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

    <title>kiwi Comment avoir moins chaud</title>
</head>

<body>
<header id="header">
    <nav class="links" style="--items: 7;">
        <a href="/index.php"><img class="logo_img" src="/medias/logo_text.png"></a>
        <a href="#"><input type="text" class="navsearch" placeholder="Recherche.."></a>
        <a href="/all.php">Les tutos</a>
        <a href="/connexion.php">Contact</a>
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


    <h1 id="titre">Comment avoir moins chaud</h1>

    <h3>1- N'allez pas dehors</h3>
    <p> S'il fait trop chaud, éviter de sortir, vous risquez une insolation, un malaise, un coup de chaud, etc... </p>

    <h3>2- Restez le plus proche du sol possible</h3>
    <p>L'air chaud étant plus léger que l'air froid, remontera toujours, donc si vous avez la possibilité de rester vers le sol, prenez cette occasion</p>


    <h3>3- Fermez vos fenêtres de jour et ouvrez les la nuit</h3>
<p>Il ne faut pas laisser la chaleur s'installer dans votre logement. N'ouvrez que la nuit lorsque l'air est plus frais. Attention aux éventuels moustiques.</p>

    <h3>4- Hydratez vous, mangez quelque chose de frais</h3>
    <p>Il est très important de s'hydrater en période de grosses chaleurs. Essayez de manger des aliments frais, une glace par exemple marche très bien.</p>

    <h3>5- Prenez une douche fraiche</h3>
    <p>Il est très vite désagréable d'être trempé par la transpiration toute la journée,
        prendre une douche bien fraîche juste avant de se coucher permettra de débarasser votre corps de la transpiration et cela va vous rafraichir.
    Notez aussi qu'il est plus difficile de dormir lorsqu'on a chaud.</p>

    <h3>6- Munissez vous d'un ventilateur/ brumisateur, ...</h3>
    <p>Il existe pleins d'objets qui peuvent soulager de la chaleur, les plus connus restent le ventilateur et le brumisateur,
        vous pouvez aussi acheter une climatisation, faites attention au prix et à la taille de cette dernière</p>















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

</html>