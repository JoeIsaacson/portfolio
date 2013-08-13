$(document).ready(function(){

	$('.flip').click(function() {
		var $this = $(this),
			$productCard = $this.parents('.product-card'),
			$front = $productCard.find('.front'),
			$back = $productCard.find('.back');
			NUMBER = 10;

		if($front.is(':visible')) {
			$front.hide();
			$back.show();
			alert("HEY");
		} else {
			$back.hide();
			$front.show();
		}
	});

});