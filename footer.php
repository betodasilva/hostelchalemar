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
		<div class="footer-info sec-space-sm bg-darkgray">
			<div class="container">
				<div class="row">
					<div class="col col-2" style="border-right: none;">
						 <img src="<?php echo get_template_directory_uri() . '/dist/images/img_0767-150x150.jpg' ?>" alt="">
					</div>
					<div class="col col-2">
						<?php
							wp_nav_menu( array(
								'theme_location' 	=> 'menu-1',
								'container_class'	=> 'nav-list-container',
								'menu_id'        	=> 'primary-menu',
								'menu_class'	 	=> 'nav-footer'
							) );
						?>
					</div>
					<div class="col col-4">
						<h6 class="text-center lightgray">Siga-nos</h6>
						<ul class="social-networks row">
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/chalemarbf/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col col-4">
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
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
