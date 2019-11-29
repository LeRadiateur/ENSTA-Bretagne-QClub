<?php include(dirname(__FILE__).'/header.php'); ?>
              
           <div class="wrap">
               <div class="bloc-12">
                  
                  
                   <div class="box" id="static-page-<?php echo $plxShow->staticId(); ?>">
                      
                       <h2  class="titre"><?php $plxShow->staticTitle(); ?></h2>
                       
                        <?php $plxShow->staticContent(); ?>
                </div>

           </div>
 
        </div>
        
     </section>   
    <div class="clear espace"></div>
    
   <?php include(dirname(__FILE__).'/footer.php'); ?>