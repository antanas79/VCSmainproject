<?php
  $awesomeClientsQuery = new WP_Query ( array (
   'post_type'  => 'awesome_clients',
   'orderby' => 'date',
   'order' => 'ASC',
   'post_per_page' => 2
 ));

  $awesome_clients_id = get_field( 'awesome_clients', 70);
  $awesome_clients_subheading_id = get_field( 'awesome_clients_subheading', 70 );

 ?>

  <div class="awesome-clients" id="Clients">
  <div class="upperText">
    <h6><?= $awesome_clients_id ?></h6>
    <h6><?= $awesome_clients_subheading_id ?></h6>
  </div>

  <?php if ($awesomeClientsQuery -> have_posts() ):
          while($awesomeClientsQuery -> have_posts() ):
            $awesomeClientsQuery -> the_post();
  ?>
  <?php $photo = get_field("photo", get_the_ID()); ?>
  <?php $photo_url = wp_get_attachment_image_src($photo, 'full')[0]; ?>
  <div class="text-foto">

    <div class="foto"><img src= "<?= $photo_url ?>" alt="client photo"></div>


    <div class="text">
          <div class="quatation">
            <h6>
              <?php the_field("quatation", get_the_ID()); ?>
            </h6>
          </div>
          <div class="author">
            <h6>
              <?php the_field("author", get_the_ID()); ?>
            </h6>
          </div>
    </div>

  </div>
  <?php endwhile; endif; ?>
  </div>
