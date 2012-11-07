
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Contact - Développeur web et mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Une question, un contrat freelance, un stage à me proposer ? N'hésitez pas à me contacter.">
		<meta name="author" content="Deconinck Thomas">

		<link href="css/main.css" rel="stylesheet" />
		<link href="js/google-code-prettify/prettify.css" rel="stylesheet" />

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->


	</head>

	<body data-spy="scroll" data-target=".bs-docs-sidebar">
	
	<div class="container-fluid">
		<div class="row-fluid">
			<?php require_once('include/nav.php'); ?>
			<div data-spy="scroll" class="span8 offset3 contact">
				<header>
					<h1>Contact</h1>
				</header>
				
				<form action="form/mail.php" method="post" class="form-horizontal span10">
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
						<a href="form/cv.pdf" class="thumbnail">
							<img src="img/cv-logo.png" alt="CV" style="width:130px;height:130px;" />
							<strong>Téléchargez mon C.V</strong>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>






		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/google-code-prettify/prettify.js"></script>
		<script src="js/bootstrap-transition.js"></script>
		<script src="js/bootstrap-alert.js"></script>
		<script src="js/bootstrap-modal.js"></script>
		<script src="js/bootstrap-dropdown.js"></script>
		<script src="js/bootstrap-scrollspy.js"></script>
		<script src="js/bootstrap-tab.js"></script>
		<script src="js/bootstrap-tooltip.js"></script>
		<script src="js/bootstrap-popover.js"></script>
		<script src="js/bootstrap-button.js"></script>
		<script src="js/bootstrap-collapse.js"></script>
		<script src="js/bootstrap-carousel.js"></script>
		<script src="js/bootstrap-typeahead.js"></script>
		<script src="js/bootstrap-affix.js"></script>
		<script src="js/application.js"></script>
	</body>
</html>
