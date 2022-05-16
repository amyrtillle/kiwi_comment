<?php 
    
    try 
    {
        $bdd = new PDO("mysql:host=toto;dbname=Kiwi;charset=utf8", "CHANGER_LOGIN", "CHANGER_PASS");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>