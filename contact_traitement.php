<?php
var_dump($_POST);

require_once 'config.php';

if(!empty($_POST['comments']) && !empty($_POST['email']) && !empty($_POST['prenom']) && !empty($_POST['nom']  && !empty($_POST['tel'])))
{
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $comments = htmlspecialchars($_POST['comments']);

    $email = strtolower($email);

    $check = $bdd->prepare('SELECT nom, prenom, email, tel, comments FROM contact WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    try {
        $conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
    } catch (PDOException $e) {
        die ("Failed: " . $e);
    }

    if($row == 0){
        if(strlen($prenom) <= 100){ // On verifie que la longueur du prenom <= 100
            if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                    if(strlen($tel) <= 14){ // si le numéro de téléphone est inf&érieur ou égal à 14 caractères

                        $insert = $bdd->prepare('INSERT INTO contact(email, nom, prenom, comments, tel) VALUES(:email, :nom, :prenom, :comments, :tel)');
                        $insert->execute(array(
                            'email' => $email,
                            'nom' => $nom,
                            'prenom' => $prenom,
                            'comments' => $comments,
                            'tel' => $tel,

                        ));
                        //exit();
                        header('Location:contact.php?reg_err=success');

                    }else header('Location: contact.php?reg_err=tel');

                }else header('Location: contact.php?reg_err=email');

            }else header('Location: contact.php?reg_err=email_length');

        }else header('Location: contact.php?reg_err=prenom_length');

    }else header('Location: contact.php?reg_err=already');

}

?>
