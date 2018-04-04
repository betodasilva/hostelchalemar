<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chalemar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="testimonial">
		<div class="testimonial-text">
			<?php the_content(); ?>
			<i class="fab fa-tripadvisor fa-2x"></i>
		</div>
	</div>  
</article><!-- #post-<?php the_ID(); ?> -->
