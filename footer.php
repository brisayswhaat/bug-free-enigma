<?php
/**
  * The template for displaying the footer.
  * Contains the closing #content div and all content that comes after.
  * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
  * @package bug-free-enigma
  */

 ?>

 </div> <!-- #content -->

 <footer id="colophon" class="site-footer footer" role="contentinfo">
	 <div class="site-info footer-copy">
		 <p>Made with <i class="fa fa-heart"></i> in Lancaster, Pennsylvania. <br>
		 <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bripiccari-me' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bripiccari-me' ), 'WordPress' ); ?></a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; &copy; 2016 Bri Piccari. All Rights Reserved.</p>
	 </div><!-- .site-info -->
 </footer> <!-- #colophon -->

 </div> <!-- #page -->

<?php wp_footer(); ?>

<script src="https://use.fontawesome.com/634e437d8d.js"></script>
<script src="https://use.typekit.net/swx1oyy.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</body>
</html>
