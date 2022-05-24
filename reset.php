<?php
require_once 'config.php';

// Création d'un connection à la BD
try{
    $conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
    // Vérification de la connection
} catch (PDOException $e){
    die ("Failed: ".$e);
}


$query = file_get_contents('./Kiwi.sql');
$queries = preg_split('~^([^)])(SKIP)(*F)|;~', $query);
array_pop($queries);
foreach ($queries as $req) {
    $res = $conn->query($req);
    if (!$res) die("Failed query: " . $req);
}

for ($k = 0; $k < sizeof($imgs); $k++) {
    $filename = $imgs[$k]['path'];

    echo $filename . '<br>';

    $img = file_get_contents($filename);
    $encdata = base64_encode($img);
//    // Output
    echo '<img src="data:image/png;base64,' . $encdata . '"/>';
    echo '<br>';

    try {
        $conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
        // Vérification de la connection
    } catch (PDOException $e) {
        die ("Failed: " . $e);
    }
    $query = $conn->prepare("UPDATE utilisateurs SET img = ? WHERE id = ?");
    $query->execute(array($img, $imgs[$k]['id']));
    $conn->query('KILL CONNECTION_ID()');
    $conn = null;
}
