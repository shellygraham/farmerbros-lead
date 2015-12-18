(function ($, root, undefined) {
	
	$(function () {
		
	'use strict';
		
		// Bucket triggers
		$( document ).ready(function() {
			$('body main #slider .flex-control-nav li:first-child img').click(function() {
	        	$( '.bucket1' ).addClass('active');
	        	$( '.bucket2, .bucket3' ).removeClass('active');
	        	$( '.first, .second, .third' ).css('display', 'none');
	    	});
			$('body main #slider .flex-control-nav li:nth-child(2) img').click(function() {
	        	$( '.bucket2' ).addClass('active');
	        	$( '.bucket1, .bucket3' ).removeClass('active');
	        	$( '.first, .second, .third' ).css('display', 'none');
	    	});
			$('body main #slider .flex-control-nav li:nth-child(3) img').click(function() {
	        	$( '.bucket3' ).addClass('active');
	        	$( '.bucket2, .bucket1' ).removeClass('active');
	        	$( '.first, .second, .third' ).css('display', 'none');
	    	});
	    	
	    	
	    	
	    	
	    	
	    	$('.bucket1 h2').click(function() {
	        	$( '.bucket1 p' ).css('display', 'block');
	    	});
	    	$('.bucket2 h2').click(function() {
	        	$( '.bucket2 p' ).css('display', 'block');
	    	});
	    	$('.bucket3 h2').click(function() {
	        	$( '.bucket3 p' ).css('display', 'block');
	        	$( '.bucket3 p' ).css('padding-bottom', '26px');
	    	});

	    	// Header scroll shrink
	    	var headerwrap = $('header');

		    $(window).scroll(function(){
		
		        var scroll = $(this).scrollTop();
		        var topDist = 100;
		
		        if( scroll > topDist ) {
		            headerwrap.addClass('shrink');
		        }
		        else {
		            headerwrap.removeClass('shrink');
		        }
		    });
	    	
    	});
    	
		// Contact lightbox triggers
		$('.contact-trig').on('click', function () {
		    $('#contact-form').css('position','fixed');
		    $('#contact-form').css('display','block');
		    $('#contact-form').css('opacity','1');
		    $('#contact-form').css('z-index','20');
		    $("#contact-content").attr('src', 'http://service.farmerbros.com/contact-form');
		});

		$('.lightbox-close-icon').on('click', function () {
		    $('#contact-form').css('opacity','0');
		    $('#contact-form').css('z-index','0');
		    $('#contact-form').css('position','relative');
		    $('#contact-form').css('display','none');
		});
		
		$('.wpcf7-submit').on('click', function () {
			$( '.fa-spinner' ).css( 'display','inline' );
		});

		// Init Flexslider
		$('#slider').flexslider({
			animation: "fade",
			controlNav: "thumbnails",
			slideshow: false
		});

		$('#slider2').flexslider({
			animation: "slide",
		});
		
		$(".flex-control-thumbs li img").attr('src', 'http://farmerbrothersbeverages.com/wp-content/uploads/2015/09/placeholder.png');
		
		$('.bucket1').on('click', function () {
        	$('.bucket-1').addClass('flex-active-slide');
    	});
		
		// Force bottom slider height to be 100% of section
		$(".container-img").css({'height':($(".rotating-container").height()+'px')});

		// Header title animation
	    var options = {
			id: 'title-container'
		};
		$('.title-container').initReveal(options);

		// Responsive header title controls
		if ($(window).width() < 753) {
	        $('h1.mobile').animate({
		        opacity: "show"
		    });
	        $('h1.tablet').animate({
		        opacity: "hide"
		    });
		}		
		if ($(window).width() > 752) {
	        $('h1.tablet').animate({
		        opacity: "show"
		    });
	        $('h1.mobile').animate({
		        opacity: "hide"
		    });
		}
		
		 $(window).resize(function() {
			if ($(window).width() > 753) {
		        $('h1.mobile').animate({
			        opacity: "hide"
			    });
		        $('h1.tablet').animate({
			        opacity: "show"
			    });
			}
			if ($(window).width() < 752) {
		        $('h1.mobile').animate({
			        opacity: "show"
			    });
		        $('h1.tablet').animate({
			        opacity: "hide"
			    });
			}
		});
		
		// Slider title fades
		$('.first').delay( 2000 ).animate({
			opacity: "show"
		}, 1500 );
		$('.second').delay( 3000 ).animate({
			opacity: "show"
		}, 1500 );
		$('.third').delay( 4000 ).animate({
			opacity: "show"
		}, 1500 );

		// Animations

		$(function() {
			$(window).scroll( function(){
		        $('.drawing-left, .drawing-right').each( function(i){
		            
		            var bottom_of_object = $(this).position().top + $(this).outerHeight();
		            var bottom_of_window = $(window).scrollTop() + $(window).height();
		            
		            /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
		            bottom_of_window = bottom_of_window + 200;  
		          
		            if( bottom_of_window > bottom_of_object ){
		                
		                $(this).delay( 1000 ).animate({'opacity':'1'}, 1500);
		                    
		            }
		        }); 

		        $('.steps-container .bucket1').each( function(i){
		            
		            var bottom_of_object = $(this).position().top + $(this).outerHeight();
		            var bottom_of_window = $(window).scrollTop() + $(window).height();
		            
		            /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
		            bottom_of_window = bottom_of_window + 200;  
		          
		            if( bottom_of_window > bottom_of_object ){
		                
		                $(this).delay( 1000 ).animate({'opacity':'1'}, 1500);
		                    
		            }
		        }); 

		        $('.steps-container .bucket2').each( function(i){
		            
		            var bottom_of_object = $(this).position().top + $(this).outerHeight();
		            var bottom_of_window = $(window).scrollTop() + $(window).height();
		            
		            /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
		            bottom_of_window = bottom_of_window + 200;  
		          
		            if( bottom_of_window > bottom_of_object ){
		                
		                $(this).delay( 1500 ).animate({'opacity':'1'}, 1500);
		                    
		            }
		        }); 

		        $('.steps-container .bucket3').each( function(i){
		            
		            var bottom_of_object = $(this).position().top + $(this).outerHeight();
		            var bottom_of_window = $(window).scrollTop() + $(window).height();
		            
		            /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
		            bottom_of_window = bottom_of_window + 200;  
		          
		            if( bottom_of_window > bottom_of_object ){
		                
		                $(this).delay( 2000 ).animate({'opacity':'1'}, 1500);
		                    
		            }
		        }); 

		        $('.steps-container .btn').each( function(i){
		            
		            var bottom_of_object = $(this).position().top + $(this).outerHeight();
		            var bottom_of_window = $(window).scrollTop() + $(window).height();
		            
		            /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
		            bottom_of_window = bottom_of_window + 200;  
		          
		            if( bottom_of_window > bottom_of_object ){
		                
		                $(this).delay( 2500 ).animate({'opacity':'1'}, 1500);
		                    
		            }
		        });

		        $('.first1').each( function(i){
		            
		            var bottom_of_object = $(this).position().top + $(this).outerHeight();
		            var bottom_of_window = $(window).scrollTop() + $(window).height();
		            
		            /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
		            bottom_of_window = bottom_of_window + 200;  
		          
		            if( bottom_of_window > bottom_of_object ){
		                
		                $(this).delay( 1000 ).animate({'opacity':'1'}, 1500);
		                    
		            }
		        });

		        $('.second2').each( function(i){
		            
		            var bottom_of_object = $(this).position().top + $(this).outerHeight();
		            var bottom_of_window = $(window).scrollTop() + $(window).height();
		            
		            /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
		            bottom_of_window = bottom_of_window + 200;  
		          
		            if( bottom_of_window > bottom_of_object ){
		                
		                $(this).delay( 2000 ).animate({'opacity':'1'}, 1500);
		                    
		            }
		        });

		        $('.third3').each( function(i){
		            
		            var bottom_of_object = $(this).position().top + $(this).outerHeight();
		            var bottom_of_window = $(window).scrollTop() + $(window).height();
		            
		            /* Adjust the "200" to either have a delay or that the content starts fading a bit before you reach it  */
		            bottom_of_window = bottom_of_window + 200;  
		          
		            if( bottom_of_window > bottom_of_object ){
		                
		                $(this).delay( 3000 ).animate({'opacity':'1'}, 1500);
		                    
		            }
		        });
    
		    });
		});

		
	});
})(jQuery, this);