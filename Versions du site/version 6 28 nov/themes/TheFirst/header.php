<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
    <html lang="<?php $plxShow->defaultLang() ?>">
        <head>
        <meta charset="<?php $plxShow->charset('min'); ?>">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
        <title><?php //$plxShow->pageTitle(); ?>QClub</title>
        <?php $plxShow->meta('description') ?>
        <?php $plxShow->meta('keywords') ?>
        <meta name="author" content="GNANGANI" />
        
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php $plxShow->template(); ?>/style.css"/>
        <?php $plxShow->templateCss() ?>
        <?php $plxShow->pluginsCss() ?>
		<!--<link rel="shortcut icon" type="image/png" href="image/LogoQclubFondBleu.png"/>-->
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
        <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        </head>
    <body lang="<?php $plxShow->defaultLang() ?>" id="top">
    <!-- header et navigation -->
    
    <header class="header">
        <div class="wrap">
         
          <!--Title et subTitle -->
           <div class="bloc-12">
                <h1 class="logo"><?php //$plxShow->mainTitle('link'); ?>QClub</h1> <?php eval($plxShow->callHook('MySkinSelect')) ?>
                   <div class="box" id="static-page-<?php echo $plxShow->staticId(); ?>">
				<p>Site web du club d'informatique quantique de l'ENSTA Bretagne.</p>
           </div>
           
           <!--Navigation -->
            <nav class="bloc-12" role="navigation">
               <div class="nav">
                    <ul>
                        <li class="navigation"><a href="#" >Navigation</a></li>
                        <?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
                        <?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>            
                    </ul> 
               </div>
            </nav> 

       </div>
    </header>        

   <div class="clear"></div>
    
    <section>
        <div id="info">
            <div class="wrap">
                <div class="bloc-12">
                    <div class="info">
                       <?php $plxShow->lastArtList('<h2>#art_title</h2><p>#art_content(300)...</p><a href="#art_url" class="bt">voir la suite</a>',1) ?>
                    </div>
                </div>
            </div>                
        </div>
        
        <div class="clear espace"></div>
