<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta lang="fr">
    <meta name="viewport" content="width=device-width">

    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link href="./css/header-footer.css" rel="stylesheet" type="text/css">
    <link href="./css/cookie.css" rel="stylesheet" type="text/css"><link href="./css/inscription.css" rel="stylesheet" type="text/css">

    <link href="./libs/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./libs/bootstrap.min.css">

    <link rel="icon" href="./medias/logo.svg">

    <title>kiwiComment Connexion</title>
</head>

<body>
<header id="header">
    <nav class="links" style="--items: 7;">
        <a href="./index.html"><img class="logo_img" src="./medias/logo_text.png"></a>
        <a href="#"><input type="text" class="navsearch" placeholder="Recherche.."></a>
        <a href="./all.html">Les tutos</a>
        <a href="./contact.html">Contact</a>
        <a href="./connexion.php">Se connecter</a>
        <a href="./inscription.php">S'inscrire</a>
        <a href="./premium.html">Nos offres premium</a>
        <span class="line"></span>
    </nav>
</header>

    <form class="login-form" action="connexion.php" method="post">
        <h2 class="text-center">Connexion</h2>

        <div class="form-group">
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
        </div>

        <div class="form-group"
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
        </div>
    </form>

<?php
    session_start(); 
    require_once 'config.php'; 

    if(!empty($_POST['email']) && !empty($_POST['password'])) 
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); 
        
        $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        if($row > 0)
        {
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($password, $data['password']))
                {
                    
                    $_SESSION['user'] = $data['token'];
                    header('Location: landing.php');
                    die();
                }else header('Location: index.php?login_err=password');
            }else header('Location: index.php?login_err=email');
        }else header('Location: index.php?login_err=already');
    }else header('Location: index.php');

?>

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
                <td class="colonnefooter"><a href="./help.html">Aide</a></td>
            </tr>
            <tr>
                <td class="colonnefooter"><a href="./contact.html">Nous contacter</a></td>
            </tr>
            <tr>
                <td class="colonnefooter"> <a href="./confidentialite.html">Conditions d'utilisations</a></td>
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
</body>
</html>
