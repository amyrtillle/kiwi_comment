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

  <title>kiwi Comment avoir 20/20 avec Cardon</title>
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


<h1 id="titre">Comment préparer un oral</h1>
  
<h3>1-Anticiper le contenu de notre présentation</h3>
    <p>Vous devez en premier lieu savoir de quoi vous allez parler. Mettez en avant les mots clés qui seront utilisés, ainsi que les dates,
        les lieux, les personnages, etc...</p>


<h3>2- Notez ce que vous allez dire et montrer sur votre diaporama professionnel </h3>
<p>Un oral doit être préparé en avance. Son contenu doit être organisé car vous devrez parlez devant des spectateurs.
</p>

<h3>3-Retenez les mots clés </h3>
    <p> Ne prenez pas tout en note de ce que vous allez dire, en écrivant l'intégralité de votre oral sous forme de notes vous risquez
    de lire complètement vos notes sans jeter un coup d'oeil à votre auditoire. </p>

    <h3>4- Pensez aux spectateurs</h3>
    <p>Il ne s'agit pas d'un travail à l'écrit où les personnes peuvent relire ou faire une pause pour comprendre. Donnez leur donc des moments de réflexion
    Ne parlez pas trop vite et laisser des blancs pauvent parfois être bénéfiques. Vous pouvez aussi leur sourire, poser des questions, faire des blagues
    cela aide à attirer l'attention et à détendre l'atmosphère.</p>






  








  

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