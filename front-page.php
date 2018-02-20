<?php 
/**
 * 
 * @package senalbape
 */

get_header(); ?>

<main>
    
    <section class="about sec-space">
        <div class="container">
            <div class="row gutters">
                <div class="col col-5">
                    <h1 class="about__title block-title bt-dark darkgray">Sobre</h1>
                    <p class="about__text block-text midgray">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero unde quasi
                    aspernatur deserunt tempore alias molestias provident, beatae cum temporibus
                    modi incidunt debitis molestiae quia autem velit voluptate culpa nostrum.</p>
                </div>
                <div class="col col-6 offset-1">
                    <img class="img-whiteborder" src="<?php echo get_template_directory_uri() . '/dist/images/canola2.jpg' ?>">    
                </div>
            
            </div>
        </div>
    </section>

    <section class="testimonials blue-bg sec-space">
        <div class="container">
            <div class="row gutters">
                <div class="col col-6">
                    <?php do_action( 'wprev_tripadvisor_plugin_action', 1 ); ?>
                </div>
                <div class="col col-5 offset-1">
                    <h1 class="testimonials__title block-title bt-light aluminum">Depoimento dos Hóspedes</h1>
                    <p class="testimonials__text block-text aluminum">
                        The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and illustrious history. It was born from humble roots, only to rise to well-seasoned greatness.
                    </p>
                </div>            
            </div>
        </div>
    </section>
    <section class="book-now sec-space">
        <div class="container">
            <div class="row gutters">
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