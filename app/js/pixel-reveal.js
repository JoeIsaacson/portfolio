$(document).ready(function() {

	$("#work-tab").click(function(){
  		$('html,body').animate({
 		    scrollTop: $("#work-overview").offset().top},
    	'slow');
  	});

	$("#contact-tab").click(function(){
		$('html,body').animate({
	  		scrollTop: $("#contact").offset().top},
	    'slow');
	});

	$("#show-mobile-content").click(function(){
		$("#mobile-warning").addClass("hidden-phone");
		$("#work-mobile").removeClass("hidden");
		$("#work-mobile").addClass("visible-phone");
		$("#contact").removeClass("hidden-phone");
	});

	$(".show-real-pixels").click(function () {
        console.log('CLicked!');
		$(this).closest(".row").children(".image").toggleClass("hidden");
        $(this).children("span").toggleClass("hidden");
		console.log('FIRED');
	});

	console.log("Hello 1");

	$("#show-pixels").click(function () {
			console.log("Hello!");
	});

});