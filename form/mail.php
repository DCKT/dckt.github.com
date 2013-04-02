<?php

if (isset($_POST['mail']) && isset($_POST['message'])):
	if ($_POST['mail'] == '' && $_POST['message'] == ''):
		echo 'No !';
	else :
		$nom = htmlentities($_POST['nom']);
		$email = htmlentities($_POST['email']);
		$message = htmlentities($_POST['message']);

		$message = "<pre>".$message."</pre>";
		$sujet = $nom." vous a envoyé un message.";

		mail("137479@supinfo.com", $sujet, $message);
	endif;
endif;

header('Location:../index.html');
?>
