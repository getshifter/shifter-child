jQuery(document).ready(function( $ ) {
  
  $('body').attr('data-pricing', 'monthly');
  
  $('.toggle-pricing a').on('click', function(e){
    e.preventDefault();

    $('body').attr('data-pricing', $('body').attr('data-pricing') == 'monthly' ? 'annual' : 'monthly')
    
  });

  $('.testimonials-slider').slick({
    infinite: true,
    slidesToShow: 3,
    arrows: false,
    centerMode: true,
    centerPadding: '30px',
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false
  });

});