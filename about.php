<?php
/**
* Template Name: Now Template File
* @package bug-free-enigma
*
*/

get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="about-container">

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="text-wrap">

                <h1 class="page-title">currently / i am...</h1>

                <div class="body-copy">

                    <?php the_content(); ?>

                </div>
            </article>

        <?php endwhile; ?>

        <aside class="currently-widgets">

            <div class="currently-spotify">
                <h2 class="widget-header ">currently / listening to</h2>

                <iframe src="https://embed.spotify.com/?uri=spotify:user:1215731033:playlist:3U3KUsR8qKpyC5cKmSJMX0" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>

            </div>

            <div class="currently-insta">
                <h2 class="widget-header ">currently / seeing</h2>

                <div id="instafeed" class="instafeed">
                </div>

            </div>


        </aside>

        </div>
    </main>
</div>

<?php get_footer(); ?>