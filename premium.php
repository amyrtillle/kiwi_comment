<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta lang="fr">
  <meta name="viewport" content="width=device-width">

  <link href="./css/style.css" rel="stylesheet" type="text/css" />
  <link href="./css/header-footer.css" rel="stylesheet" type="text/css" />
  <link href="./css/cookie.css" rel="stylesheet" type="text/css" />
  <link href="./css/premium.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="./libs/sweetalert2.min.css">
  
  <link rel="icon" href="./medias/logo.svg">

  <title>kiwi Comment être premium</title>
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

    <h2>Débloquez de nouvelles possibilités possiblement possibles avec Kiwiboost!</h2>

      <div class="alloffers">

      <div class="offres">
        <div>
          <h3>Boost Kiwi Platine</h3>
          <p>99.99€</p>
          <ul>
            <li>Accès en avance des futurs tutos</li>
            <li>Porte-clé Kiwi Comment VIP avec pseudo gravé offert</li>
            <li>Fonctionnalités des rangs précédents</li>

            
          </ul>
          <div>
            <button class="offersbutton" onclick="sweet();"> Acheter </button>
          </div>
        </div>
      </div>

      <div class="offres">
        <div>
          <h3>Boost Kiwi Diamant</h3>
          <p>199.99€</p>
          <ul>
            <li>Effet spécial sur pseudo</li>
            <li>Accès au tchat privé des contributeurs</li>
            <li>Fonctionnalités des rangs précédents</li>
          </ul>
          <div>
            <button class="offersbutton" onclick="sweet();"> Acheter </button>
          </div>
        </div>
        
      
      </div>

      <div class="offres">
        <div>
          <h3>Kiwi Comment Premium</h3>
          <p>999.99€/Mois </p>

          <ul>
            <li>Accès à tous les tutos du site</li> 
            <li>accompagnement professionnel lors de la réalisation de nos tutos par appel vidéo</li>  
            <li>votre nom est écrit sur notre mur des contributeurs VIP</li> 
            <li>Votre statut d'utilisateur premium sera visible sur votre pseudo,             qui mettra en valeur votre soutient à notre site web</li>
          </ul>
        </div>
        
        <div>
          <button class="offersbutton" onclick="sweet();"> Acheter </button>
        </div>
      </div>
    
      <div class="offres">
        <div>
          <h3>Boost Kiwi Doré</h3>
          <p>49.99€</p>
          <ul>
            <li>Effet spécial sur pseudo</li>
            <li>Avertissement des futurs tutos à venir</li>
            <li>Fonctionnalités du rang précédent</li>
          </ul>
        
          <div>
            <button class="offersbutton" onclick="sweet();"> Acheter </button>
          </div>
        </div>
      </div>

    
      <div class="offres">
        <div>
        <h3>Boost Kiwi Argenté</h3>
        <p>19.99€ </p>
          <ul>
            <li>Effet spécial sur pseudo</li>
            <li>Possibilité d'envoyer des emojis et GIFs spéciaux</li>
          </ul>
          
        <div>
          <button class="offersbutton" onclick="sweet();"> Acheter </button>
          </div>
        </div>
      </div>

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
  <script src="./js/animations.js"></script>
  <script src="./libs/sweetalert2.all.min.js"></script>
  <script src="./js/cookies.js"></script>
  
</body>

</html>