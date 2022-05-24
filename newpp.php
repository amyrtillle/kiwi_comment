<?php
session_start();

require_once 'config.php';

try {
    $conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
} catch (PDOException $e) {
    die ("Failed: " . $e);
}



if ($_POST['newpp'] != $_SESSION['pp']) {

    $imgData = file_get_contents($_FILES['newpp']['tmp_name']);
    $imgType = getimagesize($_FILES['newpp']['tmp_name'])["mime"];


    $insert = $bdd->prepare('UPDATE utilisateurs SET pp = ?, pp_type = ? WHERE email = ?');
    $insert->execute([$imgData, $imgType, $_SESSION["email"]]);



    header("location: ./landing.php?reg_err=successpp");
}
else
    header("location: ./landing.php?reg_err=errorpp");


?>