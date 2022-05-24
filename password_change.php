<?php
session_start();

require_once 'config.php';

try {
    $conn = new PDO("mysql:host=localhost;dbname=Kiwi;charset=utf8", toto, chef);
} catch (PDOException $e) {
    die ("Failed: " . $e);
}


$query = "UPDATE `utilisateurs` SET `password` = ? WHERE `email` = ? ;";

$change = $conn ->prepare($query);

if ($_POST['new_password'] == $_POST['new_password1']) {

    $change->execute([$_POST['new_password'], $_SESSION['email']]);

    $conn->query('KILL CONNECTION_ID()');

    header("location: ./landing.php?reg_err=success");
}
else
header("location: ./landing.php?reg_err=error");


?>