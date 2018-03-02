<?php 
/**
 * 
 * @package senalbape
 */

get_header(); ?>

<main>
    
    <section class="about sec-space max-width">
        <div class="container">
            <div class="row">
                <div class="col col-5">
                <?php 
                    $about_title = get_theme_mod( 'frontpage_about-title' );
                    $about_text = get_theme_mod( 'frontpage_about-text' );
                    $about_image = get_theme_mod( 'frontpage_about-img' );
                
                ?>
                    <h1 class="about__title block-title bt-dark darkgray"><?php echo esc_html( $about_title ); ?></h1>
                    <p class="about__text block-text midgray"><?php echo esc_html( $about_text ); ?></p>
                </div>
                <div class="col col-6 offset-1">
                    <img class="img-whiteborder" src="<?php echo esc_url( $about_image ); ?>">    
                </div>
            
            </div>
        </div>
    </section>

    <section class="testimonials blue-bg sec-space max-width">
        <div class="container">
            <div class="row">
                <div class="col col-6">
                    <?php do_action( 'wprev_tripadvisor_plugin_action', 1 ); ?>
                </div>
                <div class="col col-5 offset-1">
                    <?php 
                        $testimonials_title = get_theme_mod( 'frontpage_testimonials-title' );
                        $testimonials_text = get_theme_mod( 'frontpage_testimonials-text' ); ?>  
                    <h1 class="testimonials__title block-title bt-light aluminum"><?php echo esc_html( $testimonials_title); ?> </h1>
                    <p class="testimonials__text block-text aluminum">
                        <?php echo esc_html( $testimonials_text ); ?>
                    </p>
                </div>            
            </div>
        </div>
    </section>
    <section class="book-now sec-space max-width">
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <h1 class="text-center darkgray book-now__title">Faça sua reserva agora</h1>
                    <div class="bookingcom-logo">
                        <img src="<?php echo get_template_directory_uri() . '/dist/images/bookingcom-logo-white.jpg'?>" alt="">
                    </div>
                    <a href="https://www.booking.com/hotel/br/chalemar-baia-formosa.pt-br.html" class="button text-center w50 book-now__btn large" target="_blank">Reservar</a>
                </div>
            </div>
        </div>
    </section>
    
</main>


<?php

get_footer();