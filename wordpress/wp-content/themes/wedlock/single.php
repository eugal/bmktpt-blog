<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wedlock
 */

get_header(); ?>
<div id="content" class="site-content row center-xs">

	<div id="primary" class="content-area col-xs-12
                col-sm-10
                col-md-10
                col-lg-10">
		<main id="main" class="site-main start-xs" role="main">


		<?php
		while ( have_posts() ) : the_post();
					$thumbnail = get_field('feature_image');
		?>

		<div href="<?php echo get_page_link(); ?>" class="img-container">
			<div class="header-image" style="background-image: url('<?php echo $thumbnail ?>')"></div>
		</div>

		<?php




			get_template_part( 'template-parts/content', get_post_format() );

			// $content = get_field('content');
			// // $string  = substr($content,0,100).'...';
			// echo $content;

			the_post_navigation();
		//
		//
		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	// if ( comments_open() || get_comments_number() ) :
		// 	// 	comments_template();
		// 	// endif;
		//
		endwhile; // End of the loop.
		?>

		<p>
			<?php

			?>
	 </p>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
