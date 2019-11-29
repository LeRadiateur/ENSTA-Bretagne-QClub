<?php include(dirname(__FILE__) . '/header.php'); ?>

<main role="main" class="large-w75 medium-w75 center">
	<div class="webcv pal">
		<div class='grid-1-2'>
			<div>
				<div>
					<img src="<?php $plxShow->template(); ?>/img/ortegeek_gif.gif" alt="Photo Auteur">
					<div>
						<h2 class="red light">ORTEGA Guillaume</h2>
						<p>
							<?php
								$datetime1 = new DateTime('1989-12-23');
								$datetime2 = new DateTime('today');
								$interval = $datetime1->diff($datetime2);
								echo $interval->format('%Y')." ans - Développeur Web";
							?>
							<br/>
							Travaille actuellement chez SEPA Tarn
						</p>
					</div>
				</div>
			</div>
			<div>
				<div class="grid-2-1 grid-small-1">
					<div class="mts">
						<h3 class="light border">Dernière réalisation</h3>
						<a class="internal" href="http://www.ortega-mariano.fr/"><img src="<?php $plxShow->template(); ?>/img/last.small.jpg" alt="ORTEGA Mariano" /></a>
					</div>
					<div class="mts">
						<h3 class="light border">Formation</h3>
						<p>2010 / 2011 - Licence Pro Conception et Intégration de Services et Produits Multimédias</p>
						<p>2008 / 2010 - BTS Informatique et Réseaux pour l'Industrie et les Services Techniques</p>
					</div>
					<div class="mts">
						<h3 class="light border">Curriculum vitae</h3>
						<a href="<?php $plxShow->template(); ?>/cv/ortega.pdf" title="CV .pdf en Français">
							<img src="<?php $plxShow->template(); ?>/img/cv.png" alt="CV format .pdf">
						</a>
					</div>
					<div class="mts">
						<h3 class="light border">Réseaux Sociaux</h3>
						<ul class="grid-4 unstyled pa0">
							<li><a class="internal" href="mailto:guillaume.ortega@ortegeek.fr" title="Mon adresse e-mail" target="_blank"><i class="fa fa-at fa-3x"></i></a></li>
							<li><a class="internal" href="https://twitter.com/Ortegeek" title="Mon Profil Twitter" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a></li>
							<li><a class="internal" href="http://www.viadeo.com/profile/00210oi62mpr192g" title="Mon Profil Viadeo" target="_blank"><i class="fa fa-users fa-3x"></i></a></li>
							<li><a class="internal" href="http://www.linkedin.com/profile/view?id=101759262" title="Mon Profil Linked In" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="mtm">
			<h3 class="light border">Qui Suis-je ?!</h3>
			<?php $plxShow->staticContent(); ?>
		</div>
		<div class="mtm">
			<h3 class="light border">Mes autres travaux</h3>
			<div class="grid-3-small-1">
				<div>
					<a href="https://www.flickr.com/photos/ortegeek/">
						<img src="<?php $plxShow->template(); ?>/img/flickr.jpg" alt="Mon compte Flickr">
					</a>
					<h4>Mon compte Flickr</h4>
				</div>
				<div>
					<a href="http://aperoriginale.podcloud.fr/">
						<img src="<?php $plxShow->template(); ?>/img/apero.jpg" alt="L'AperOriginale">
					</a>
					<h4>L'ApérOriginale</h4>
				</div>
				<div>
					<a href="http://xv-bras-xv-jambes.podcloud.fr/">
						<img src="<?php $plxShow->template(); ?>/img/xvbras.png" alt="XV Bras, XV Jambes">
					</a>
					<h4>XV Bras, XV Jambes</h4>
				</div>
		</div>
		<div class="grid-2 grid-small-1 mtm">
			<div class="pts">
				<h3 class="light border">Programmation</h3>
				<div class="grid-2 plm"><h6 class="man">Action Script</h6>				<div class='txtright'><i class='fa fa-lg fa-star-half-o'></i><i class='fa fa-lg fa-star-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">C++</h6>						<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">HTML5 / CSS3</h6>				<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-half-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Java</h6>						<div class='txtright'><i class='fa fa-lg fa-star-half-o'></i><i class='fa fa-lg fa-star-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">JavaScript / JQuery</h6>		<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">MySQL</h6>						<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">PHP5</h6>						<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-half-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">XML</h6>						<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
			</div>
			<div class="pts">
				<h3 class="light border">Web</h3>
				<div class="grid-2 plm"><h6 class="man">Administration serveur</h6>		<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Mailing</h6>					<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-half-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Référencement, Audit</h6>		<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<h3 class="light">Graphisme</h3>
				<div class="grid-2 plm"><h6 class="man">Conception print</h6>			<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-half-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Illustrator</h6>				<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-half-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Photoshop</h6>					<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-half-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Web design</h6>					<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-o'></i></div></div>
			</div>
			<div class="pts">
				<h3 class="light border">Divers</h3>
				<div class="grid-2 plm"><h6 class="man">Communication</h6>				<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Maintenance informatique</h6>	<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Marketing</h6>					<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Rédactionnel</h6>				<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-half-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
			</div>
			<div class="pts">
				<h3 class="light border">Langues</h3>
				<div class="grid-2 plm"><h6 class="man">Anglais</h6>					<div class='txtright'><i class='fa fa-lg fa-star'></i><i class='fa fa-lg fa-star-half-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Espagnol</h6>					<div class='txtright'><i class='fa fa-lg fa-star-half-o'></i><i class='fa fa-lg fa-star-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
				<div class="grid-2 plm"><h6 class="man">Italien</h6>					<div class='txtright'><i class='fa fa-star-half-o'></i><i class='fa fa-lg fa-star-o'></i><i class='fa fa-lg fa-star-o'></i></div></div>
			</div>
		</div>
	</div>
</main>

<?php include(dirname(__FILE__) . '/footer.php'); ?>
