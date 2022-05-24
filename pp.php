<?php


require_once 'config.php';
try {
$conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
} catch (PDOException $e) {
die ("Failed: " . $e);
}

    $query = 'SELECT pp as pp, pp_type as pp_type FROM utilisateurs WHERE email = ?;';

$reqSub = $conn->prepare($query);
$res=$reqSub->execute([$_GET['email']]);
if (!$res) die ("failed query : " . $query);
$conn->query('KILL CONNECTION_ID()');
$conn = null;
$row = $reqSub->fetchAll();
header("content-type: " .$row[0]['pp_type']);
echo $row[0]['pp'];



?>