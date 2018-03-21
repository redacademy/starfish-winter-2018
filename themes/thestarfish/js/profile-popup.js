(function($){

    /**
     * Get post id and create a modal/lightbox for team members
     */
    $('.profile-picture').on('click', function(event){
        event.preventDefault();

       var postId = $(this).attr('id');
       console.log(postId);
    //    alert(postId);

    $.ajax({
        method: "GET",
        url: "http://localhost:8888/starfish/wp-json/wp/v2/profile/" + postId,
    }).done(function(data){
        console.log(data);

        var teamTitle = data.title.rendered;
        var teamContent = data.content.rendered;

        var htmlTemplate = '<div class="sf-modal">';
        htmlTemplate += '<div id="sf-modal-close"><i class="fas fa-times"></i></div>';
        htmlTemplate += '<h2>' + teamTitle + '</h2>';
        htmlTemplate += '<div>' + teamContent +'</div>'
        htmlTemplate += '</div>';

        $('body').append(htmlTemplate);

        $('#sf-modal-close').on('click', function(){
            var animTiming = 2000;
            $('.sf-modal').fadeOut(animTiming);
            setTimeout(function(){
                $('.sf-modal').remove();
            }, animTiming);


            
        });

    })
    .fail(function(err){
        console.log(err);
    });


       
    });// / .profile-picture').on('click'

})(jQuery);