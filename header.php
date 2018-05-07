<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Helios
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body 
	<?php 
	if ( is_front_page() ) : ?>

		<?php body_class('homepage') ?>

	<?php
	else :

		body_class();

	endif; ?> >

<div id="page-wrapper" class="header-child-wrapper">




<?php 

if ( is_front_page() && !is_home() ) : ?> <!-- If homepage displays as > static page -->

  <!-- Banner -->
  	<?php $post_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
  
	<header id="header" style="background: url('<?php echo $post_img_url ?>')">

		<div class="inner">

			<header>
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title" id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<h1 class="site-title" id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?></a></h1>
					<?php
				endif;
				echo '<hr />';
				$helios_description = get_bloginfo( 'description', 'display' );
				if ( $helios_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $helios_description; ?></p>
				<?php endif; ?>
			</header>

			<footer>
				<a href="#banner" class="button circled scrolly">Start</a>
			</footer>

		</div><!-- .inner -->

		<?php
			wp_nav_menu( 
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container_id'   => 'nav'
				) );
		?>

	</header><!-- #masthead -->

<?php endif; ?>

	<div id="content" class="site-content">
