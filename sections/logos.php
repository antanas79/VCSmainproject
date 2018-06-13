<?php

 $logos = new WP_Query ( array (
   'post_type'  => 'logos',
   'orderby' => 'date',
   'order' => 'ASC',
   'post_per_page' => 4
 ));

 ?>

    <div class="logos">
    <?php if ($logos -> have_posts() ):
            while($logos-> have_posts() ):
            $logos -> the_post();
    ?>
        <div class="logo"><img src="<?php the_post_thumbnail_url() ?>" alt='<?php the_title(); ?>'></div>
    <?php endwhile; endif; ?>
    </div>
  </div>
</div>
