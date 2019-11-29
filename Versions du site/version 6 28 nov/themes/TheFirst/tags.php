<?php include(dirname(__FILE__).'/header.php'); ?>
              
           <div class="wrap">
               <div class="bloc-8">
                 

                  <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
                  
                   <div class="box" id="post-<?php echo $plxShow->artId(); ?>">
                      
                       <h2  class="titre"><?php $plxShow->artTitle('link'); ?></h2>
                       
                        <p>
                            <span class="symbol">U</span><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
                            <span class="symbol">P</span><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time>
                            <span class="symbol">e</span><?php $plxShow->artNbCom(); ?>
                        </p>
                        <!-- Affichage du bloc Chapo -->
                        <?php $plxShow->artChapo(); ?>
                        
                        <!-- informations de l'article, catégorie et Tags -->
                        <p>
                            <span class="symbol">D</span><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?>
                            <span class="symbol">,</span><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
                        </p>
                   </div>
                   
                    <?php endwhile; ?>
                    
                    <div class="pagination">
                        <?php $plxShow->pagination(); ?>
                    </div>
                    
                </div>

                  <aside class="bloc-4">
                     <?php include(dirname(__FILE__).'/sidebar.php'); ?>
                  </aside>
                  

           </div>
    </section>
    
    <div class="clear espace"></div>
    
   <?php include(dirname(__FILE__).'/footer.php'); ?>