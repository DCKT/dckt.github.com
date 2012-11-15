<nav class="span3 menu hidden-phone">
	<div class="row center">
		<img src ="img/logo.png" />
	</div>
	<div class="row">
		<ul class="navigation">
			<a href="index.php" class="<?php if($type == "home") { echo "on"; } ?>">
				<li>Accueil</li>
			</a>
			<a href="competences.php" class="<?php if($type == "comp") { echo "on"; } ?>">
				<li>Compétences</li>
			</a>
			<a href="realisations.php" class="<?php if($type == "real") { echo "on"; } ?>">
				<li>Réalisations</li>
			</a>
			<a href="experiences.php" class="<?php if($type == "exp") { echo "on"; } ?>">
				<li>Expériences</li>
			</a>
			<a href="contact.php" class="<?php if($type == "contact") { echo "on"; } ?>">
				<li>Contact</li>
			</a>
		</ul>
	</div>
	<div class="row center">
		<ul class="social">
			<li>
				<a href="https://twitter.com/DCK__">
					<img src ="img/social_icone/twitter.png" alt="Twitter" />
				</a>
			</li>
			<li>
				<a href="http://fr.linkedin.com/in/deconinckthomas">
					<img src ="img/social_icone/linkedin.png" alt="LinkedIn" />
				</a>
			</li>
			<li>
				<a href="https://github.com/DCKT">
					<img src ="img/social_icone/github.png" alt="Github" />
				</a>
			</li>
			<li>
				<a href="http://fr.viadeo.com/fr/profile/thomas.deconinck2">
					<img src ="img/social_icone/viadeo.png" alt="Viadeo" />
				</a>
			</li>
		</ul>
	</div>
</nav>

<nav class="menu-phone navbar navbar-fixed-bottom visible-phone">
  <div class="navbar-inner">
    <a class="brand" href="#"></a>
    <ul class="nav">
      <li class="<?php if($type == "home") { echo "active"; } ?>"><a href="index.php">Home</a></li>
      <li class="<?php if($type == "comp") { echo "active"; } ?>"><a href="competences.php">Compétences</a></li>
      <li class="<?php if($type == "real") { echo "active"; } ?>"><a href="realisations.php">Réalisations</a></li>
      <li><a href="experiences.php">Expériences</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</nav>
