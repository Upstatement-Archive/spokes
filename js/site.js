// jQuery(document).ready(function($) {

// 	//thought of this while playing with bgsize in inspector
// 	function kenBurns(w, zoom){
// 		var offset;
// 		var z;

// 		$(w).scroll(function(){
// 			offset = $(window).scrollTop();
// 			z = offset/zoom;

// 			$('.page-intro').css(
// 				'background-size',
// 				120 - z + '%'
// 			);
// 		});
// 	}

// 	// $(window).scroll(function(){
// 	// 	kenBurns(this, 40);
// 	// });
	
// });

jQuery(document).ready(function($){
  $(".m-nav-toggle").click(function(){
  	console.log('clicked');
    $("#access").toggleClass("visible");
  });
});