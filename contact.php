<?php 
$type = "contact"; 
$description = "Vous avez une question ? Un contrat freelance à proposer ? Un stage ? N'hésitez pas à me contacter !";
require_once('include/header.php');
require_once('include/nav.php');
?>

		<div data-spy="scroll" class="span8 offset3 contact">			
				<div class="span5 offset7 alert alert-success mail-ok hide">
					
				</div>	
			<header>
				<h1>Contact</h1>
			</header>
			
			<form action="form/mail.php" method="post" class="form-horizontal span10" name="contact_form">
				<legend>
					Une question, un contrat freelance, un stage à me proposer ?
				</legend>
				<div class="control-group">
				    <label class="control-label" for="nom">Nom / Prénom : </label>
				    <div class="controls">
						<input type="text" placeHolder="Nom et/ou prénom" name="nom" id="nom" class="span9" required/>
				    </div>
				 </div>
				 <div class="control-group">
				    <label class="control-label" for="mail">Email: </label>
				    <div class="controls">
						<input type="email" placeHolder="Votre email.." name="mail" id="mail" class="span9" required/>
				    </div>
				 </div>
				 <div class="control-group">
				    <label class="control-label" for="message">Message : </label>
				    <div class="controls">
						<textarea class="span12" rows="6" id="message" name="message" placeHolder="Votre message ..." required></textarea>
				    </div>
				 </div>
				 <div class="controls">
			      <button type="submit" class="span5 btn btn-danger btn-large">Envoyer !</button>
			    </div>
			</form>
			<ul class="thumbnails">
				<li>
					<a href="form/cv.pdf" class="thumbnail" target="_blank">
						<img src="img/cv-logo.png" alt="CV" style="width:130px;height:130px;" />
						<strong>Téléchargez mon C.V</strong>
					</a>
				</li>
			</ul>
		</div>


	</div>
</div>





		<?php require_once('include/jsfile.php') ?>
	</body>
</html>
