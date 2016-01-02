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
	 <div class="social-row">
		 <ul>
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

	 <div class="site-info footer-copy">
		 Made with <i class="fa fa-heart"></i> in Lancaster, Pennsylvania. <br>
		 <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bripiccari-me' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bripiccari-me' ), 'WordPress' ); ?></a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; &copy; 2016 Bri Piccari. All Rights Reserved.
	 </div><!-- .site-info -->
 </footer> <!-- #colophon -->

 </div> <!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
