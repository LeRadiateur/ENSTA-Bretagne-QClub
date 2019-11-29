<aside class="complementary no-print pal">
<h3>Th&egrave;mes à télécharger</h3>
<?php eval($plxShow->callHook('MySkinSelect')) ?>
	<h3>
		<?php $plxShow->lang('LATEST_ARTICLES'); ?>
	</h3>

	<ul>
		<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
	</ul>

	<h3>
		Recherche
	</h3>
	<?php eval($plxShow->callHook('MySearchForm')) ?>

	<div class="flex-container">
		<div>
			<a href="http://soutenir.framasoft.org/?pseudo=Ortegeek&amp;web=http%3A%2F%2Fortegeek.net" title="Je soutiens Framasoft, pourquoi pas vous ?"><img src="http://soutenir.framasoft.org/files/bannieres/Vsetes-libre/Vseteslibre_150.png" alt="Soutenir Framasoft"/></a>
		</div>
		<div>
			<a href="http://www.april.org/adherer?referent=Guillaume+ORTEGA+%28gortega%29"><img src="http://www.april.org/files/association/documents/bannieres/banniereadm5.php" alt="Promouvoir et soutenir le logiciel libre"/></a>
		</div>
		<div>
			<a href="https://soutien.laquadrature.net/" title="Soutenons La Quadrature du Net !" alt="Soutenons La Quadrature du Net !"><img src="https://soutien.laquadrature.net/static/images/support_lqdn_468_B_fr.png" alt="Soutenons La Quadrature du Net !" /></a>
		</div>
	</div>

	<h3>
		<?php $plxShow->lang('CATEGORIES'); ?>
	</h3>

	<ul class="flex-container unstyled tags">
		<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>
	</ul>

	<h3>
		<?php $plxShow->lang('TAGS'); ?>
	</h3>

	<ul class="flex-container unstyled tags black">
		<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
	</ul>

	<h3>
		<?php $plxShow->lang('LATEST_COMMENTS'); ?>
	</h3>

	<ul>
		<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
	</ul>

	<h3>
		<?php $plxShow->lang('ARCHIVES'); ?>
	</h3>

	<ul class="flex-container unstyled tags">
		<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
	</ul>

	<h3>
		Flux RSS :
	</h3>

	<p>
		<a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>">
			<i class="fa fa-rss"></i> <?php $plxShow->lang('ARTICLES'); ?>
		</a>
	</p>
	<p>
		<a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>">
			<i class="fa fa-rss"></i> <?php $plxShow->lang('COMMENTS'); ?>
		</a>
	</p>
</aside>
