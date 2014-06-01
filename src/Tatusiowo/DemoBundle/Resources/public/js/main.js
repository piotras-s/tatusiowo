$(function(){
	'use strict';

	var Daddy = {};

	Daddy.VARS = {
		NAV: $('.jsNav'),
	};

	Daddy.navigation = function($elem) {
		$elem.sidr({
			side: 'left',
			speed: 400
		});
	};

	Daddy.slider = function($elem) {
		$('#slider').sGlide({
			height: 10,
			image: '/images/icons/knob.png',
			startAt: 20,
			colorStart: '#95a527',
			colorEnd: '#95a527',
			buttons: true,
			drag: function(o){
				var pct = Math.round(o.value);
				$('.jsTime').html(pct);
				$('#minutes').val(pct);
			},
			onButton: function(o){
				var pct = Math.round(o.value);
				$('.jsTime').html(pct);
				$('#minutes').val(pct);
			}
		});
	};

	Daddy.infiniteScroll = function($elem) {
		var loading = false;

		$(window).on('scroll', function(){
			if ($(window).scrollTop() >= ($(document).height() - $(window).height())) {

				if(!loading) {
					var $articles = $elem.find('>article').slice(0,6).clone();
					$elem.append($articles);
					loading = true;
				}

				setTimeout(function(){
					loading = false;
				}, 1000);
			}
		});
	};

	Daddy.init = function() {
		var $window = $(window);

        if(this.VARS.NAV.length) {
            this.navigation(this.VARS.NAV);
        }

        $(document).on('click', function(e){
            if(!$(event.target).closest('#sidr').length && $('body').hasClass('sidr-open')) {
                $('body').removeClass('sidr-open');
				$.sidr('close');
	        }
        });

        if($('#slider').length) {
        	Daddy.slider();
        }

        if($('.jsActiveList').length) {
        	Daddy.infiniteScroll($('.jsActiveList'));
        }

        if($('.jsCheckboxes').length) {
	        // home
	        $('.jsHome').on('click', function(e){
	        	e.preventDefault();
	        	$('.jsOutside').removeClass('active');
	        	$(this).addClass('active');
	        	$('.picture.home').css('display','block');
	        	$('.picture.outside').css('display','none');
	        	$('#input-home').val('1');
	        	$('#input-outside').val('0');
	        });

	        $('.jsOutside').on('click', function(e){
	        	e.preventDefault();
	        	$('.jsHome').removeClass('active');
	        	$(this).addClass('active');
	        	$('.picture.home').css('display','none');
	        	$('.picture.outside').css('display','block');
	        	$('#input-home').val('0');
	        	$('#input-outside').val('1');
	        });
	    }
	};

	Daddy.init();

}());
