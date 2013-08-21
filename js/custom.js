  $(document).ready(function() {
  	//alert("Javascript Working");
  	$("#show").click(function(){
  		$("#mobile-warning").addClass("hidden-phone");
  		$("#work-mobile").removeClass("hidden");
  		$("#work-mobile").addClass("visible-phone");
  		$("#contact").removeClass("hidden-phone");
  	});
  });