<?php
 $mainServicesQuery = new WP_Query ( array (
   'post_type'  => 'main_services',
   'orderby' => 'date',
   'order' => 'ASC',
   'post_per_page' => 2
 ));
 ?>

<section class="middle" id="middle">
  <div class="container">


          <?php if ($mainServicesQuery -> have_posts() ):
                  while($mainServicesQuery -> have_posts() ):
                    $mainServicesQuery -> the_post();
          ?>

          <div class="main-services">

            <div class="main-services-title-text">
                  <div class="main-services-title">
                    <h6><?php the_field("main-services-title", get_the_ID()); ?></h6>
                  </div>
                  <div class="main-services-text">
                    <p><?php the_field("main-services-text-1p", get_the_ID()); ?></p>
                    <p><?php the_field("main-services-text-2p", get_the_ID()); ?></p>
                  </div>
            </div>
            <div class="main-services-icon">
                <i class="<?php the_field("main-services-icon", get_the_ID()); ?>"></i>
            </div>

          </div>

            <?php endwhile; endif; ?>
