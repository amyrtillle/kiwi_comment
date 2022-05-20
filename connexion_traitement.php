<?php
var_dump($_POST);
session_start();
$error_msg = "";
if(isset($_SESSION['email'])){
    header("Location: ./landing_traitement.php");
}

$_SESSION["error"] = "";
if(isset($_POST['email'])){

    require_once 'config.php';
    try {
        $conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
    } catch (PDOException $e) {
        die ("Failed: " . $e);
    }
    $query = 'SELECT password, email FROM utilisateurs WHERE email = ?;';
    $reqSub = $conn->prepare($query);
    $res=$reqSub->execute([$_POST['email']]);
    $conn->query('KILL CONNECTION_ID()');
    if (!$res) {//si la requête échoue, cela veut dire le pseudo rentré est incorrect

    }
    else{

        $row = $reqSub->fetchAll();
        var_dump($row);
        if(isset($row[0]['password'])){
            if ($_POST["password"] == $row[0]['password']) {
                $_SESSION["email"] = $row[0]['email'];

                header("Location: landing_traitement.php");
                exit();

            } else {
                $_SESSION["error"] = "Mot de passe incorrect";
            }
        }
        else{
            $_SESSION["error"] = "Nom d'utilisateur incorrect";
        }
    }
} else {
    $_SESSION["error"] = "email pas ouf";
}

header("Location: ./connexion.php");

?>