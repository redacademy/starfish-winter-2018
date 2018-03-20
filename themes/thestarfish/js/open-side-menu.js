(function($) {



//On mobile, when clicking the hamburger menu, will append a + symbol to each submenu item    
$( "#menu-open" ).click(function() {
    $( ".menu-item-has-children a" ).append("<span class='open-menu-link'> +</span>");
    console.log("works!");
    $("#site-navigation").toggle("fast");
    event.preventDefault();
    }
);

//Changes the + to - when clicked
$( ".open-menu-link").click(function(){
    
})

//On mobile, when clicking on the X, will remove each + symbol on each submenu item
$( "#menu-close" ).click(function() {
    $( ".menu-item-has-children a span").remove();
    console.log("works again!");
    $("#site-navigation").toggle("fast");
    event.preventDefault();
    }
);

})( jQuery );
