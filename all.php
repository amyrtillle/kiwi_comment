<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta lang="fr">
  <meta name="viewport" content="width=device-width">

  
  
  <link href="./css/style.css" rel="stylesheet" type="text/css" />
  <link href="./css/cookie.css" rel="stylesheet" type="text/css" />
  <link href="./css/header-footer.css" rel="stylesheet" type="text/css" />
  <link href="./css/all.css" rel="stylesheet" type="text/css" />
  


  
  <link rel="icon" href="./medias/logo.svg">

  <title>kiwi Comment trouver tout les tutos</title>
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
    <a href="./premium.php">Nos offres premium</a>
		<span class="line"></span>
	</nav>
</header>
<main>


  <div class="all">
      <div class="art">
        <a href="./Tutos/comment-ouvrir-un-yaourt.php">
          <img class="couverture" src="./medias/yaourt.jpg" alt="" />
          <p>Comment ouvrir un yaourt</p>
        </a>
      </div>
    
      <div class="art"> 
        <a href="./Tutos/comment-eviter-taches-de-kiwi.php">
        <img class="couverture" src="./medias/pineapple.webp" alt="" />
        <p>Comment éviter les taches de kiwi</p>
        </a>
      </div>
    
      <div class="art">
        <a href="./Tutos/comment-respirer.php">
        <img class="couverture" src="./medias/breathe.jpg" alt="" />
        <p>Comment respirer</p>
        </a>
      </div>

      <div class="art">
          <a href="./Tutos/comment-monter-un-meuble.php">
              <img class="couverture" src="./medias/aeki.jpg" alt="" />
              <p>Comment monter un meuble aeki</p>
          </a>
      </div>
      
      <div class="art">
        <a href="./Tutos/comment-preparer-oral.php">
        <img class="couverture" src="./medias/oral.jpg" alt="" />
        <p>Comment préparer un oral</p>
           </a>
      </div>
    
      <div class="art">
        <a href="./Tutos/comment-cosplay.php">
        <img class="couverture" src="./medias/cosplay.jpg" alt="" />
        <p>Comment faire un cosplay</p>
        </a>
      </div>
    
      <div class="art">
        <a href="./Tutos/comment-survivre-sur-twitter.php">
        <img class="couverture" src="./medias/twitter.jpg" alt="" />
        <p>Comment survivre sur Twitter</p>
        </a>
      </div>
    
      <div class="art"> 
        <a href="./Tutos/comment-boire-eau.php">
        <img class="couverture" src="./medias/water.jpg" alt="" />
        <p>Comment boire de l'eau</p>
          </a>
      </div>
    
      <div class="art">
         <a href="./Tutos/comment-gagner-argent.php">
        <img class="couverture" src="./medias/money.jpg" alt="" />
        <p>Comment gagner de l'argent</p>
         </a>
      </div>
    
      <div class="art">
        <a href="./Tutos/comment-se-faire-des-amis.php">
          <img class="couverture" src="./medias/ami.jpg" alt="" />
          <p>Comment se faire des amis</p>
        </a>
      </div>
    
      <div class="art"> 
        <a href="./Tutos/comment-cacher-un-cadavre.php">
        <img class="couverture" src="./medias/cadavre.jpg" alt="" />
        <p>Comment cacher un cadavre</p>
        </a>
      </div>
    
      <div class="art"> 
         <a href="./Tutos/comment-ne-pas-se-perdre-ikea.php">
        <img class="couverture" src="./medias/ikea.jpg" alt="" />
        <p>Comment éviter de se perdre dans un Ikea</p>
         </a>
      </div>
    
      <div class="art"> 
        <a href="./Tutos/comment-eplucher-une-banane.php">
        <img class="couverture" src="./medias/banane.jpg" alt="" />
          <p>Comment éplucher une banane</p>
        </a>
      </div>
    
      <div class="art"> 
         <a href="./Tutos/comment-finir-minecraft.php">
        <img class="couverture" src="./medias/minecraft.jpg" alt="" />
           <p>Comment finir minecraft</p>
         </a>
      </div>
    
      <div class="art">
          <a href="./Tutos/comment-fixer-du-regard.php">
        <img class="couverture" src="./medias/regard.jpg" alt="" />
              <p>Comment fixer du regard</p>
          </a>
      </div>
    
      <div class="art">
          <a href="./Tutos/comment-percer-sur-bypolar-media.php">
        <img class="couverture" src="./medias/bypolarmedia.jpg" alt="" />
              <p>Comment percer sur Bypolar Media</p>
          </a>
      </div>
    
      <div class="art">
          <a href="./Tutos/comment-prendre-soin-de-sa-plante.php">
        <img class="couverture" src="./medias/plante2.jpg" alt="" />
          <p>Comment prendre soin de sa plante ft Lavandula</p>
          </a>
      </div>
    
      <div class="art"> 
        <img class="couverture" src="./medias/couv1.jpg" alt="" />
      </div>
    
      <div class="art"> 
        <img class="couverture" src="./medias/couv1.jpg" alt="" />
      </div>
    
      <div class="art"> 
        <img class="couverture" src="./medias/couv1.jpg" alt="" />
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
              <button type="submit">S'inscire</button>
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