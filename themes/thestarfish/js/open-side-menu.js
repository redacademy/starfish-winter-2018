(function($) {

// $( "#menu-open" ).click(function() {
//     document.getElementById("site-navigation").style.width = "100%";
// });

// $( "#menu-close" ).click(function() {
//     document.getElementById("site-navigation").style.width = "0";
// })

$( "#menu-open" ).click(function() {
    // $("#site-navigation").addClass("open-mobile");
    // if($("#site-navigation").hasClass("open-mobile")) {
    $("#site-navigation").toggle("fast");
    event.preventDefault();
    }
);

$( "#menu-close" ).click(function() {
    // if($("#site-navigation").hasClass("open-mobile")) {
    $("#site-navigation").toggle("fast");
    event.preventDefault();
    }
);

})( jQuery );
