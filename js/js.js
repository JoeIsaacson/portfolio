$(document).ready(function() {

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        console.log("jQuery animation disabled for mobile");
    } else {

        $(window).scroll(function() {
            var scrollLength = $(document).scrollTop();
            console.log("length is " + scrollLength);

            $("#jumbotron--header").css({"margin-top": - (scrollLength * 2.0) + 'px'});
            $("#header--img").css({"margin-top": - (scrollLength * 1.0) + 'px'});
        });
    }
    
});
