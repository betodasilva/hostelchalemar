
(function depoimentoSlide(){
    var slide = document.querySelector('.testimonials-slide');
    if ( !slide ) return;

    $slide = $(slide);
    $slide.slick({
        autoplay: true,
        autoplaySpeed: 6000,
        adaptiveHeight: true
    });
})();

