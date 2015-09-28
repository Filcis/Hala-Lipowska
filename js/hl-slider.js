/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function ($) {
	
function cycleImages() {

	var $active = $('.image_slider .active');

	var $next = ($('.image_slider .active').next().length > 0) ? $('.image_slider .active').next() : $('.image_slider div:first-child');
	$next.css('z-index',2);
	$active.fadeOut(1500,function(){
		$active.css('z-index', 1).show().removeClass('active');
		$next.css('z-index', 3).addClass('active');
	});
}

$(window).load(function(){
	$('.image_slider div:first-child').addClass('active');
	$('.image_slider').hide();
	$('.image_slider').fadeIn(2000);

setInterval(function(){
	cycleImages();
}, 7000);
	
})
	
//endjquery	
});
