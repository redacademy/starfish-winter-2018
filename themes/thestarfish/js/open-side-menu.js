(function($) {



//On mobile, when clicking the hamburger menu, will append a + symbol to each submenu item    
$( "#menu-open" ).click(function() {
    $( ".menu-item-has-children a" ).append("<span id='open-menu-link'> <i class='fas fa-plus'></i></span>");
    console.log("works!");
    $("#site-navigation").toggle("fast");
    event.preventDefault();
    }
);

//Changes the + to - when clicked
function isTouchDevice(){
    return typeof window.ontouchstart !== 'undefined';
}

$(document).ready(function(){
    /* If mobile browser, prevent click on parent nav item from redirecting to URL */
    if(isTouchDevice()) {
        // 1st click, add "clicked" class, preventing the location change. 2nd click will go through.
        $("#menu-main-navigation > li > a").click(function(event) {
            // Perform a reset - Remove the "clicked" class on all other menu items
            $("#menu-main-navigation > li > a").not(this).removeClass("clicked");
            $(this).toggleClass("clicked");
            if ($(this).hasClass("clicked")) {
                event.preventDefault();
                $(".main-navigation ul ul").css({
                    "left" : "0",
                });
            }
            if ($(this).hasClass("clicked")) {
                event.preventDefault();
                $(".main-navigation ul").css({
                    "display" : "block",
                });
            }
        });
    }
});


//On mobile, when clicking on the X, will remove each + symbol on each submenu item
$( "#menu-close" ).click(function() {
    $( ".menu-item-has-children span").remove();
    console.log("works again!");
    $("#site-navigation").toggle("fast");
    event.preventDefault();
    }
);

})( jQuery );
