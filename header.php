<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    $home_logo_text = get_field( 'home_logo_text', 11 );
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $home_logo_text ?></title>
    <?php wp_head(); ?>

  </head>
  <body>

  <header>
    <!-- <?php
    $home_logo_text = get_field( 'home_logo_text', 11 );
    ?> -->
    <div class="container flex-container">
      <div class="paper-escape">
        <div class="paper-logo">
          <i class="fas fa-paper-plane"></i>
        </div>
        <div class="escape">
          <h1><?= $home_logo_text ?></h1>
        </div>
      </div>

      <nav>

        <?php
          wp_nav_menu(array(
            'menu' => 'header-menu',
            'menu_class' => 'navigation flex-container',
            'container' => false,

          ));
         ?>
      </nav>
      <div class="burger-menu" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar2"></div>
      </div>
    </div>
  </header>
