/* jquery functions 
cke_1_contents style:background-color:transparent;
*/
(function ($) {
	/* Add active class to current page */


	/* remove annoying tool tips on form elements */
	$("input, select").prop("data-original-title","");
	$("input, select").attr("title",'');
	$(".cke_wysiwyg_frame, cke_reset").css('background-color', 'black');
})(jQuery); 
