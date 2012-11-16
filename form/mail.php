<?php

$nom = $_POST["nom"];
$email = $_POST["mail"];
$message = $_POST["message"];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: '.$nom.' <'.$email.'>'."\r\n\r\n";

$sujet = $nom." vous a envoyé un message.";
$corps = "<pre> Nom :".$nom." \n Email :".$email." \n\n".$message."</pre>";

if (!mail("137479@supinfo.com", $sujet, $corps, $headers))
{
	$reponse = 'Erreur lors de l\'envoi du mail !';
}
else
{	
	$reponse = 'Mail envoyé !';
}


?>