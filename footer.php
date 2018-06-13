
<?php
    $footerContactsQuery = new WP_Query ( array (
     'post_type'  => 'footer_contacts',
     'orderby' => 'date',
     'order' => 'ASC',
     'post_per_page' => 3
     ));

    $heading = get_field( 'heading', 93 );
    $subheading = get_field( 'subheading', 93 );
    $input_text_upper = get_field( 'input_text_upper', 93 );
    $input_text_middle = get_field( 'input_text_middle', 93 );
    $input_text_bottom = get_field( 'input_text_bottom', 93 );
 ?>

<footer id="Contact">
  <div class="text-form container flex-container">

    <div class="text-form">
      <div class="text">
        <h6 class="heading"><?= $heading ?></h6>
        <h6 class="subheading"><?= $subheading ?></h6>
        <div class="contacts">

          <?php if ($footerContactsQuery -> have_posts() ):
                  while($footerContactsQuery -> have_posts() ):
                    $footerContactsQuery -> the_post();
          ?>

          <div class="contact-row">
            <div class="contact">
              <div class="icon">
                <i class="<?php the_field("icon_name_1", get_the_ID()); ?>"></i>
              </div>
              <div class="contact-text">
                <h6><?php the_field("text_name_1", get_the_ID()); ?></h6>
              </div>
            </div>
            <div class="contact">
              <div class="icon">
                <i class="<?php the_field("icon_name_2", get_the_ID()); ?>"></i>
              </div>
              <div class="contact-text">
                <h6><?php the_field("text_name_2", get_the_ID()); ?></h6>
              </div>
            </div>
          </div>
            <?php endwhile; endif; ?>

        </div>
      </div>
      <div class="form">
        <form action="post">
          <input type="text" class="inputName" placeholder="<?= $input_text_upper ?>">
          <input type="email" class="inputEmail" placeholder="<?= $input_text_middle ?>">
          <input type="text" class="inputMessage" placeholder="<?= $input_text_bottom ?>" size="300">
          <button onclick="return false;">Send Message</button>
        </form>
      </div>
    </div>
  </div>
  <div class="google maps">

    <?php

    $location = get_field('google_map', 93);

    if( !empty($location) ):
    ?>
    <div class="acf-map">
    	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
    </div>
    <?php endif; ?>


  </div>
  <div class="line">
    <h6>&copy; 2014 Escape by FreebiesXpress &#8729; Made In Toronto</h6>
  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
