<?php
 $servicesQuery = new WP_Query ( array (
   'post_type'  => 'services',
   'orderby' => 'date',
   'order' => 'ASC',
   'post_per_page' => 6
 ));
 ?>


<div class="services" id="Services">
  <ul>
    <?php if ($servicesQuery -> have_posts() ):
            while($servicesQuery -> have_posts() ):
              $servicesQuery -> the_post();
    ?>
    <li>
      <div class="services-icon">

        <div class="icon-circle">
            <i class="<?php the_field("icon_code", get_the_ID()); ?>"></i> 
        </div>
      </div>
      <div class="services-name-text">
        <div class="services-name">
          <h6>
              <?php the_title(); ?>
          </h6>
        </div>
        <div class="services-text">
          <h6>
              <?php the_field("service_description", get_the_ID()); ?>
          </h6>
        </div>
      </div>

    </li>
    <?php endwhile; endif; ?>
  </ul>
</div>
