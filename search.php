<?php

/*$query = $_GET['query'];
// gets value sent over search form

$min_length = 3;
// you can set minimum length of the query if you want

if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

    $query = htmlspecialchars($query);
    // changes characters used in html to their equivalents, for example: < to &gt;

    $query = mysql_real_escape_string($query);
    // makes sure nobody uses SQL injection

    $raw_results = query("SELECT * FROM tutos WHERE (`titre` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());

    // * means that it selects all fields, you can also write: `id`, `title`, `text`
    // articles is the name of our table

    // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
    // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
    // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

    if(num_rows($raw_results) > 0){ // if one or more rows are returned do following

        while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

            echo "<p><h3>".$results['titre']."</h3>".$results['text']."</p>";
            // posts results gotten from database(title and text) you can also show id ($results['id'])
        }

    }
    else{ // if there is no matching rows do following
        echo "No results";
    }

}
else{ // if query length is less than minimum
    echo "Minimum length is ".$min_length;
}*/

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
    $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die("Une erreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET["titre"]) == "Rechercher")
{
    $titre = htmlspecialchars($_GET['titre']);

 $titre = trim($titre); //pour supprimer les espaces dans la requête de l'internaute
 $titre = strip_tags($titre); //pour supprimer les balises html dans la requête

 if (isset($titre))
 {
  $titre = strtolower($titre);
  $check = $bdd -> prepare('SELECT titre FROM tutos WHERE titre LIKE ?');
  $check->execute(array("%".$titre."%", "%".$titre."%"));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
    ?>