(function($) {

var post = $.ajax({
        method: 'get',
        url: api_vars.root_url + 'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1'
     })
// .done(function(){console.log("hello");}
})( jQuery );
    