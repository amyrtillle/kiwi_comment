<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta lang="fr">
  <meta name="viewport" content="width=device-width">

  
  
  <link href="./css/style.css" rel="stylesheet" type="text/css" />
  <link href="./css/cookie.css" rel="stylesheet" type="text/css" />
  <link href="./css/header-footer.css" rel="stylesheet" type="text/css" />
  


  
  <link rel="icon" href="./medias/logo.svg">

  <title>kiwi Comment</title>
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

    <a href="./premium.php">Nos offres premium</a>
		<span class="line"></span>
	</nav>
</header>

<main class="content">
<h1>Bienvenue sur Kiwi Comment !</h1>
  <p>Des tutos toujours plus utiles les uns que les autres !</p>


  <div class="une">
  <h1>A la une</h1>

       <div class="slider">

      <!-- slide 1 -->
      <div class="slide">
        <a href="./Tutos/comment-ouvrir-un-yaourt.php">
        <img src="./medias/opercule.jpg" alt="image article opercule"/>
        </a>
      </div>

       <!-- slide 2 -->
      <div class="slide">
        <a href="./Tutos/comment-ne-pas-se-perdre-ikea.php">
        <img src="./medias/ikea.jpg" alt="image article ikea" />
          </a>
      </div>

       <!-- slide 3 -->
      <div class="slide">
        <a href="./Tutos/eviter-taches-de-kiwi.php">
        <img src="./medias/pineapple.webp" alt="image article kiwi" />
          </a>
      </div>

       <!-- slide 4 -->
      <div class="slide">
        <a href="./Tutos/comment-cosplay.php">
        <img src="./medias/cosplay.jpg" alt="image article cosplay" />
          </a>
      </div>

      <!-- slide 5 -->
      <div class="slide">
        <a href="./Tutos/comment-respirer.php">
        <img src="./medias/breathe.jpg" alt="image article respirer" />
          </a>
      </div>

      <!-- slide 6 -->
      <div class="slide">
        <a href="./Tutos/comment-survivre-sur-twitter.php">
        <img src="./medias/twitter.jpg" alt="image article twitter" />
          </a>
      </div>

       <!-- Control buttons -->
      <button class="btn btn-next"></button>
      <button class="btn btn-prev"></button>
    </div>



  <div id="cookiePopup">
    <h4><span id="cookie-text"><img class="cookie-img" src="./medias/Cookie.svg">Utilisation des cookies</span></h4>
    <p>Ce site utilise des cookies ou une technologie similaire, pour améliorer votre expérience et vous proposer des résultats personnalisés, veuillez accepter notre <a href="./confidentialite.php">Politique de confidentialité</a>.</p>
    <button id="acceptCookie">Accepter</button>
  </div>




</main>
  

<footer>
    <nav class="links" style="--items: 3;">
      <div>
        <form action="newsletter_traitement.php" method="post">
        <input type="email" class="navsearch" name="email_news" placeholder="S'inscrire à la newletter">
            <button type="submit">S'inscrire</button>
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


    <script src="./js/cookies.js"></script>
  <script src="./js/carousel.js"></script>

</body>

</html>