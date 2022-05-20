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

    <title>kiwi Comment monter son meuble Aeki</title>
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


    <h1 id="titre">Comment monter son meuble ft <a href="https://b12.gremmi.fr">Aeki</a> </h1>

    <h3>1- Achetez votre meuble chez aeki</h3>
    <p> Une qualité incroyable avec des prix plus qu'abordables, des meubles de QUA-LI-TEY.
        Un magasin mieux qu'Ikea, non aeki n'est PAS un plagiat d'Ikea, certes il vend aussi des meubles mais ça ne veut rien dire,
        oui bon peut-être qu'Aeki en verlan donne Ikea mais non je n'aurai pas dû dire ça oubliez,
        dans tous les cas ce n'est qu'un concours de CIR-CON-STANCES
        <br>Quoi vous pensez que c'est un contenu sponsorisé? Ok j'avoue c'est le cas, bravo vous êtes vraiment trop doué.e HAHA,
        non mais sérieusement il faut bien financer notre site, achetez notre contenu premium si vous êtes pas contents non mais oh. </p>

    <img class="illu" src="/medias/aeki2.jpg">

    <h3>2- Ramenez le meuble chez vous  </h3>
    <p> Faites bien attention à ne pas abimer votre meuble avant même de l'avoir ouvert. Conduisez sagement et vérifiez que votre meuble est bien placé dans la voiture. </p>

    <h3>3- Ouvrez le manuel</h3>
    <p> Chaque meuble a un manuel qui vous guidera tout le long du processus du montage de votre meuble Aeki. N'importe qui peut lire et comprendre ce manuel
    car il est essentiellement illustré, si vous avez déjà monté des legos vous savez de quoi ce tuto parle.</p>

    <h3>4- Suivez attentivement les instructions et arrangez vos pièces détachées</h3>
    <p> Ne mélangez surtout pas les différents pièces de votre meuble ou vous allez perdre votre temps à vous y retrouver.
        Soyez délicats dans vos manoeuvres pour éviter de casser quelque chose</p>

    <h3>5- Vérifiez que votre meuble est bien monté avant de l'installer</h3>
    <p>Pour éviter un accident quelconque, vérifiez d'abord que votre meuble est solide. Si c'est le cas alors félicitations votre meuble aeki est enfin monté!
    Vous pouvez maintenant l'installer là où vous voulez!</p>
    













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
