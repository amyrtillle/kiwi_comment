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

  <title>kiwi Comment cacher un cadavre</title>
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
    <a href="/premium.php">Nos offres premium</a>
		<span class="line"></span>
	</nav>
</header>

<main class="content">


<h1 id="titre">Comment cacher un cadavre</h1>
<div>

<p>MORT </p>
</div>

<div>

<h2 class="titre1">Tutoriel</h2>


<h3>1- Vérifier les environs</h3>
<img class="illu" src="/medias/kiwi-analyse.webp">
  
<p>Observez les environs, il ne doit pas y avoir un seul témoin de votre plan ou vous serez en danger
</p>

<h3>2- Ne laisser aucune trace</h3>
  <p>Evitez à tout prix de laisser des traces de votre identité sur le cadavre, emprunte, cheveux, ... Si possible, prenez des gants et attachez vos cheveux/ couvrez-les
  pour ne laisser aucun indice</p>


<h3>3- Première solution: Brulez le corps</h3>
<p>Le feu permet d'effacer toute trace d'un cadavre, si vous le faites bien, mais vous aurez besoin d'une grande puissance de feu, cela risque de se voir
si vous n'êtes pas assez discrets. </p>

    <h3>4- Enterrez cadavre sous une espèce protégée de plante </h3>
    <p>Comme ça c'est illégal de déterrer la zone hihihihihi</p>

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

</html>