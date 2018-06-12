jQuery('.btn-sec2').click(function () {
    jQuery('.btn-sec2').removeClass('section2_active');
    jQuery('.slide').addClass('hidden');
    jQuery(this).addClass('section2_active');
    var slideNb = jQuery(this).data('slide');
    var slideId = '#slide' + slideNb;
    jQuery(slideId).removeClass('hidden');
    jQuery(slideId).css({"left": "2000px", "position":"absolute"});
    jQuery(document).find(slideId).animate({left: 0}, 700, function(){
        jQuery(slideId).css({ "position":"relative"});
    });
});
jQuery('.tesimonial_nav svg:first-child').click(function () {
    jQuery('#slide_test2').addClass('hidden');
    jQuery('#slide_test1').removeClass('hidden');
    jQuery('.section3').css('background-image', 'url("./wp-content/themes/biznessowa/img/testimonial1.jpg")');
    jQuery('.tesimonial_nav svg:first-child circle').attr('fill', '#17495C');
    jQuery('.tesimonial_nav svg:last-child circle').attr('fill', '#fff');
});
jQuery('.tesimonial_nav svg:last-child').click(function () {
    jQuery('#slide_test2').removeClass('hidden');
    jQuery('#slide_test1').addClass('hidden');
    jQuery('.section3').css('background-image', 'url("./wp-content/themes/biznessowa/img/testimonial2.jpg")');
    jQuery('.tesimonial_nav svg:last-child circle').attr('fill', '#17495C');
    jQuery('.tesimonial_nav svg:first-child circle').attr('fill', '#fff');
});
var count = 1;

function callFunc() {

    if (count % 2 == 0) {
        jQuery('.tesimonial_nav svg:first-child').trigger('click');
    } else {
        jQuery('.tesimonial_nav svg:last-child').trigger('click');
    }
    count++;
}

var interval = null;

jQuery(function () {
    interval = setInterval(callFunc, 4000);
});

jQuery('.section3').mouseover(function () {
    clearInterval(interval);
});
jQuery('.section3').mouseleave(function () {
    interval = setInterval(callFunc, 4000);
});



