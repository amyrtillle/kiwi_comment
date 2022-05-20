<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta lang="fr">
  <meta name="viewport" content="width=device-width">

  <link href="./css/style.css" rel="stylesheet" type="text/css" />
  <link href="./css/header-footer.css" rel="stylesheet" type="text/css" />
  <link href="./css/confidentialite.css" rel="stylesheet" type="text/css" />
  <link href="./css/cookie.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="./medias/logo.svg">

  <title>kiwi comment - Politique de confidentialité</title>
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

  
  <div id="confidentialité">
    <h1>POLITIQUE DE CONFIDENTIALITÉ DONNÉES PERSONNELLES : Définitions</h1>

    <p><span class="titre">L'Éditeur : La personne, physique ou morale, qui édite les services de communication au
        public en ligne.</span>
    <ul>
      <li>Le Site : L'ensemble des sites, pages Internet et services en ligne proposés par l'Éditeur.</li>
      <li>L'Utilisateur : La personne utilisant le Site et les services.</li>
    </ul>
    </p>

    <p><span class="titre">1- Nature des données collectées</span><br>
      Dans le cadre de l'utilisation des Sites, l'Éditeur est susceptible de collecter les catégories de données
      suivantes concernant ses Utilisateurs :
    <ul>
      <li>Données relatives à la vie personnelle (habitudes de vie, situation familiale, hors données sensibles ou
        dangereuses)</li>
      <li> Données de connexion (adresses IP, journaux d'événements...)</li>
    </ul>
    </p>

    <p><span class="titre">2- Communication des données personnelles à des
        tiers</span><br>
      Pas de communication à des tiers<br>
      Vos données ne font l'objet d'aucune communication à des tiers. Vous êtes toutefois informés qu'elles pourront
      être divulguées en application d'une loi, d'un règlement ou en vertu d'une décision d'une autorité réglementaire
      ou judiciaire compétente.</p>

    <p><span class="titre">3- Information préalable pour la communication des données personnelles à des tiers en cas de
        fusion / absorption</span><br>
      Information préalable et possibilité d’opt-out avant et après la fusion / acquisition<br>
      Dans le cas où nous prendrions part à une opération de fusion, d’acquisition ou à toute autre forme de cession
      d’actifs, nous nous engageons à garantir la confidentialité de vos données personnelles et à vous informer avant
      que celles-ci ne soient transférées ou soumises à de nouvelles règles de confidentialité.</p>

    <p><span class="titre">4- Agrégation des données</span><br>
      Agrégation avec des données non personnelles<br>
      Nous pouvons publier, divulguer et utiliser les informations agrégées (informations relatives à tous nos
      Utilisateurs ou à des groupes ou catégories spécifiques d'Utilisateurs que nous combinons de manière à ce qu'un
      Utilisateur individuel ne puisse plus être identifié ou mentionné) et les informations non personnelles à des fins
      d'analyse du secteur et du marché, de profilage démographique, à des fins promotionnelles et publicitaires et à
      d'autres fins commerciales.<br>
      Agrégation avec des données personnelles disponibles sur les comptes sociaux de l'Utilisateur<br>
      Si vous connectez votre compte à un compte d’un autre service afin de faire des envois croisés, ledit service
      pourra nous communiquer vos informations de profil, de connexion, ainsi que toute autre information dont vous avez
      autorisé la divulgation. Nous pouvons agréger les informations relatives à tous nos autres Utilisateurs, groupes,
      comptes, aux données personnelles disponibles sur l’Utilisateur.</p>

    <p><span class="titre">5- Collecte des données d'identité</span><br>
      Consultation libre<br>
      La consultation du Site ne nécessite pas d'inscription ni d'identification préalable. Elle peut s'effectuer sans
      que vous ne communiquiez de données nominatives vous concernant (nom, prénom, adresse, etc). Nous ne procédons à
      aucun enregistrement de données nominatives pour la simple consultation du Site.</p>

    <p><span class="titre">6- Collecte des données d'identification</span><br>
      Utilisation de l'identifiant de l’utilisateur uniquement pour l’accès aux services Nous utilisons vos identifiants
      électroniques seulement pour et pendant l'exécution du contrat.</p>

    <p><span class="titre">7- Collecte des données du terminal</span><br>
      Collecte des données de profilage et des données techniques à des fins de fourniture
      du service<br>
      Certaines des données techniques de votre appareil sont collectées automatiquement par le Site. Ces informations
      incluent notamment votre adresse IP, fournisseur d'accès à Internet, configuration matérielle, configuration
      logicielle, type et langue du navigateur... La collecte de ces données est nécessaire à la fourniture des
      services.<br>
      Collecte des données techniques à des fins publicitaires, commerciales et statistiques<br>
      Les données techniques de votre appareil sont automatiquement collectées et enregistrées par le Site, à des fins
      publicitaires, commerciales et statistiques. Ces informations nous aident à personnaliser et à améliorer
      continuellement votre expérience sur notre Site. Nous ne collectons ni ne conservons aucune donnée nominative
      (nom, prénom, adresse...) éventuellement attachée à une donnée technique. Les données collectées sont susceptibles
      d’être revendues à des tiers.</p>

    <p><span class="titre">8- Cookies</span><br>
      Durée de conservation des cookies<br>
      Conformément aux recommandations de la CNIL, la durée maximale de conservation des cookies est de 13 mois au
      maximum après leur premier dépôt dans le terminal de l'Utilisateur, tout comme la durée de la validité du
      consentement de l’Utilisateur à l’utilisation de ces cookies.<br>
      La durée de vie des cookies n’est pas prolongée à chaque visite. Le consentement de l’Utilisateur devra donc être
      renouvelé à l'issue de ce délai.<br>
      Finalité cookies<br>
      Les cookies peuvent être utilisés pour des fins statistiques notamment pour optimiser les services rendus à
      l'Utilisateur, à partir du traitement des informations concernant la fréquence d'accès, la personnalisation des
      pages ainsi que les opérations réalisées et les informations consultées.<br>
      Vous êtes informé que l'Éditeur est susceptible de déposer des cookies sur votre terminal. Le cookie enregistre
      des informations relatives à la navigation sur le service (les pages que vous avez consultées, la date et l'heure
      de la consultation...) que nous pourrons lire lors de vos visites ultérieures.<br>
      Droit de l'Utilisateur de refuser les cookies<br>
      Vous reconnaissez avoir été informé que l'Éditeur peut avoir recours à des cookies. Si vous ne souhaitez pas que
      des cookies soient utilisés sur votre terminal, la plupart des navigateurs vous permettent de désactiver les
      cookies en passant par les options de réglage.</p>

    <p><span class="titre">9 - Conservation des données techniques</span><br>
      Durée de conservation des données techniques<br>
      Les données techniques sont conservées pour la durée strictement nécessaire à la réalisation des finalités visées
      ci-avant.</p>

    <p><span class="titre">10- Délai de conservation des données personnelles et d'anonymisation<br>
        Pas de conservation des données</span><br>
      Nous ne conservons aucune donnée personnelle au delà de votre durée de connexion au service pour les finalités
      décrites dans les présentes Politique de confidentialité.<br>
      Suppression des données après suppression du compte<br>
      Des moyens de purge de données sont mis en place afin d'en prévoir la suppression effective dès lors que la durée
      de conservation ou d'archivage nécessaire à l'accomplissement des finalités déterminées ou imposées est atteinte.
      Conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, vous
      disposez par ailleurs d'un droit de suppression sur vos données que vous pouvez exercer à tout moment en prenant
      contact avec l'Éditeur.<br>
      Suppression des données après 3 ans d'inactivité<br>
      Pour des raisons de sécurité, si vous ne vous êtes pas authentifié sur le Site pendant une période de trois ans,
      vous recevrez un e-mail vous invitant à vous connecter dans les plus brefs délais, sans quoi vos données seront
      supprimées de nos bases de données.</p>

    <p><span class="titre">11- Suppression du compte</span><br>
      Suppression du compte à la demande<br>
      L'Utilisateur a la possibilité de supprimer son Compte à tout moment, par simple demande à l'Éditeur OU par le
      menu de suppression de Compte présent dans les paramètres du Compte le cas échéant.<br>
      Suppression du compte en cas de violation de la Politique de Confidentialité<br>
      En cas de violation d'une ou de plusieurs dispositions de la Politique de Confidentialité ou de tout autre
      document incorporé aux présentes par référence, l'Éditeur se réserve le droit de mettre fin ou restreindre sans
      aucun avertissement préalable et à sa seule discrétion, votre usage et accès aux services, à votre compte et à
      tous les Sites.</p>

    <p><span class="titre">12- Indications en cas de faille de sécurité décelée
        par l'Éditeur</span><br>
      Information de l'Utilisateur en cas de faille de sécurité<br>
      Nous nous engageons à mettre en oeuvre toutes les mesures techniques et organisationnelles appropriées afin de
      garantir un niveau de sécurité adapté au regard des risques d'accès accidentels, non autorisés ou illégaux, de
      divulgation, d'altération, de perte ou encore de destruction des données personnelles vous concernant. Dans
      l'éventualité où nous prendrions connaissance d'un accès illégal aux données personnelles vous concernant stockées
      sur nos serveurs ou ceux de nos prestataires, ou d'un accès non autorisé ayant pour conséquence la réalisation des
      risques identifiés ci-dessus, nous nous engageons à :
    <ul>
      <li>Vous notifier l'incident dans les plus brefs délais ;</li>
      <li>Examiner les causes de l'incident et vous en informer ;</li>
      <li>Prendre les mesures nécessaires dans la limite du raisonnable afin d'amoindrir les effets négatifs et
        préjudices pouvant résulter du dit incident.</li>
    </ul>
    Limitation de la responsabilité<br>
    En aucun cas les engagements définis au point ci-dessus relatifs à la notification en cas de faille de sécurité ne
    peuvent être assimilés à une quelconque reconnaissance de faute ou de responsabilité quant à la survenance de
    l'incident en question.</p>

    <p><span class="titre">13- Transfert des données personnelles à l'étranger</span><br>
      Pas de transfert en dehors de l'Union européenne<br>
      L'Éditeur s'engage à ne pas transférer les données personnelles de ses Utilisateurs en dehors de l'Union
      européenne.<br>
      <a
        src="https://www.cnil.fr/fr/la-protection-des-donnees-dans-le-monde">https://www.cnil.fr/fr/la-protection-des-donnees-dans-le-monde</a>
    </p>

    <p><span class="titre">14- Modification de la politique de confidentialité</span><br>
      En cas de modification de la présente Politique de Confidentialité, engagement de ne pas baisser le niveau de
      confidentialité de manière substantielle sans l'information préalable des personnes concernées<br>
      Nous nous engageons à vous informer en cas de modification substantielle de la présente Politique de
      Confidentialité, et à ne pas baisser le niveau de confidentialité de vos données de manière substantielle sans
      vous en informer et obtenir votre consentement.</p>

    <p><span class="titre">15- Droit applicable et modalités de recours</span><br>
      Clause d'arbitrage<br>
      Vous acceptez expressément que tout litige susceptible de naître du fait de la présente Politique de
      Confidentialité, notamment de son interprétation ou de son exécution, relèvera d'une procédure d'arbitrage soumise
      au règlement de la plateforme d'arbitrage choisie d'un commun accord, auquel vous adhérerez sans réserve.</p>

    <p><span class="titre">16- Portabilité des données</span><br>
      Portabilité des données<br>
      L'Éditeur s'engage à vous offrir la possibilité de vous faire restituer l'ensemble des données vous concernant sur
      simple demande. L'Utilisateur se voit ainsi garantir une meilleure maîtrise de ses données, et garde la
      possibilité de les réutiliser. Ces données devront être fournies dans un format ouvert et aisément réutilisable.
    </p>

  </div>
  <div id="cookiePopup">
    <h4><span id="cookie-text"><img class="cookie-img" src="./medias/Cookie.svg">Utilisation des cookies</span></h4>
    <p>Ce site utilise des cookies ou une technologie similaire, pour améliorer votre expérience et vous proposer des
      résultats personnalisés, veuillez accepter notre <a href="./confidentialite.php">Politique de
        confidentialité</a>.</p>
    <button id="acceptCookie">Accepter</button>
  </div>
  <script src="./js/cookies.js"></script>

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
  
</body>

</html>