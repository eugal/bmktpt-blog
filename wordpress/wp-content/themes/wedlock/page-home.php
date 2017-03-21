<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wedlock
 */

get_header(); ?>
<div id="content" class="site-content">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="container">

      <?php

    $posts = get_posts(array(
    	'numberposts' => -1,
    	'post_type' => 'post'
    ));

    if($posts)
    {
    	echo '<div class="row">';


    	foreach($posts as $post) {


        $thumbnail = get_field('feature_image'); ?>

        <div class="post col-xs-12 col-sm-6 col-md-5 col-lg-4">
            <div class="box entry">
              <section class="entry">
                <a href="<?php echo get_page_link($post); ?>" class="img-container">
                  <div class="thumbnail" style="background-image: url('<?php echo $thumbnail ?>')"></div>
                </a>
                <div class="meta">
                  <a href="<?php echo get_page_link($post); ?>"><?php the_field('column');

                    var_dump(the_field('column'))

                  ?></a>
                  <h1 class="post-title "><a href="<?php echo get_page_link($post); ?>"><?php the_field('custom_title'); ?></a><h1>
                    <?php
                      $content = get_field('content');
                      $string  = substr($content,0,200).'...';
                      echo $string;
                    ?>
                 </p>
                </div>
              </section>
            </div>
        </div>



        <?php
        //echo '<li><a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a></li>';
    	}

    	echo '</div>';
    }

    ?>

  </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
