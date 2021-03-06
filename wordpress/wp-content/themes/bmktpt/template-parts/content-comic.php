<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bmktpt
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">



		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bmktpt_posted_on(); ?>
		</div><!-- .entry-meta -->
		
		<?php
					$thumbnail = get_field('feature_image');
		?>

		<div href="<?php echo get_page_link(); ?>" class="img-container">
			<div class="comic-image" style="background-image: url('<?php echo $thumbnail ?>')"></div>
		</div>


		<?php
		endif; ?>
	</header><!-- .entry-header -->

		<div class="entry-content start-xs">
			<? 		$content = get_field('content');
						echo $content;
						?>
			</div

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bmktpt' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bmktpt' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bmktpt_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
