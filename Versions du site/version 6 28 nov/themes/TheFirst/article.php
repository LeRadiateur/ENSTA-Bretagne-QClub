<?php include(dirname(__FILE__).'/header.php'); ?>
              
           <div class="wrap">
               <div class="bloc-8">
                  
                  
                   <div class="box" id="post-<?php echo $plxShow->artId(); ?>">
                       <h2  class="titre"><?php $plxShow->artTitle(''); ?></h2>
                       
                        <p>
                            <span class="symbol">U</span><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
                            <span class="symbol">P</span><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time>
                            <span class="symbol">e</span><?php $plxShow->artNbCom(); ?>
                        </p>
                        <!-- Affichage de l'article-->
                        <?php $plxShow->artContent(); ?>
                        <!-- informations de l'article, catégorie et Tags -->
                        <p>
                            <span class="symbol">D</span><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?>
                            <span class="symbol">,</span><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
                        </p>
                   </div>
                   
                    <div class="box">
                        <h3>A propos de l'auteur, <?php $plxShow->artAuthor() ?>:</h3>
                        <?php $plxShow->artAuthorInfos('<blockquote>#art_authorinfos</blockquote>'); ?>
                    </div>
                    
                    <div class="box">
                        <?php include(dirname(__FILE__).'/commentaires.php'); ?>
                    </div>
                    
                </div>

                  <aside class="bloc-4">
                     <?php include(dirname(__FILE__).'/sidebar.php'); ?>
                  </aside>
                  

           </div>
    </section>
    
    <div class="clear espace"></div>
    
   <?php include(dirname(__FILE__).'/footer.php'); ?>