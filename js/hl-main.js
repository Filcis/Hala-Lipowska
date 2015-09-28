/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut
	
	
//	navigation toggle -----------------------------------------------
	
$('#menu-toggle').click(function() {
  $('#site-navigation').toggleClass("menu-collapsed");
});
	
//	textillate -----------------------------------------------	
	
$('.tlt').textillate({ in: 
	{ effect: 'fadeInLeft', 
	  delay: 50,
	  delayScale: 1,
	}
});

//	scroll effects -----------------------------------------------	


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
         scrollTop: $(window).height() - 60
    }, 1500);
}
	
arrowPrimary.click(arrowDown);
arrowSecondary.click(arrowDown);
	
//-------------------------------------------------
// Change nav transparenvy after scroll

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

//------------------------------------------------		
    var height = $(window).height();

    $('.page-title').css({
        'opacity': ((height - scroll) / height)
    }); 
	
});

jQuery(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut(500);
});
});