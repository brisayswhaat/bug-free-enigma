<?php
/**
* Template Name: About Template File
* @package bug-free-enigma
*
*/
get_header(); ?>

<main id="main" class="site-main" role="main">
  <section class="wrapped">
    <div class="full-width">
      <div class="intro-copy"><p class="copy mid dark">Bri is a designer, front end developer &amp; community enthusiast currently doing her thing in Lancaster, Penna. She's passionate about design for the greater good, the AIGA Women Lead initiative, cats, coffee, yoga, community &amp; cities.</p></div>
    </div>
    <div class="border-across"></div>
    <div class="full-width">
      <div class="content--columns">
        <div class="column">
          <?php
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post();
                the_content();
              } // end while
            } // end if
          ?>
        </div>

        <div class="column">
          <h2 class="subheadline">Find Me On:</h2>
          <ul class="social-links">
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

          <div class="contact-me">
            <h2 class="subheadline">Get In Touch:</h2>
            <a href="mailto:hello@bripiccari.me" title="Shoot me an Email" class="link sans button">Email Me</a>

          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
