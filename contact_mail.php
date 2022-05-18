<?php
$toEmail = "Unstabletoto@protonmail.com";
$mailHeaders = "From: " . $_POST["your_name"] . "<". $_POST["your_email"] .">\r\n";
if(mail($toEmail, $_POST["comments"], $_POST["your_phone"], $mailHeaders)) {
    echo"<p class='success'>Mail de contact envoyé.</p>";
} else {
    echo"<p class='Error'>Un problème est survenu lors de l'envoi du mail.</p>";
}
?>