<?php 
$type = "exp"; 
$description = "Retrouvez mes diverses expériences dans le monde professionnel";
require_once('include/header.php');
require_once('include/nav.php');
?>
			
		<div class="span8 offset3 exp">	
			<h1>Expériences professionnelles</h1>

			<div class="exp-list">
				<div class="arrow-tl">&nbsp;</div>
				<div class="timeline"></div>
			</div>

			<div class="list-exp-left">
				<div class="exp-box">
					<h2>Intégrateur web Symfony 2 <br />Développeur iOS</h2>
					 <small>Novembre 2012<br />Juillet 2012</small>
					 <strong>Dowith - Villeneuve D'Ascq</strong>
					<p>
						Refonte du <a href="http://www.dowith.fr">site</a> basé sous Symfony 1.4<br />
						Début de la migration vers Symfony2.<br />
						Développement de l'application iOS.
					</p>
					<div class="time-link">
					</div>
				</div>
				<div class="exp-box">
					<h2>Développeur Front-end</h2>
					<small>Juillet 2012<br />Mars 2012 </small>
					<strong>Dowith - Villeneuve D'Ascq</strong>
					<p>
						Mise en place de la version professionnelle de <a href="http://www.dowith.fr">Dowith</a>
					</p>
					<div class="time-link">
					</div>
				</div>
			</div>

			<!-- <div class="list-exp-right">
				<div class="exp-box">
				</div>
			</div> -->
		</div>

		
	</div>
</div>






	<?php include('include/jsfile.php') ?>
	</body>
</html>
