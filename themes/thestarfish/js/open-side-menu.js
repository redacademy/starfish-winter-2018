(function($) {

$( "#menu-open" ).click(function() {
    // $("#site-navigation").addClass("open-mobile");
    // if($("#site-navigation").hasClass("open-mobile")) {
    $( ".menu-item-has-children a" ).append("<span class='open-menu-link'> +</span>");
    console.log("works!");
    $("#site-navigation").toggle("fast");
    event.preventDefault();
    }
);

$( "#menu-close" ).click(function() {
    $( ".menu-item-has-children a span").remove();
    console.log("works again!");
    $("#site-navigation").toggle("fast");
    event.preventDefault();
    }
);

})( jQuery );
