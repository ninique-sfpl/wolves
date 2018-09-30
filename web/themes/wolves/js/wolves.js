/* jquery functions */

(function ($) {
	/* Add active class to current page */

	// get url page on load
	$(document).ready(function(){

		currentPage();
		$(".region-header .list-group-item").on("click", currentPage);
	});


	/* remove annoying tool tips on form elements */
	$("input, select").prop("data-original-title","");
	$("input, select").attr("title",'');
	$(".cke_wysiwyg_frame, cke_reset").css('background-color', 'black');

	function currentPage(){

		var uri = "/" + location.pathname.substring(1);
		var href;
		var current = '';

		// Loop through the buttons and add the active class to the current/clicked button
		$(".region-header .wolves-nav a").each(function(){
  		href = $(this).attr('href');

  		if(uri.indexOf(href) > -1 && href.length > current.length){
  			current = href;
  		} 
  
		});

		if(current){
			$(".region-header .wolves-nav a[href='" + current + "']").css("color", "#F69925");
		}else {
			$(".region-header .wolves-nav a[href='#off-canvas']").css("color", "#F69925");
  	}
	}

})(jQuery); 
