<?
$nom = $_POST["nom"];
$email = $_POST["mail"];
$message = $_POST["message"];

$sujet = $nom." vous a envoyé un message.";
$corps = "<pre> Nom :".$nom." \n Email :".$email." \n\n".$message."</pre>";


mail("137479@supinfo.com", $sujet, $corps);

?>