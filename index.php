<?php $type = "home"; ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Deconinck Thomas - Développeur web et mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Portfolio d'un étudiant à SUPINFO passionnée par le développement web et mobile.">
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
			<div class="span8 offset3 home">
				<div class="row">
					<div class="offset1 presentation">
						<img src ="img/presentation/imac.png" />
						<img src ="img/presentation/ipad.png" />
						<img src ="img/presentation/iphone.png" />
					</div>
				</div>
				
				<p class="full-screen"> 
					<img src="img/presentation/dck.png" class="img-polaroid" alt="Deconinck Thomas" />
					Etudiant en 2<sup>ème</sup> année à SUPINFO Lille. Je suis passionné par l'informatique depuis mon plus bas âge. 
					C'est pourquoi, j'ai décidé d'en faire mon avenir etj'ai obtenu les bases (hardware et software) au Collège Technique St Joseph en faisant un BAC <em>technicien informaticien</em>.
					C'est durant ces études que j'ai découvert par moi-même la programmation.<br />
					Je suis un adepte du développement web et un initié du développement mobile (iOS) !
					<br /><br />
					A travers ce portfolio, vous retrouvrerez mes diverses réalisations, compétences mais également mes expériences professionnelles. 
					N'hésitez pas à me suivre sur les réseaux sociaux !
				</p>
			</div>
		</div>
	</div>


	<?php include('include/jsfile.php') ?>
	</body>
</html>
