$(document).ready(function(){

var triggers = $('ul.triggers li');
var content  = $('.content .slide');
var lastElem = triggers.length-1;
var target;
//trigger.last
//last-triger
//why is target defined as variable

triggers.first().addClass('selected');
content.hide().first().show();

function sliderResponse(target) {
    content.fadeOut(0).eq(target).fadeIn(0);
    triggers.removeClass('selected').eq(target).addClass('selected');
}

$('.next').click(function() {
    target = $('ul.triggers li.selected').index();
    if (target === lastElem) {
        target = 0;
        alert: ("HEY");
    }    
    else {
        target = target+1;
        alert: ("HEY");
    }
    //target === lastElem ? target = 0 : target = target+1;
    sliderResponse(target);
});

$('.prev').click(function() {
    //target is defined as $(ul.trigger li.selected) and then indexed?
    target = $('ul.triggers li.selected').index();
    lastElem = triggers.length-1;
    //why is this being repeated? Didn't we already define var?
    if (target === 0) {
        target = lastElem;
    }
    else {
        target = target-1;
    }
    //target === 0 ? target = lastElem : target = target-1;
    sliderResponse(target);
});


});