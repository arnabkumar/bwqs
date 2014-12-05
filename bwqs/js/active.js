jQuery(document).ready(function($){
  
  
 /*dropdown menu over effect Twitter BT*/

$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
});



$('body').addClass('woocomace')
  
  
  
}); 
