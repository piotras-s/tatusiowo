$(function(){
	'use strict';

	var Daddy = {};

	Daddy.VARS = {
		NAV: $('.jsNav'),
	};

	Daddy.navigation = function($elem){
		$elem.sidr({
			side: 'right',
			speed: 400
		});
	};

	Daddy.init = function() {
		var $window = $(window);

        if(this.VARS.NAV.length) {
            this.navigation(this.VARS.NAV);
        }
	};

	Daddy.init();

}());
