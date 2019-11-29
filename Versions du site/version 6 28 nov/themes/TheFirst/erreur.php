<?php include(dirname(__FILE__).'/header.php'); ?>
              
           <div class="wrap">
               <div class="bloc-8">
                  
                  
                   <div class="box" id="post-<?php echo $plxShow->artId(); ?>">
                      
                       <!-- Titre de l'article -->
                        <h2><?php $plxShow->lang('ERROR'); ?></h2>


                        <!-- Affichage le type d'erreur -->
                        <p>
                            <?php $plxShow->erreurMessage(); ?>
                        </p>
                   </div>
                    
                </div>

                  <aside class="bloc-4">
                     <?php include(dirname(__FILE__).'/sidebar.php'); ?>
                  </aside>
                  

           </div>
    </section>
    
    <div class="clear espace"></div>
    
   <?php include(dirname(__FILE__).'/footer.php'); ?>