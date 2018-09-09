jQuery(document).ready(function( $ ) {
  
  $('body').attr('data-pricing', 'monthly');
  
  $('.toggle-pricing a').on('click', function(e){
    e.preventDefault();
    
    // $('body').addClass('pricing-annual');

    // $('body').toggleClass( $(this).attr('id') );

    $('body').attr('data-pricing', $('body').attr('data-pricing') == 'monthly' ? 'annual' : 'monthly')

    // $( "#country-id > li" ).click(function() {
    //   $('body').toggleClass( $(this).attr('id') );
    // });  

    // if ( jQuery(this).hasClass('active') ) {
    //   alert('i am already active');
    // } else {
    //   jQuery('.switcher, .plans').toggleClass('active');
    // }
    
  });
	
});