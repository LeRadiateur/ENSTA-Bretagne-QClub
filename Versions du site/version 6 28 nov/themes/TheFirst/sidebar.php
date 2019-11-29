<div class="box">

<h3>Tester les th&egrave;mes</h3>
<?php eval($plxShow->callHook('MySkinSelect')) ?>
   <h2 class="titre"><?php $plxShow->lang('CATEGORIES'); ?></h2>
    <ul>
        <?php $plxShow->catList('','<li><a class="#cat_status" href="#cat_url" title="#cat_name"><span class="symbol">D</span>#cat_name</a> (#art_nb)</li>'); ?>
    </ul> 
</div>

<div class="box">
   <h2 class="titre"><?php $plxShow->lang('LATEST_COMMENTS'); ?></h2>
    <ul>
        <?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
    </ul> 
</div>

<div class="box">
   <h2 class="titre"><?php $plxShow->lang('ARCHIVES'); ?></h2>
    <ul>
        <?php $plxShow->archList('<li><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
    </ul> 
</div>

<div class="box">
   <p class="rss">
<a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>">
<span class="symbol">r</span><?php $plxShow->lang('ARTICLES'); ?></a>
</p>
<p class="rss">
<a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>">
<span class="symbol">r</span><?php $plxShow->lang('COMMENTS'); ?></a>
</p> 
</div>
                  
                   
