jQuery(document).ready(function($) {

	//thought of this while playing with bgsize in inspector
	function kenBurns(w, zoom){
		var offset;
		var z;

		$(w).scroll(function(){
			offset = $(window).scrollTop();
			z = offset/zoom;

			$('.page-intro').css(
				'background-size',
				120 - z + '%'
			);
		});
	}

	function fadeNav(w){
		var offset;

		$(w).scroll(function(){
			offset = $(window).scrollTop();

			$('header').css(
				'background-color',
				'rgba(0,0,0,'+offset/500+')'
			);
		});
	}

	$(window).scroll(function(){
		// kenBurns(this, 40);
		fadeNav(this);
	});


	//Mobile nav toggling action-action-action
	$(".m-nav-toggle").click(function(){
	  	console.log('clicked');
	    $("#access").toggleClass("visible");
	});
	
});