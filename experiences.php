<?php $type = "exp"; ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Deconinck Thomas - Développeur web et mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Retrouvez mes différentes expériences professionnelles dans l'informatique.">
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
			
			<div class="span8 offset3 exp">	
				<h1>Expériences professionnelles</h1>

				<div class="exp-list">
					<div class="arrow-tl">&nbsp;</div>
					<div class="timeline"></div>
				</div>

				<div class="list-exp-left">
					<div class="exp-box">
						<h2>Intégrateur web Symfony 2 Développeur iOS</h2>
						<p>
							Refonte du <a href="http://www.dowith.fr">site</a> basé sous Symfony 1.4<br />
							Début de la migration vers Symfony2.<br />
							Développement de l'application iOS.
						</p>
						<div class="time-link">
							<p>
								07/2012 à 11/2012 
							</p>
						</div>
					</div>
					<div class="exp-box">
						<h2>Développeur Front-end</h2>
						<p>
							Mise en place de la version professionnelle de <a href="http://www.dowith.fr">Dowith</a>
						</p>
						<div class="time-link">
							<p>
								03/2012 à 07/2012 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>






	<?php include('include/jsfile.php') ?>
	</body>
</html>
