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
        <ul class="social-links">
          <li>
          <a href="mailto:hello@bripiccari.me" target="_blank" title="Email" class="icon">
            <i class="fa fa-envelope"></i>
          </a>
          </li>
          <li>
          <a href="http://www.twitter.com/brisayswhaat" target="_blank" title="Twitter" class="icon">
            <i class="fa fa-twitter"></i>
          </a>
          </li>
          <li>
          <a href="http://www.instagram.com/brisayswhaat" target="_blank" title="Instagram" class="icon">
            <i class="fa fa-instagram"></i>
          </a>
          </li>
          <li>
          <a href="https://dribbble.com/brisayswhaat" target="_blank" title="Dribbble" class="icon">
            <i class="fa fa-dribbble"></i>
          </a>
          </li>
          <li>
            <a href="https://github.com/brisayswhaat" target="_blank" title="Github" class="icon">
              <i class="fa fa-github"></i>
            </a>
          </li>
          <li>
          <a href="http://www.pinterest.com/brisayswhaat" target="_blank" title="Pinterest" class="icon">
            <i class="fa fa-pinterest"></i>
          </a>
          </li>
          <li>
          <a href="https://open.spotify.com/user/1215731033" target="_blank" title="Spotify" class="icon">
            <i class="fa fa-spotify"></i>
          </a>
          </li>
          <li>
          <a href="https://www.linkedin.com/in/bripiccari" target="_blank" title="LinkedIn" class="icon">
            <i class="fa fa-linkedin"></i>
          </a>
          </li>
        </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>
