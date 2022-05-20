<?php
session_start();
$error_msg = "";
if(isset($_SESSION['IdUser'])){
    header("Location: ./index.php");
    exit();
}
if(isset($_POST['Nom'])){

    require_once 'config.php';
    try {
        $conn = new PDO(DB, USER, PWD);
    } catch (PDOException $e) {
        die ("Failed: " . $e);
    }
    $query = 'SELECT Psw, Id FROM User WHERE Nom = ?;';
    $reqSub = $conn->prepare($query);
    $res=$reqSub->execute([$_POST['Nom']]);
    $conn->query('KILL CONNECTION_ID()');
    if (!$res) {//si la requête échoue, cela veut dire le pseudo rentré est incorrect

    }
    else{

        $row = $reqSub->fetchAll();
        if(isset($row[0]['Psw'])){
            if ($_POST["Psw"] == $row[0]['Psw']) {
                $_SESSION["IdUser"] = $row[0]['Id'];
                $_SESSION["NomUser"] = $_POST['Nom'];
                header("Location: ./index.php");
                exit();

            } else {
                $error_msg = "Mot de passe incorrect";
            }
        }
        else{
            $error_msg = "Nom d'utilisateur incorrect";
        }
    }
}
?>
