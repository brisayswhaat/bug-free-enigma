<?php
/**
* Template Name: Homepage Template File
* @package bug-free-enigma
*
*/

get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="hero">
            <div class="outer-container">
                <h1 class="headline headline-largest">Hello, Bri here.</h1>
                <ul class="headline">
                    <?php
                    if ( have_posts() ) {
                    	while ( have_posts() ) {
                    		the_post();
                    		the_content(); 
                    	} // end while
                    } // end if
                    ?>
                </ul>
            </div>
        </section>

    </main>
</div>

<?php get_footer(); ?>
