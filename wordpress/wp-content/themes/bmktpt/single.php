<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bmktpt
 */

get_header(); ?>

	<div id="primary" class="content-area row center-xs">
		<main id="main" class="site-main col-xs-6" role="main">

		<?php
		while ( have_posts() ) : the_post();

			$column = get_field('column');


			if(isset($column[0]->term_id) && $column[0]->term_id == 9) { //9 is comic ID
				get_template_part( 'template-parts/content-comic', get_post_format() );
			} else {
				get_template_part( 'template-parts/content', get_post_format() );
			}

			// if(isset($column[0]->term_id)) {
			// 	if($column[0]->term_id == int(9)) {
			// 		get_template_part( 'template-parts/content-none', get_post_format() );
			// 	}
			// } else {
				// get_template_part( 'template-parts/content', get_post_format() );
			// }



			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
