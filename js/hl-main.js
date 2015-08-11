/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut
	
    $(".arrow-down-button").click(function() {
    $('html, body').animate({
         scrollTop: $(window).height() - 72
    }, 1500);
});
	

    $("#hl-weather").hide();
    $(".weather_button").click(function(){
        $("#hl-weather").toggle(500);
    });

	
	
});

