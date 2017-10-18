$(document).ready(function(){
	$('.navicon').onclick(function(){
		$('.nav-overlay').add('nav-overlay--show');
		$('.navicon').add('navicon--toggled');
	});
	$('.navclose').click(function(){
		$('.nav-overlay').removeClass('nav-overlay--show');
		$('.navicon').removeClass('navicon--toggled');
	});
    var Turbolinks = require("turbolinks");
    Turbolinks.start()
});