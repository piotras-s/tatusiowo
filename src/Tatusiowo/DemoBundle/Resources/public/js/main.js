$(function(){
	'use strict';

	var Daddy = {};

	Daddy.VARS = {
		NAV: $('.jsNav'),
	};

	Daddy.navigation = function($elem){
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
			},
			onButton: function(o){
				var pct = Math.round(o.value);
				$('.jsTime').html(pct);
			}
		});
	}

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
	};

	Daddy.init();

}());
