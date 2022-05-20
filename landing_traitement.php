<?php
session_start();
//var_dump($_SESSION);
require_once 'config.php'; // ajout connexion bdd
// si la session n'existe pas soit si l'on est pas connecté on redirige
if(!isset($_SESSION['email'])){
    //header('Location:index.php');
    die();
}

//// On récupere les données de l'utilisateur
//$req = $bdd->prepare('SELECT password, email FROM utilisateurs WHERE token = ?');
//$req->execute(array($_SESSION['email']));
//$data = $req->fetch();

header("Location: index.php");
exit();


?>