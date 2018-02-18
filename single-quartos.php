<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package chalemar
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container sec-space">


		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'quartos' );

			the_post_navigation( array(
                'prev_text'        => _( 'Anterior: %title' ),
                'next_text'        => _( 'Próximo: %title' ),
                
            ) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
