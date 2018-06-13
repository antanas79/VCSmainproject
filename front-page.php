<?php
//paimame headeri
get_header();

//paimame home sekcija
get_template_part( 'sections/home' );

//paimame main services sekcija
get_template_part( 'sections/main-services' );

//paimame services sekcija
get_template_part( 'sections/services' );

//paimame awesome-clients sekcija
get_template_part( 'sections/awesome-clients' );

//paimame logos sekcija
get_template_part( 'sections/logos' );

//paimame amazing-team sekcija
get_template_part( 'sections/amazing-team' );

//isikeliame mapsus
get_template_part( 'sections/map' );

?>
<?php get_footer(); ?>
