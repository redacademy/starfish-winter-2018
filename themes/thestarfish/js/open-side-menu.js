(function($) {

$( "#menu-open" ).click(function() {
    document.getElementById("site-navigation").style.width = "100%";
});

$( "#menu-close" ).click(function() {
    document.getElementById("site-navigation").style.width = "0";
})

})( jQuery );
