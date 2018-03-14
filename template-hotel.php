<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chalemar
 * Template Name: Hotel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main max-width">

			<section class="about sec-space">
				<div class="container">
					<div class="row">
						<?php 
							$hotel_title = get_theme_mod('thehotel_hotel-title');
							$hotel_text = get_theme_mod('thehotel_hotel-text');
							$hotel_image = get_theme_mod('thehotel_hotel-img');
						?>
						<div class="col col-12">
							<h1 class="about__title block-title bt-dark darkgray"><?php echo esc_html( $hotel_title ); ?></h1>
						</div>
						<div class="col col-5">
							<p class="about__text block-text midgray"><?php echo esc_html( $hotel_text ); ?></p>
						</div>
						<div class="col col-6 offset-1">
							<img src="<?php echo esc_url( $hotel_image ); ?>" alt="<?php echo esc_html( $hotel_title ); ?>" class="img-whiteborder">
						</div>
					
					</div>
				</div>
			</section>

			<section class="about blue-bg sec-space">
				<div class="container">
					<div class="row">
						<?php 
							$recreation_title = get_theme_mod( 'thehotel_recreation-title' );
							$recreation_text = get_theme_mod( 'thehotel_recreation-text' );
							$recreation_image = get_theme_mod( 'thehotel_recreation-img' );
						?>
						<div class="col col-12">
							<div class="col col-4 offset-7">
								<h1 class="about__title block-title bt-light aluminum"><?php echo esc_html( $recreation_title ); ?></h1>
							</div>	
							
						</div>
						<div class="col col-6 order-mobile">
							<?php 
								if ( $recreation_image ): ?>
									<img src="<?php echo esc_url( $recreation_image ); ?>" alt="<?php echo esc_html( $recreation_title )?>" class="img-whiteborder">
								<?php endif;
							?>
						</div>
						<div class="col col-5 offset-1">
							<p class="about__text block-text aluminum"><?php echo esc_html( $recreation_text ); ?></p>
						</div>
					
					</div>
				</div>
			</section>

			<section class="localizacao sec-space">
				<div class="container">
					<div class="row">
						<?php 
							$ourlocation_title = get_theme_mod( 'thehotel_ourlocation-title' );
							$ourlocation_text = get_theme_mod( 'thehotel_ourlocation-text' );
						?>
						<div class="col col-12">
							<h1 class="localizacao__title block-title bt-dark darkgray"><?php echo esc_html( $ourlocation_title ); ?></h1>
						</div>
						<div class="col col-5">
							<p class="localizacao__text block-text midgray">
								<?php echo esc_html( $ourlocation_text ); ?>
							</p>
						</div>
						<div class="col col-6 offset-1">
							<iframe class="img-whiteborder" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.205485941762!2d-35.005668443619456!3d-6.367447872525705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b29d6ceef67861%3A0xb14ad83c2bb74f2!2sChalemar+Hotel+Pousada!5e0!3m2!1spt-BR!2sbr!4v1518919649029" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>            
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
