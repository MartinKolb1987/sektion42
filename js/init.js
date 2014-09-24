$(document).ready(function(){

	"use strict";

	// Preloader
    $( window ).load(function() {
	    $("#loading-img").fadeOut(1500);
   		$("#preloader").delay(1000).fadeOut(1600);
    });

	// Initialise 
	$('#mc-form').on('submit', function(e){
		e.preventDefault();

		var email = $('#mc-email');
		var data = new FormData();
		data.append('email', email.val());

		$.ajax({
			type: 'POST',
		    url: 'php/send.php',
		    data: data,
		    processData: false,
		    contentType: false
		}).done(function(data) {
			if(data === 'send-email-success'){
				$('.mailchimp-success').html('<b>Wunderbar! Wir melden uns zeitnah bei dir!</b>');
			} else {
				$('.mailchimp-error').html('<b>Hhmmmm, da ging wohl was schief! Probiere es bitte erneut.</b>');
			}
			email.val('');
		}).fail(function(){
			email.val('');
			$('.mailchimp-error').html('<b>Hhmmmm, irgendwie hat unserer Server heute keine Lust! Vielleicht hast du aber auch keine Internetverbindung?</b>');
		});

	});




	// Create launch date for ticker
    // $(function () {

	   //  "use strict";

	   //  // Date below denotes 23 April, 2015
	   //  var launchDay = new Date(2015, 4-1, 23);
	   //  $('#ticker').countdown({
	   //  	until: launchDay,
	   //  	layout: '<div class="col-sm-6 col-md-3"><div class="counter-bg"><div class="counter-inner"><span class="count-digit">{dn}</span><span class="count-text">{dl}</span></div></div></div><div class="col-sm-6 col-md-3"><div class="counter-bg"><div class="counter-inner"><span class="count-digit">{hn}</span><span class="count-text">{hl}</span></div></div></div><div class="col-sm-6 col-md-3"><div class="counter-bg"><div class="counter-inner"><span class="count-digit">{mn}</span><span class="count-text">{ml}</span></div></div></div><div class="col-sm-6 col-md-3"><div class="counter-bg"><div class="counter-inner"><span class="count-digit">{sn}</span><span class="count-text">{sl}</span></div></div></div>'
	   //  });
    // });
    // Countdown end 





    // Full screen header
	$(function(){

		"use strict";

		var winHeight = $(window).height();
		var winWidth = $(window).width();

		if (winWidth > 979) {
			$('.intro').css({
				'height': winHeight,
			});
			} else{
			$('.intro').css({
				'height': '536px'
			});
		};

		$(window).resize(function(){
			var winHeight = $(window).height();
			var winWidth = $(window).width();

			if (winWidth > 979) {
				$('.intro').css({
					'height': winHeight
				});
				} else{
				$('.intro').css({
					'height': '536px'
				});
			};
		});
	});    
	// Full screen header end





	// Initiate smooth scroll
	$(function(){

		"use strict";

		smoothScroll.init({
			speed: 700,
			easing: 'easeInOutCubic'
		});
	});
	// Initiate smooth scroll end 





	// Initialise WOW
	$(function(){

		"use strict";

		new WOW({
			mobile: false
		}).init();

	}); 
	// Wow end






});