$(document).ready(function() {

    $(document).scroll(function () {

        var offset = $(window).scrollTop();

        var subOverview = $( "#sub-overview" );
        var subOverviewFixed = $( "#sub-overview-fixed" );

        var workOverview = $( "#work-overview" );
        var workOverviewOffset = workOverview.offset().top - 90;

        var subOverviewName = $( "#sub-overview--name" );

        console.log(workOverviewOffset);



        if ( offset > (workOverviewOffset - 15) ) {
            subOverviewFixed.removeClass("compressed");
            subOverviewName.css("height", offset - (workOverviewOffset) + "px")
        } else if (offset < (workOverviewOffset - 8) ) {
            subOverviewFixed.addClass("compressed");
        }



        var calculate = function () {


        }

        calculate();
    });

});
