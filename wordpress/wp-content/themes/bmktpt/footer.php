<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bmktpt
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!-- <a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'bmktpt' ) ); ?>"><?php //printf( esc_html__( 'Proudly powered by %s', 'bmktpt' ), 'WordPress' ); ?></a> -->
			<?php printf( esc_html__( '%1$s by %2$s.', 'bmktpt' ), 'bmktpt', '<a href="http://bradenleague.com/mraa" rel="designer">braden league</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
