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

<!-- Main -->
	<div class="wrapper style2">

		<article id="main" class="container special">
			<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
			<header>
				<h2><a href="#">Sed massa imperdiet magnis</a></h2>
				<p>
					Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
					pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
				</p>
			</header>
			<p>
				Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
				posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
				sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
				mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
				lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
				consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
				interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
				natoque aenean scelerisque.
			</p>
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
				<h2>Morbi ullamcorper et varius leo lacus</h2>
				<p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
			</header>

			<div class="row">
				<?php helios_display_cat_posts(); ?><!-- For more info locate in.. functions.php -->
			</div>
		</section>

	</div><!-- /.ends style1 -->


<?php

get_footer();
