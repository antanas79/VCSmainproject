<?php
    $home_bg_img_id = get_field( 'home_bg_img', 11 );
    $home_bg_img_url = wp_get_attachment_image_src($home_bg_img_id, 'full')[0];
    $home_question = get_field( 'home_question', 11 );
    $home_main_text= get_field( 'home_main_text', 11 );
    $home_button = get_field( 'home_button', 11 );
 ?>

  <main>
    <!-- INTRO SECTION STARTS -->


    <section class="intro" id="#Home" style= "background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?= $home_bg_img_url ?>)">
      <div class="container flex-container">

        <div><h2><?= $home_question ?></h2></div>
        <div><h3><?= $home_main_text ?></h3></div>
        <div><a href="#middle"><button><?= $home_button ?></button></a></div>
      </div>
    </section>

    <!-- INTRO SECTION ENDS -->
