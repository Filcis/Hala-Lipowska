/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut


$("#hl-weather").hide();
    $(".weather-button").click(function(){
        $("#hl-weather").toggle(500);
});
	
var arrowPrimary = $('.arrow-down-button');
var arrowSecondary = $('.arrow-down-button-secondary');
	
//------------------------------------------------	
setInterval(function() {
    arrowSecondary.animate({'margin-top': '8px'}, {
        duration: 400, 
        complete: function() {
            arrowSecondary.animate({'margin-top': '0'}, {
                duration: 400, 
			});
        }});
}, 800);
	
//------------------------------------------------
	
function arrowDown() {
    $('html, body').animate({
         scrollTop: $(window).height() - 72
    }, 1500);
}
	
arrowPrimary.click(arrowDown);
arrowSecondary.click(arrowDown);
	

	if ( $( '.pilau-tabs' ).length )
		$( '.pilau-tabs' ).tabs();
	
	
});

