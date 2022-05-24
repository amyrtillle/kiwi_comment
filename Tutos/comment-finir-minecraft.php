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

  <title>kiwi Comment finir Minecraft</title>
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


<h1 id="titre">Comment Finir Minecraft</h1>
  
<h3>1- Trouver un arbre à couper</h3>
<p>Avant de commencer à explorer les environs, vous devez impérativement trouver du bois pour avoir assez pour fair eune table de craft, des batons et du bois en réserve.</p>
<h3>2- Prenez de la pierre pour fair eun équipement meilleur</h3>
    <p>Grâce à une pioche en bois, allez chercher de la pierre en dessous de vous ou dans une grotte pour aller au niveau supérieur.
        Inutile de garder votre armement en bois. Sa durabilité est médiocre, son efficacité et ses dégats sont moindres à côté d'un bon équipement en pierre. </p>

<h3>3- Trouver de la nourriture </h3>
    <p>Avant d'aller miner dans une grotte pour trouver du fer et du diamant </p>

<h3>4- Aller miner</h3>
    <p>Faites attention aux monstres tels que les creepers, les squelettes, les zombies et les araignées.
        Si vous trouvez du fer, vous pouvez commencer par vous faire un bouclier pour vous protéger des dégats et épargner votre nourriture.</p>

    <h3>5- Trouver un lac de lave</h3>
    <p>La prochaine étape pour battre Minecraft est d'aller au Nether, pour cela il faut de l'obsidienne, et donc de la lave et un sceau d'eau.
        Si vous connaissez la technique pou faire un portal avec un sceau, faites-le, sinon vous aurez besoin d'une pioche en diamant
        et d'un sceau d'eau pour récupérer l'obsidienne</p>


<h3>6- Aller dans le Nether</h3>
<p>Pour trouver et activer le portail de l'End il faut faire des yeux de l'Ender, la recette constituant un oeil d'enderman et d ela poudre de Blaze.
préparez vous en conséquence, le Nether est dangereux, que ce soit par ses monstres, sa lave et la map. Prenez beaucoup de nourriture pour vous soigner,
du bois en réserve ainsi que du fer/ diamant pour ne jamais manquer de ressource. Prenez aussi beaucoup de blocs de pierre pour vous frayer un chemin
plus facilement à travers le vide et les lacs de lave. Si vous avez l'occasion de vous faire des potions de résistance au feu n'hésitez pas
cela pourrait bien vous sauver. Il n'y a pas de cycl jour/nuit dans le nether et si vous mettez un lit pour mettre votre point d'apparition vous exploserez.</p>

    <h3>7- Se diriger vers le Stronghold</h3>
    <p> Sortez du nether et utilisez vos yeux de l'end qui vont vous montrer la direction du portail, suivez la direction pendant un bon moment.
        N'utilisez pas tous vos yeux de l'ender car vous en aurez besoin pour activer le portail.</p>

    <h3>8- Trouver le portail</h3>
  <p>Le stronghold est long et c'est un vrai labyrinthe rempli de monstres et de ressources intéresantes</p>

    <h3>8- Combattre l'Ender Dragon</h3>
    <p> Prenez un sceau d'eau pour ne pas faire une chute terrible, de la nourriture, ...
    Détruisez les cristaux en haut des tours d'obsidienne pour empêcher au dragon de se régnérer. Vous pouvez utiliser un arc
        ou les frapper directement avec une épée ou une hache (posez un bloc devant vous pour amoindrir le choc de l'explosion et
        éviter de vous propulser dans les airs</p>








  

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