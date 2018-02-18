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
                    <img class="img-whiteborder" src="<?php echo get_template_directory_uri() . '/dist/images/soworthloving-wallpaper-768x480.jpg' ?>">    
                </div>
            
            </div>
        </div>
    </section>

    <section class="localizacao sec-space bg-midgray">
        <div class="container">
            <div class="row gutters">
                <div class="col col-6">
                    <iframe class="img-whiteborder" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.205485941762!2d-35.005668443619456!3d-6.367447872525705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b29d6ceef67861%3A0xb14ad83c2bb74f2!2sChalemar+Hotel+Pousada!5e0!3m2!1spt-BR!2sbr!4v1518919649029" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col col-5 offset-1">
                    <h1 class="localizacao__title block-title bt-light aluminum">Nossa Localização</h1>
                    <p class="localizacao__text block-text aluminum">
                        The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and illustrious history. It was born from humble roots, only to rise to well-seasoned greatness.
                    </p>
                </div>            
            </div>
        </div>
    </section>
    
</main>


<?php

get_footer();