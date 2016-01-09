<?php
/**
* Template Name: Now Template File
* @package bug-free-enigma
*
*/

get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="outer-container">

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="copy-block">

                <h1 class="">currently / i am...</h1>

                <p class="">

                    <?php the_content(); ?>

                </p>
            </article>

        <?php endwhile; ?>

        <section class="currently-widgets">

            <div class="left">
                <h2 class="">currently / listening to</h2>

                <iframe src="https://embed.spotify.com/?uri=spotify:user:1215731033:playlist:3U3KUsR8qKpyC5cKmSJMX0" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>

            </div>

            <div class="right">
                <h2 class="">currently / seeing</h2>

            </div>


        </section>

        </div>
    </main>
</div>

<?php get_footer(); ?>
