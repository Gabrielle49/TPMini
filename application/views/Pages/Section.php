<div class="site-section">
      <div class="container">
        <div class="row">

          <div class="col-md-8">

            <div class="row">
            <?php foreach($nom as $ligne) {?>
              <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="<?php echo base_url('assets/images/img_1.jpg');?>" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#"><?php  echo($ligne['NOM']);?></a></h2>
                  <p><?php  echo($ligne['DESCRIPTION']);?></p>
                </div> 
              </div>
            <?php }?>  
            </div>
            <div class="col-12 text-center mt-5">
              <p class="custom-pagination">
              <?php
              $i = 1;
              for($j=0;$j<$wawa;$j++) {?>
                <a href="<?=site_url('home/blog/'.$categorie.'/'.$i);?>"><?php echo $i?></a>
              <?php 
              $i++;
              }?>
              </p>
            </div>
          </div>

         
          
        </div>
      </div>
    </div>
