<?php $type = "real"; 
$description = "Découvrez mes différents projets que j'ai réalisé au fil des années";
require_once('include/header.php');
require_once('include/nav.php');
?>

		
		<div class="span8 offset3 realisations">
			<h1>Réalisations</h1>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Description</th>
						<th>Technologies</th>
						<th>Lien</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Portfolio</td>
						<td>Site servant de support à mes réalisations, expériences professionnelles, etc.. </td>
						<td>HTML5 / CSS3, JQuery, Twitter Bootstrap, GIT</td>
						<td><a href="http://www.dck.me" target="_blank">http://www.dck.me</a></td>
					</tr>
					<tr>
						<td>Blog Wordpress</td>
						<td>Blog dans lequel je rédige différents articles / tutoriels sur les technologies web et mobiles. </td>
						<td>Wordpress, PHP</td>
						<td><a href="http://blog.dck.me" target="_blank">http://blog.dck.me</a></td>
					</tr>
					<tr>
						<td>Laboratoire</td>
						<td>Laboratoire dans lequel je m'expose mes diverses expériences et autres tests.</td>
						<td>HTML5 / CSS3, JQuery, PHP, Symfony 2, Doctrine 2, GIT</td>
						<td><a href="http://labs.dck.me" target="_blank">http://labs.dck.me</a></td>
					</tr>
					<tr>
						<td>Diagnostic</td>
						<td>Site en cours de réalisation, basé sur le principe de Stack OverFlow</td>
						<td>HTML5 / CSS3, JQuery, Twitter Bootstrap, PHP5, Symfony 2, Doctrine 2, GIT</td>
						<td><a href="http://diagno.dck.me" target="_blank">http://diagno.dck.me</a></td>
					</tr>
				</tbody>
			</table>
		</div>


	</div>
</div>





	<?php require_once('include/jsfile.php') ?>
	</body>
</html>
