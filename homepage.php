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




                    <?php
                    if ( have_posts() ) {
                    	while ( have_posts() ) {
                    		the_post();
                    		the_content();
                    	} // end while
                    } // end if
                    ?>


            </div>
        </section>

    </main>
</div>
