<?php

$filename='../images/acrylique.png';
$imagelink = file_get_contents($filename);
$filetype = mime_content_type($filename);
echo  $filetype;
// image string data into base64
$encdata = base64_encode($imagelink);

// Output

echo '<img src="data:image/png;base64,' . $encdata . '"/>';
echo '<br>';

require_once 'config.php';

// Création d'un connection à la BD
try {
    $conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", "toto", "chef");
    // Vérification de la connection
} catch (PDOException $e) {
    die ("Failed: " . $e);
}

$img = "data:" . $filetype . ";base64," . $encdata;

$query = $conn->prepare("UPDATE produit SET image = '$image' WHERE email = 5");
$query->execute(array('image' => $encdata));
if (!$query) die("Failed query: " . $query);

header("Location: ./inscription.php");


/*
$imagelink = file_get_contents('../images/acrylique.png');

// image string data into base64
$encdata = base64_encode($imagelink);

// Output

echo '<img src="data:image/png;base64,' . $encdata . '"/>';
echo '<br>';

require_once 'config.php';

// Création d'un connection à la BD
try {
    $conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
    // Vérification de la connection
} catch (PDOException $e) {
    die ("Failed: " . $e);
}

$query = $conn->prepare('UPDATE utilisateurs SET utilisateurs(image) = VALUES $encdata' WHERE);
$query->execute(array(
    'image' => $encdata));

if (!$query) {
    die("Failed query: " . $query);
}
*/


?>