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

  <title>kiwi Comment s'inscrire</title>
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

  <main>
<div>

  <form class="login-form" action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>    

                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
                </div>
    
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
<div class="check">
      <label id="centres_interets">Centres d'intérêts</label> <br>

      <div>
          <input type="checkbox" id="santé" name="centres_interets" value="Santé">
          <label for="santé">Santé</label>
      </div>

      <div>
          <input type="checkbox" id="scolarité" name="centres_interets" value="scolarité">
          <label for="scolarité">Scolarité</label>
      </div>

      <div>
          <input type="checkbox" id="Sport" name="centres_interets" value="Sport">
          <label for="Sport">Sport</label>
      </div>

      <div>
          <input type="checkbox" id="Art" name="centres_interets" value="Art">
          <label for="Art">Art</label>
      </div>



      <div>
          <input type="checkbox" id="Cuisine" name="centres_interets" value="Cuisine">
          <label for="Cuisine">Cuisine</label>
      </div>

      <div>
          <input type="checkbox" id="Social" name="centres_interets" value="Social">
          <label for="Social">Social</label>
      </div>

      <div>
          <input type="checkbox" id="Nature" name="centres_interets" value="Nature">
          <label for="Nature">Nature</label>
      </div>

      <div>
          <input type="checkbox" id="Jeux" name="centres_interets" value="Jeux">
          <label for="Jeux">Jeux</label>
      </div>

</div>

      <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
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
                    <div class="alert alert-success">
                        <strong>Succès</strong> inscription réussie !
                    </div>
                    <?php
                    break;

                case 'password':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> mot de passe différent
                    </div>
                    <?php
                    break;

                case 'email':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email non valide
                    </div>
                    <?php
                    break;

                case 'email_length':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email trop long
                    </div>
                    <?php
                    break;

                case 'pseudo_length':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> pseudo trop long
                    </div>
                <?php
                case 'already':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> compte déjà existant
                    </div>
                <?php

            }
        }
        ?>

    </div>
</div>


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
