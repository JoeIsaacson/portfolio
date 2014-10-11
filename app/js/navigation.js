// $(document).ready(function () {
//     var calculate = function () {
//
//         var offset = $(window).scrollTop();
//
//         var subOverview = $( "#sub-overview" );
//         var subOverviewContainer = $( ".sub-overview--container" );
//
//
//         var navOffset = subOverview.offset().top;
//
//
//
//         if ( offset > (navOffset - 200) ) {
//             subOverviewContainer.addClass('fixed');
//             subOverviewContainer.css("height", offset - navOffset );
//         } else if (offset < navOffset ) {
//             subOverviewContainer.removeClass('fixed')
//         }
//
//     }
//
//     // setTimeout(function() {
//     //     calculate();
//     //     console.log('fired');
//     // }, 500);
//
//     $(document).scroll(function () {
//         calculate();
//     });
//
// });
