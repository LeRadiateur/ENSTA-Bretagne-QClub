<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>" >
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,700">
	<!-- http://keithclark.co.uk/articles/loading-css-without-blocking-render/-->
	<!-- https://css-tricks.com/css-media-queries/ -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/styles/default.min.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/knacss.css">
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css">

	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

	<link rel="shortcut icon" href="<?php $plxShow->template(); ?>/img/favicon.ico">

</head>

<body id="top">
	<div class="container">
		<noscript tabindex="1">
			Un menu par tabulation type lien d'évitement existe sur ce site. Utiliser la touche Tab pour y accéder.
		</noscript>
		<nav class="no-print skip-links">
			<ul class="unstyled">
				<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_id"><a class="#static_status" href="#static_url" title="#static_name">#static_name</a></li>'); ?>
				<?php $plxShow->pageBlog('<li class="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
				<li><a href="https://twitter.com/Ortegeek" title="Mon compte Twitter">Mon compte Twitter @Ortegeek</a></li>
				<li><a href="https://www.flickr.com/photos/ortegeek/" title="Mon compte Flickr">Mon compte Flickr</a></li>
			</ul>
		</nav>
		<div class="no-print menu-container">
			<div class="circle"></div>
			<nav class="menu">
				<ul>
					<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_id"><a rel="nofollow" class="#static_status" href="#static_url" title="#static_name">#static_name</a></li>'); ?>
					<?php $plxShow->pageBlog('<li class="#page_id"><a rel="nofollow" class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
					<li><a rel="nofollow" href="https://twitter.com/Ortegeek" title="Mon compte Twitter"><i class="fa fa-twitter fa-lg"></i>@Ortegeek</a></li>
					<li><a rel="nofollow" href="https://www.flickr.com/photos/ortegeek/" title="Mon compte Flickr"><i class="fa fa-flickr fa-lg"></i>Flickr</a></li>
				</ul>
			</nav>
			<div class="burger">
				<div class="x"></div>
				<div class="y"></div>
				<div class="z"></div>
			</div>
			<div class="title h2-like">Menu</div>
			<div class="menu-overlay"></div>
		</div>

		<header class="header no-print flex-container-v txtcenter pam">
			<div class="center w50 medium-w33 large-w25">
				<h1>
					<a href="<?php $plxShow->racine() ?>">
						<img src="<?php $plxShow->template(); ?>/img/logo.svg" alt="<?php $plxShow->mainTitle() ?>">
					</a>
				</h1>
				<h2 class="bigger light">
					<?php $plxShow->subTitle(); ?>
				</h2>
			</div>
		</header>
