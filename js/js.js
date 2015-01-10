$(window).scroll(function() {
    var scrollLength = $(document).scrollTop();

    console.log("length is " + scrollLength);
    $("#jumbotron--header").css({"margin-top": - (scrollLength * 2.0) + 'px'});
    $("#kendrick--header").css({"margin-top": - (scrollLength * 1.0) + 'px'});
});
