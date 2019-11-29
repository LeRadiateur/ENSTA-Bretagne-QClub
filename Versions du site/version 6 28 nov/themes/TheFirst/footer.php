    <?php if (!defined('PLX_ROOT')) exit; ?>
        <footer>
         <div class="wrap">
             <div class="bloc-4">
                 <h2 class="titre"><?php $plxShow->lang('LATEST_ARTICLES'); ?></h2>
                    <ul>
                        <?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
                    </ul> 
             </div>
             <div class="bloc-4">
                 <h2 class="titre"><?php $plxShow->lang('TAGS'); ?></h2>
                    <ul>
                        <?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
                    </ul> 
             </div>
             <div class="bloc-4 social">
                 <h2 class="titre">Nous suivre...</h2>
                <a href="#"><span class="symbol">t</span></a>
                <a href="#"><span class="symbol">s</span></a>
                <a href="#"><span class="symbol">g</span></a>
                <a href="#"><span class="symbol">y</span></a>
             </div>

         <div class="bloc-12 copyright">
                
                <p>  
                    <?php //$plxShow->mainTitle('link'); ?>Qclub © 2019 - <?php //$plxShow->subTitle(); ?> 
                    <?php //$plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php //$plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a> 
                    <?php //$plxShow->lang('IN') ?> <?php //$plxShow->chrono(); ?> <!--utilisant la technologie <a href="http://libertea.fr" title="framework pluxml">SASS</a>-->   <a rel="nofollow" href="<?php //$plxShow->urlRewrite('core/admin/'); ?>" title="<?php //$plxShow->lang('ADMINISTRATION') ?>"><span class="symbol">X</span></a><a href="<?php //$plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?> </a><?php $plxShow->httpEncoding() ?>  <!--<span class="symbol">.</span><a href="http://validator.w3.org/check?uri=referer">W3C</a>-->
                </p>
                    
         </div>
         
                  </div>
    </footer>
</body>
</html>
