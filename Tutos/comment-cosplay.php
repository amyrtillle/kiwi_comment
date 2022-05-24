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

  <title>kiwi Comment faire un cosplay</title>
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


<h1 id="titre">Comment faire un cosplay</h1>
<div>

<p>Vous rêvez d'être dans la peau de votre personnage préféré mais vous ne savez pas comment s'y prendre? Ce tutoriel est fait pour vous.</p>

<h2 class="titre1">Qu'est ce que le cosplay?</h2>
<p>Le cosplay (コスプレ, kosupure?) ou costumade, est un loisir qui consiste à jouer le rôle d'un personnage de fiction en imitant son costume, ses cheveux — à l'aide d'une perruque ou en réalisant une coiffure identique — et son maquillage. On appelle les pratiquants des cosplayers (cosplayeur, cosplayeuse en français).

Les thèmes les plus courants sont les personnages de mangas, de bande dessinée, d'animation japonaise, de dessins animés, de tokusatsu, de films, de jeux vidéo et de comics mais viennent à inclure également les séries télévisées et toute sorte de costumes à thème.</p>

<blockquote>Source: <a href="https://fr.wikipedia.org/wiki/Cosplay" target="_blank">Wikipédia</a></blockquote>
</div>

<div>

<h2 class="titre1">Tutoriel</h2>


<h3>1- Choisir le personnage que vous voulez cosplayer</h3>
<img class="illu" src="/medias/cosplay1.jpg">
  
<p>Il existe une infinité de personnages, comment choisir le votre? Le plus souvent les personnes auront tendance à choisir un personnage qu'ils apprécient énormément.</p>

<h3>2- Prenez vos mesures</h3>
  <p>
Avant tout achat il est primordial de connaître vos mesures afin de ne pas faire d'erreur de commande, il ne faudrait surtout pas qu'il vous manque des matériaux au moment de la fabrication. </p>


<h3>3- Commandez les matériaux</h3>
<p>Que ce soit sur internet ou en magasin,n'oubliez pas votre liste de course et respectez votre budget</p>



<p>Je n'ai pas vraiment les moyens de me fabriquer mon cosplay.

<br>Ce n'est pas très grave, les cosplays s'achètent aussi sur internet, attention la qualité peut parfois laisser à désirer.</p>
</div>

    <h3>4- Découpez vos tissus selon vos mesures</h3>
    <p> Soyez minutieux et ne coupez pas de travers </p>

    <h3> 5- Ajoutez les derniers détails</h3>

<h3>6- Amusez-vous</h3>
    <p> Soyez fier de votre travail. Vous pouvez jouer dans la peau du personnage ou non, libre à vous </p>
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