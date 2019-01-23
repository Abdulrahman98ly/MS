
jQuery("#go").click(function () {
    jQuery("body,html").animate({scrollTop: 50}, 50);
    jQuery("#sarch").focus();
});



jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() > 150) {
        jQuery("#header").addClass("visible");
    } else {
        jQuery("#header").removeClass("visible");
    }
});