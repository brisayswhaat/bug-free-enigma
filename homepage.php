<?php
/**
* Template Name: Homepage Template File
* @package bug-free-enigma
*
*/

get_header(); ?>

<main id="main" class="site-main" role="main">
  <section class="wrapped">
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          the_content();
        } // end while
      } // end if
    ?>
  </section>
</main>

<?php get_footer();
