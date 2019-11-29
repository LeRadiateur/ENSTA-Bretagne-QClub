<?php include(dirname(__FILE__).'/header.php'); ?>
	
<main role="main" class="large-w75 center">
	<div class="pal">
		<article id="post-<?php echo $plxShow->artId(); ?>">
			<header>
				<div class="small pbm no-print">
					Retournez à 
					<a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a>&nbsp;/
				</div>
				<div class="row">
					<div class="date small txtcenter">
						<div><i class="fa fa-clock-o fa-2x"></i></div>
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_dayT#hour:#minute:00+01:00'); ?>"><?php $plxShow->artDate('#num_day #num_month #num_year(4)'); ?></time>
					</div>
					<h2 class="plm prm light red">
						<?php $plxShow->artTitle(); ?>
					</h2>
					<div class="artNbCom txtcenter big">
						<?php $plxShow->artNbCom('#nb','#nb','#nb'); ?>
					</div>
				</div>
				<div class="artCat ptm">
					<?php $plxShow->artCat(' ') ?>
				</div>
			</header>
			<div class="mtm mbm">
				<?php $plxShow->artContent(); ?>
			</div>
			<footer>
				<aside class="no-print options">
					<h5 class="title">Partage : </h5>
					<?php
						$id = intval($plxShow->plxMotor->plxRecord_arts->f('numero'));
						$url = $plxShow->plxMotor->plxRecord_arts->f('url');
						$artUrl = $plxShow->plxMotor->urlRewrite('?article'.$id.'/'.$url);
						$artTitle = $plxShow->plxMotor->plxRecord_arts->f('title');
						$artUrl = urlencode($artUrl);
						$artTitle = urlencode($artTitle);
					?>
					<ul class="unstyled pa0">
						<li>
							<a rel="external nofollow" title="Facebook" href="https://www.facebook.com/sharer.php?u=<?=$artUrl?>&amp;t=<?=$artTitle?>">
								<img src="<?php $plxShow->template(); ?>/img/facebook.svg" alt="Partager sur Facebook" title="Partager sur Facebook">
							</a>
						</li>
						<li>
							<a rel="external nofollow" title="Twitter" href="https://twitter.com/share?url=<?=$artUrl?>&amp;text=<?=$artTitle?>&amp;via=Ortegeek">
								<img src="<?php $plxShow->template(); ?>/img/twitter.svg" alt="Partager sur Twitter" title="Partager sur Twitter">
							</a>
						</li>
						<li>
							<a rel="nofollow" title="E-mail" href="mailto:?subject=<?=$artTitle?>&amp;body=<?=$artUrl?>">
								<img src="<?php $plxShow->template(); ?>/img/email.svg" alt="Envoyer par e-mail" title="Envoyer par e-mail">
							</a>
						</li>
					</ul>
					<ul class="unstyled pa0">
						<li>
							<button title="Activer/Désactiver le monde plein écran" onclick="toggleFullScreen();">
								<img src="<?php $plxShow->template(); ?>/img/fullscreen.svg" alt="Activer/Désactiver le monde plein écran" >
							</button>
						</li>
						<li>
							<a rel="nofollow" title="Impression" href="#">
								<img src="<?php $plxShow->template(); ?>/img/print.svg" alt="Imprimer l'article" title="Imprimer l'article" onclick="window.print()">
							</a>
						</li>
					</ul>
				</aside>
				<div class="mtm mbm">
					<small>
						<a class="author-link" href="#">
							<?php $plxShow->lang('WRITTEN_BY'); ?> 
							<?php $plxShow->artAuthor() ?> <?php $plxShow->artAuthorInfos('<span class="author-infos">#art_authorinfos</span>'); ?>
						</a>
						 - <span class="artTags"><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags('<a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a>', ' ')?></span>
					</small>
				</div>
			</footer>
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>
		</article>
	</div>
</main>

<?php include(dirname(__FILE__).'/footer.php'); ?>