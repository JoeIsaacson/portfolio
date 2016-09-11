$(document).ready(function() {

    $(".message").hide();

    function showLoaderMessage() {
      $(".message").fadeIn(500);
      console.log("show message");
    };

    setTimeout(showLoaderMessage, 2000);

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        console.log("jQuery animation disabled for mobile");
    } else {

        $(window).scroll(function() {
            var scrollLength = $(document).scrollTop();
            $("#jumbotron--header").css({"margin-top": - (scrollLength * 2.0) + 'px'});
            $("#header--img").css({"margin-top": - (scrollLength * 1.0) + 'px'});
        });
    }

});
