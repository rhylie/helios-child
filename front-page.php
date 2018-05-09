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
			<?php 
				$id=206; 
				$post = get_post($id);
				$content = apply_filters('the_content', $post->post_content); 
				echo $content;  
			?>
		</header>
	</section>

<!-- Carousel -->
	<section class="carousel">
		<div class="reel">
			<?php get_template_part( 'template-parts/post-gallery', 'content' ); ?>
		</div><!-- /.ends reel -->
	</section><!-- /.ends carousel -->

<!-- Main -->
	<div class="wrapper style2">

		<article id="main" class="container special">
			<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
			<header>
				<h2><?php the_field('home_featured_heading')?></h2>
				<p><?php the_field('home_featured_intro')?></p>
			</header>
			<p><?php the_field('home_featured_description')?></p>
			<footer>
				<a href="#" class="button">Continue Reading</a>
			</footer>
		</article>

	</div>


<!-- Features -->
	<div class="wrapper style1">
		<section id="features" class="container special">
			<header>
				<!-- TODO: Need to figure out a way to dynamically render cat name -->
				<h2><?php echo get_cat_name(32);?></h2>
				<p><?php echo category_description(32);?></p>
			</header>

			<div class="row">
				<?php helios_display_cat_posts(); ?><!-- For more info locate in.. functions.php -->
			</div>
		</section>

	</div><!-- /.ends style1 -->
<?php

get_footer();
