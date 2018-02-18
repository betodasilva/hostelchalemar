<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chalemar
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
            <div class="row gutters sec-space-sm">
                <div class="col col-12">
                    <header class="page-header">
                        <h1 class="darkgray block-title bt-dark"><?php echo post_type_archive_title(); ?></h1>
                        <div class="w80 w100-sm archive-description">
                            <?php
                                the_archive_description();
                            ?>
                        </div>
                        
                    </header><!-- .page-header -->
                </div>
                <?php
                if ( have_posts() ) : ?>


                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post(); ?>

                        
                        <div class="col col-6 col-quarto">
                            <article id="quarto-<?php the_ID(); ?>" <?php post_class(); ?>>
                            
                                <div class="quarto-container img-whiteborder">
                                    <header class="header">
                                        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                                    </header><!-- .entry-header -->
                                    <?php chalemar_post_thumbnail(); ?>
                                </div>     
                            </article>
                        </div>
                    <?php

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>
            </div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
