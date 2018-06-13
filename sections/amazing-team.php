<?php

$teamMembersQuery = new WP_Query ( array (
 'post_type'  => 'team_members',
 'orderby' => 'date',
 'order' => 'ASC',
 'post_per_page' => 3
 ));

$amazing_team = get_field( 'amazing_team', 70 );
$amazing_team_subheading = get_field( 'amazing_team_subheading', 70 );
$amazing_team_bottom_text_1h = get_field( 'amazing_team_bottom_text_1h', 70 );
$amazing_team_bottom_text_2h = get_field( 'amazing_team_bottom_text_2h', 70 );


?>

<div class="amazing-team" id="Team">
  <div class="upperText">
    <h6><?= $amazing_team ?></h6>
    <h6><?=$amazing_team_subheading ?></h6>
  </div>


  <div class="team-members">
    <?php if ($teamMembersQuery -> have_posts() ):
            while($teamMembersQuery -> have_posts() ):
              $teamMembersQuery -> the_post();
    ?>
    <div class="member">
      <?php $photo = get_field("photo", get_the_ID()); ?>

      <?php $photo_url = wp_get_attachment_image_src($photo, 'full')[0]; ?>
      <div class="foto"><img src="<?= $photo_url ?>" alt="team member photo"></div>
      <div class="name">
        <h6><?php the_field("team_member", get_the_ID()); ?></h6>
      </div>
      <div class="profession">
        <h6><?php the_field("profession", get_the_ID()); ?></h6>
      </div>
      <div class="contact-info">

        <?php
        $info1 = get_field("contact_info_1", get_the_ID());
        $info2 = get_field("contact_info_2", get_the_ID());
        $info3 = get_field("contact_info_3", get_the_ID());

        ?>

        <?php if (!empty($info1)) { ?>
          <div class="contact">
          <span class="<?= $info1 ?>"></span>
          </div>
        <?php } ?>


        <?php if (!empty($info2)) { ?>
          <div class="contact">
            <span class="<?= $info2 ?>"></span>
          </div>
        <?php } ?>

        <?php if (!empty($info3)) { ?>
          <div class="contact">
            <span class="<?= $info3 ?>"></span> 
          </div>
        <?php } ?>

      </div>

    </div>
    <?php endwhile; endif; ?>

  </div>



  <div class="bottomText">
    <h6><?=$amazing_team_bottom_text_1h?></h6>
    <h6><?=$amazing_team_bottom_text_2h?> </h6>
  </div>
</div>
</section>
<!-- INTRO SECTION ENDS -->
</main>
