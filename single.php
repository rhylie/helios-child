<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Helios
 */

get_header();
?>

	<div id="primary" class="content-area single-child">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			the_title('<h2>', '</h2>');
			the_content();

			// Render the particular terms assiosiated with the post
			// More information and examples: 
			// -> https://codex.wordpress.org/Function_Reference/get_the_term_list
			echo get_the_term_list( $post->ID, 'topics', 'Topic Term: ', ', ', '' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
