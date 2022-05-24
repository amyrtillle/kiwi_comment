<!doctype html>
<html>
  <head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="./css/header-footer.css">
      <link rel="stylesheet" href="./css/compte.css">
      <link rel="stylesheet" href="./css/style.css">
      <link rel="stylesheet" href="./css/cookie.css">

      <link rel="stylesheet" href="./libs/sweetalert2.min.css">
    <link rel="stylesheet" href="./libs/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
              echo '<a href="./inscription.php"><span>S inscrire</span></a></li>';
          ?>

          <a href="./premium.php">Nos offres premium</a>
          <span class="line"></span>
      </nav>
  </header>

  <main class="content">

        <div class="container">
            <div class="col-md-12">
                <?php

                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>


                <div class="text-center">
                    <?php
                            session_start();


                    echo '<img class="profilpictures" src="./pp.php?email='.$_SESSION["email"].'" alt = "profil picture of '.$_SESSION["pseudo"]. '" width = "150px" />';
                    echo ' ';

                    ?>

                        <h1 class="p-5">Bonjour
                            <?php

                            try {
                                $conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
                            } catch (PDOException $e) {
                                die ("Failed: " . $e);
                            }
                            
                            echo $_SESSION['prenom'];
                            echo ' ';
                            echo $_SESSION['nom'] ;

                            ?> ! </h1>
                    <br>
                    <div class="button-container">
                        <div class="centre">
                            <a href="./deconnexion.php">
                            <button class="btns">
                                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                </svg>
                                <span class="txtdec">Déconnexion</span>
                            </button>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>    

      <div>
          <h1>Changer votre mot de passe</h1>

          <form action="./password_change.php" method="post">

              <p>
                  <label for="current_password">Mot de passe actuel</label>
                  <br/>
                  <input type="password" name="current_password" id="current_password" />
              </p>

              <p>
                  <label for="new_password">Nouveau mot de passe</label>
                  <br/>
                  <input type="password" name="new_password" class="new_password" />
              </p>
              <p>
                  <label for="new_password">Re-taper nouveau mot de passe</label>
                  <br/>
                  <input type="password" name="new_password1" class="new_password" />
              </p>

              <p>
                  <button class="change" type="submit">Changer le mot de passe</button>
              </p>

          </form>
      </div>

      <br>
      <hr />
      <br>

      <div>
          <h1>Changer votre photo de profil</h1>

          <?php
          session_start();


          echo '<img class="profilpictures" src="./pp.php?email='.$_SESSION["email"].'" alt = "profil picture of '.$_SESSION["pseudo"]. '" width = "150px" />';
          echo '<br>' . 'Votre photo de profil actuelle';

          ?>

          <form action="./newpp.php" method="post" enctype="multipart/form-data" class="ppp" >

              <p>
                  <div class="drop-zone">
                  <span class="drop-zone__prompt">Déposez votre photo ou cliquez ici pour sélectionner votre image</span>
                  <input type="file" name="newpp" class="drop-zone__input" accept="image/*" required>
              </div>
              </p>
              <p>
                  <button class="change" type="submit">Changer la photo de profil</button>
              </p>

          </form>

      </div>

      <?php
      if(isset($_GET['reg_err']))
      {
      $err = htmlspecialchars($_GET['reg_err']);

      switch($err)
      {
      case 'success':
          ?>
          <script>
              window.onload = function () {
                  mdpchanged();
              }
          </script>
          <?php
          break;

      case 'password':
      ?>
      <script>
          window.onload = function () {
              wrongmdp();
          }
      </script>
      <?php
      break;

      case 'successpp':
      ?>
      <script>
          window.onload = function () {
              successpp();
          }
      </script>
      <?php
      break;

      case 'errorpp':
      ?>
      <script>
          window.onload = function () {
              errorpp();
          }
      </script>
      <?php
      break;

      }}
      ?>



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
  <script src="./js/photos.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="./libs/sweetalert2.all.min.js"></script>
  <script src="./js/animations.js"></script>

    <script src="./libs/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="./libs/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./libs/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>