// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function ($) {

	/* trigger when page is ready */
	$(document).ready(function (){

		/* Navigation */
        $(document).ready(function () {
            $('#mobile-nav-hamburger').click(function(){
                $('#site-nav').toggle('slide');
            });
        });
        
        $(document).ready(function () {
            $('#nav > li > a').click(function(){
                if ($(this).attr('class') != 'active'){
                    $('#nav li ul').slideUp();
                    $(this).next().slideToggle();
                    $('#nav li a').removeClass('active');
                    $(this).addClass('active');
                }
            });
        });

	});

}(window.jQuery || window.$));