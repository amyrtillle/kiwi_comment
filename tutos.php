<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta lang="fr">
    <meta name="viewport" content="width=device-width">

    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link href="./css/header-footer.css" rel="stylesheet" type="text/css">
    <link href="./css/cookie.css" rel="stylesheet" type="text/css">
    <link href="./css/inscription.css" rel="stylesheet" type="text/css">
    <link href="./css/connexion.css" rel="stylesheet" type="text/css">

    <link href="./libs/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./libs/bootstrap.min.css">
    <link rel="stylesheet" href="./css/ajout_tutos.css">

    <link rel="icon" href="./medias/logo.svg">

    <title>kiwi Comment Ajout d'un tuto</title>
</head>

<body>
<header id="header">
    <nav class="links" style="--items: 7;">
        <a href="./index.php"><img class="logo_img" src="./medias/logo_text.png"></a>
        <a href="#"><input type="text" class="navsearch" placeholder="Recherche.."></a>
        <a href="./all.php">Les tutos</a>
        <a href="./contact.php">Contact</a>
        <?php
        session_start();
        if($_SESSION['email']==true){
            echo '<a href="./landing.php">'.$_SESSION["pseudo"].'</a>';
        }
        elseif($_SESSION['email']==false)
            echo '<a href="./connexion.php"><span>Se connecter</span></a></li>';
        ?>

        <?php
        session_start();
        if($_SESSION['email']==true){
            echo '<a href="./deconnexion.php"><span>Se déconnecter</span>';
        }
        elseif($_SESSION['email']==false)
            echo '<a href="./inscription.php"><span>Inscrivez-vous</span></a></li>';
        ?>
        <a href="./premium.php">Nos offres premium</a>
        <span class="line"></span>
    </nav>
</header>

<main>
    <?php
    session_start();
    if($_SESSION['email']==true){
        echo '<a href="./landing.php">'.$_SESSION["pseudo"].'</a>';
        ?>



    <div>

        <form class="login-form" action="tutos_traitement.php" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Ajout d'un tuto</h2>

            <div class="form-group">
                <input type="text" name="titre" class="form-control" placeholder="Titre" required="required" autocomplete="off" value="Comment">
            </div>

            <label for="categorie">Sélectionner une catégorie :</label><br>
            <select id="select" class="form-group" name="categorie" size="1">
                <option>Santé</option>
                <option>Scolarité</option>
                <option>Décoration</option>
                <option>Art</option>
                <option>Cuisine</option>
                <option>Social</option>
                <option>Nature</option>
                <option>Jeux</option>
            </select>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
            </div>
        </form>

        <div class="login-form">
            <?php
            if(isset($_GET['reg_err']))
            {
                $err = htmlspecialchars($_GET['reg_err']);

                switch($err)
                {
                case 'success':
                    ?>
                    <script>
                        window.onload = function () {
                            tuto();
                        }
                    </script>
            <?php break;
            }} ?>
        </div>
    </div>


    </div>

        <?php
    }
    elseif($_SESSION['email']==false)
        echo 'L accès à ce contenu vous est restreint';
    ?>


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
                <td class="colonnefooter"><a href="./help.php">Aide</a></td>
            </tr>
            <tr>
                <td class="colonnefooter"><a href="./contact.php">Nous contacter</a></td>
            </tr>
            <tr>
                <td class="colonnefooter"> <a href="./confidentialite.php">Conditions d'utilisations</a></td>
            </tr>
        </table>



        <table>
            <tr>
                <td class="colonnefooter" class="icons"><a href="http://facebook.com" target="_blank" ><img src="./medias/facebook-app-symbol.png" class="icon" alt="logo_facebook"> </a></td>
                <td class="colonnefooter" class="icons"><a href="http://youtube.com" target="_blank" ><img src="./medias/youtube.png" class="icon" alt="logo_youtube"></a></td>
                <td class="colonnefooter" class="icons"><a href="http://instagram.com" target="_blank" ><img src="./medias/instagram-logo.png" class="icon" alt="logo_instagram"></a></td>
                <td class="colonnefooter" class="icons"><a href="http://twitter.com" target="_blank" ><img src="./medias/twitter.png" class="icon" alt="logo_twitter"></a></td>
            </tr>
        </table>



    </nav>
</footer>

<script src="./libs/sweetalert2.all.min.js"></script>
<script src="./js/animations.js"></script>
<script src="./js/photos.js"></script>

</body>
</html>
