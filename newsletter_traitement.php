<?php
var_dump($_POST);
require_once 'config.php';
if(!empty($_POST['email_news']))
{
    $email_news = htmlspecialchars($_POST['email_news']);

    $email_news = strtolower($email_news);

    $check = $bdd->prepare('SELECT email_news FROM newsletter WHERE email_news = ?');
    $check->execute(array($email_news));
    $data = $check->fetch();
    $row = $check->rowCount();

    try {
        $conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
    } catch (PDOException $e) {
        die ("Failed: " . $e);
    }

    if($row == 0){
        if(strlen(email_news) <= 100){ // On verifie que la longueur du pseudo <= 100
            if(filter_var($email_news, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                $insert = $bdd->prepare('INSERT INTO newsletter(email_news) VALUES(:email_news)');
                $insert->execute(array(
                    'email_news' => $email_news,));

                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }else header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }else header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }else header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}




?>