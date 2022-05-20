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

  <title>kiwi Comment eviter les taches de kiwi</title>
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


<h1 id="titre">Comment éviter les taches de kiwi en mangeant</h1>
<div>

<p>Il n'est pas rare de tacher ses vêtements lorsqu'on mange un bon repas, surtout lorsqu'il y a de la sauce. Que ce soit lors d'un mariage, un repas de famille, une soirée entre amis, personne ne souhaite se prendre une tache. Car cela est souvent synonyme d'une mauvaise éducation. </p>
</div>

<div>

<h2 class="titre1">Tutoriel</h2>


<h3>1- Analyser le plat en face de soi</h3>
<img class="illu" src="/medias/kiwi-analyse.webp">
  
<p>Tout d'abord commencez par étudiez votre adversaire. Le plat comprend-il de la sauce? Des fruits ou des légumes particuliers? Apprenez à connaître quels aliments sont dangereux ou pas, prenez par exemple la cerise, un fruit réputé pour ses taches tenaces. 
</p>

<h3>2- Analyser les enjeux et les risques de votre repas</h3>
  <p>Portez-vous des vêtements clairs? Foncés? Sont-ils cher à vos yeux ou non?
Pensez que plus votre vêtement sera clair, plus les taches de nourriture seont visibles.</p>


<h3>3- Protégez vous en conséquence</h3>
<p>La méthode la plus courante reste le sopalin / la serviette de table posée sur ses jambes ou contre la poitrine.</p>
</p>

  <h3>4- Ce n'est pas suffisant?</h3>
<p>Ne vous inquiétez pas, nous avons la solution. Si la serviette ne marche pas et que vous continuez à faire des taches alors il faut passer à l'étape supérieure, c'est-à-dire à une protection encore plus radicale.</p>
</div>


   <div id="cookiePopup">
    <h4><span id="cookie-text"><img class="cookie-img" src="/medias/Cookie.svg">Utilisation des cookies</span></h4>
    <p>Ce site utilise des cookies ou une technologie similaire, pour améliorer votre expérience et vous proposer des résultats personnalisés, veuillez accepter notre <a href="/confidentialite.php">Politique de confidentialité</a>.</p>
    <button id="acceptCookie">Accepter</button>
  </div>




</main>
  

<footer>
    <nav class="links" style="--items: 3;">
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