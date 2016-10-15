<?php
/**
* Template Name: About Template File
* @package bug-free-enigma
*
*/
get_header(); ?>

<main id="main" class="site-main" role="main">
  <section class="thats-a-wrap">

      <div class="content--homepage">
        <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post();
              the_content();
            } // end while
          } // end if
        ?>

        <h2 class="subheadline">Find Me On:</h2>

    </div>
  </section>
</main>
<?php get_footer(); ?>
