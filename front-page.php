<?php
/**
 * The template for displaying the main home front page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Helios
 */

get_header();
?>

<!-- Banner -->
	<section id="banner">
		<header id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><?php the_field('cta1home_head'); ?></h2>
			<p><?php the_field('cta1home_text'); ?></p>
		</header>
	</section>

<!-- Carousel -->
	<section class="carousel">
		<div class="reel">
			<?php get_template_part( 'template-parts/post-gallery', 'content' ); ?>
		</div><!-- /.ends reel -->
	</section><!-- /.ends carousel -->

<?php

get_footer();
