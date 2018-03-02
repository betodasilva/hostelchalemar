<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chalemar
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!-- <div class="tm testimonials-widget">
			<div class="container">
				<ul class="tm-list">
					<li>
						<p class="tm-text"><i class="fa fa-tripadvisor"></i>Lorem ipsum, dolor sit amet consectetur adipisicing elit...</p>
						<span class="tm-author small">Adriana, </span>
						<span class="tm-author__location small">
							Santa Catarina
						</span>
					</li>
				</ul>
			</div>
		</div> -->
		<div class="footer-info sec-space-sm bg-darkgray max-width">
			<div class="container">
			
				<div class="row">
					<div class="col col-2">
						<div class="footer-logo">
							<?php the_custom_logo(); ?>
						</div>
					</div>
					
					<div class="col col-3 offset-1">
						<h4 class="txt-white nav-footer-title">Links</h4>
						<?php wp_nav_menu( array(
							'theme_location' 	=> 'menu-1',
							'container_class'	=> 'nav-list-container',
							'menu_id'        	=> 'primary-menu',
							'menu_class'	 	=> 'nav-footer'
						) ); ?>
					</div>
					<div class="col col-3">
						<h4 class="txt-white">Endereço</h4>
						<div class="address">
							<p>Lot. Merepe II, Quadra G1, Lote 1A, 
								Porto de Galinhas, PE, Brasil
							</p>
							<p>
							Reservas (81) 2126.2160 / (81) 99146.2083
							Recepção (81) 3311.6000
							</p>
						</div>
						
					</div>
					<div class="col col-3">
						<h4 class="txt-white">Siga-nos</h4>
						<ul class="social-networks">
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/chalemarbf/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
