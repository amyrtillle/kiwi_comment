<?php
var_dump($_POST);
require_once 'config.php';

if(!empty($_POST['titre']) && !empty($_POST['categorie']))
{
    $titre = htmlspecialchars($_POST['titre']);
    $categorie = htmlspecialchars($_POST['categorie']);

    $check = $bdd->prepare('SELECT * FROM tutos WHERE titre = ? AND categorie = ?');
    $check->execute(array($titre,$categorie));
    $data = $check->fetch();
    $row = $check->rowCount();


    if($row == 0){
        if(strlen($titre) <= 100){ // On verifie que la longueur du mail <= 100

            $insert = $bdd->prepare('INSERT INTO tutos(id, titre, categorie) VALUES(NULL, :titre, :categorie)');
            $insert->execute(array(

                ':titre' => $titre,
                ':categorie' => $categorie,
            ));
            //echo $insert->debugDumpParams();

            //echo var_dump($insert->errorInfo());
            //exit();/*
            header('Location: tutos.php?reg_err=success');

        }else {header('Location: tutos.php?reg_err=titre');}
    }else {header('Location: tutos.php?reg_err=categorie');}
}else { //header('Location: tutos.php?reg_err=already');

}

?>
