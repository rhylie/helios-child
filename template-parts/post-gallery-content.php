<?php
/**
 * Template part for displaying the content thumbnails on homepage gallery.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Helios
 */

?>

<?php 
	// the query
	$wpb_all_query = new WP_Query(

		array(
		  'post_type'=>'post', 
		  'post_status'=>'publish', 
		  'posts_per_page'=>-1
		)

	); 

	?>

    <?php if ( $wpb_all_query->have_posts() ) : ?>

	    <!-- the loop -->
	    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

	    	<!-- render the markup for the post/posts -->
	    	<article class="content-template" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	    		<?php $post_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
	    		<a href="#" class="image featured">
	    			<img src="<?php echo $post_img_url ?>"/>
	    		</a>
	    		<header>
	    			<h3>
	    				<a href="<?php the_permalink();?>">
	    					<?php the_title(); ?>
	    				</a>
	    			</h3>
	    		</header>
	    		<?php echo '<p class="thumb-post-intro">' . wp_trim_words( get_the_content(), 5 ) . '</p>'; ?>

	    	</article><!-- #post-<?php the_ID(); ?> -->

	    <?php endwhile; ?><!-- end of the loop -->

        	<?php wp_reset_postdata(); ?>

	    <?php else : ?>

	    		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; 
?>