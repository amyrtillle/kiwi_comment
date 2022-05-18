<?php 
    
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", "toto", "chef");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>