<?php
$nom = htmlspecialchars($_POST["name"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$phone = htmlspecialchars($_POST["phone"]);
$mail = htmlspecialchars($_POST["mail"]);
$message = htmlspecialchars($_POST["message"]);


$to = "test@hotmail.fr";
$subject = "Nv Message";

$body="Nom:$nom,Prénom:$prenom,Telephone:$phone,Email:$mail,Message:$message";

$headers = "From: $mail\r";

mail($to,$subject,$body,$headers);
?>