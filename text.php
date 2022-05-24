<?php
session_start();

    echo $_SESSION["prenom"];
    echo '<br>';
    echo $_SESSION["pp"];
echo '<img src="./pp.php?email='.$_SESSION["email"].'" alt = "profil picture of '.$_SESSION["pseudo"]. '" width = "250px" height ="250px"/>';
?>