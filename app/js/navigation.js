$(document).ready(function () {
    var calculate = function () {

        var offset = $(window).scrollTop();

        var subOverview = $( "#sub-overview" );
        var subOverviewFixed = $( "#sub-overview-fixed" );

        var bodyContainer = $( "#body-container" );
        var bodyContainerOffset = bodyContainer.offset().top - 90;

        var subOverviewName = $( "#sub-overview--name" );

        if ( offset > (bodyContainerOffset - 15) ) {
            subOverviewFixed.removeClass("compressed");
            subOverviewName.css("height", offset - (bodyContainerOffset) + "px")
        } else if (offset < (bodyContainerOffset - 15) ) {
            subOverviewFixed.addClass("compressed");
        }
    }

    setTimeout(function() {
        calculate();
        console.log('fired');
    }, 500);

    $(document).scroll(function () {
        calculate();
    });

});
