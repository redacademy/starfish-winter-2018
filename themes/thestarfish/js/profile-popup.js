(function ($) {

    /**
     * Get post id and create a modal/lightbox for team members
     */
    $('.nominee-popup').on('click', function (event) {
        $(".sf-modal").remove();
        event.preventDefault();
        var postId = $(this).attr('id');
        $.ajax({
                method: "GET",
                url: st_vars.rest_url + "wp/v2/profile/" + postId + "?_embed",
            }).done(function (data) {
                console.log(data);
                var teamContent = data.content.rendered;
                var teamTitle = data.title.rendered;
                var teamPhoto = data._embedded["wp:featuredmedia"]["0"].source_url;
                var htmlTemplate = '<div class="sf-modal" style="display:flex">';
                htmlTemplate += '<div class="popup-profile-content">'
                htmlTemplate += '<div id="sf-modal-close" class="sf-modal-close"><i class="fas fa-times"></i></div>';
                htmlTemplate += '<div class="content-single-profile">'
                htmlTemplate += '<h2>' + teamTitle + '</h2>';
                htmlTemplate += '<p>' + teamContent + '</p>';
                htmlTemplate += '</div>'
                htmlTemplate += '</div>'
                htmlTemplate += '<div class="popup-profile-image"><img src="' + teamPhoto + '"></div>';
                htmlTemplate += '</div>';

                $('body').append(htmlTemplate);

                $('#sf-modal-close').on('click', function () {
                    var animTiming = 250;
                    $('.sf-modal').fadeOut(animTiming);
                    setTimeout(function () {
                        $('.sf-modal').remove();
                    }, animTiming);
                });

            })
            .fail(function (err) {
                console.log(err);
            });

    });




    /*
     * THIS IS FOR LOADING THE PREVIEW IMAGE
     */
    $('.profile-picture-executive').on('click', function (event) {
        $(".sf-modal").remove();
        event.preventDefault();
        $(".preview-content-container-executive").remove();
        var postId = $(this).attr('id');
        $.ajax({
                method: "GET",
                url: st_vars.rest_url + "wp/v2/profile/" + postId + "?_embed",
            }).done(function (data) {
                console.log(data);
                var teamContent = data.content.rendered;
                var teamTitle = data.title.rendered;
                var teamPhoto = data._embedded["wp:featuredmedia"]["0"].source_url;
                var preview = '<div class="preview-content-container-executive">';
                preview += '<h2>' + teamTitle + '</h2>'; 
                preview += '<img src="' + teamPhoto + '">';
                preview += '<input type="button" class="popup-profile" value="Learn More"/>'
                preview += '</div>';
                $('.profile-box-preview-executive').append(preview);

                var htmlTemplate = '<div class="sf-modal">';
                htmlTemplate += '<div class="popup-profile-content">'
                htmlTemplate += '<div id="sf-modal-close" class="sf-modal-close"><i class="fas fa-times"></i></div>';
                htmlTemplate += '<div class="content-single-profile">'
                htmlTemplate += '<h2>' + teamTitle + '</h2>';
                htmlTemplate += '<p>' + teamContent + '</p>';
                htmlTemplate += '</div>'
                htmlTemplate += '</div>'
                htmlTemplate += '<div class="popup-profile-image"><img src="' + teamPhoto + '"></div>';
                htmlTemplate += '</div>';

                $('body').append(htmlTemplate);

                $('#sf-modal-close').on('click', function () {
                    var animTiming = 250;
                    $('.sf-modal').fadeOut(animTiming);
                    setTimeout(function () {
                        $('.sf-modal').remove();
                    }, animTiming);
                });

                $('.popup-profile').on('click', function () {
                    $('.sf-modal').css("display", "flex");
                });

            })

            .fail(function (err) {
                console.log(err);
            });

    });

    //EDITORIAL 
    $('.profile-picture-editorial').on('click', function (event) {
        $(".sf-modal").remove();
        event.preventDefault();
        $(".preview-content-container-editorial").remove();
        var postId = $(this).attr('id');
        console.log(postId);

        $.ajax({
                method: "GET",
                url: st_vars.rest_url + "wp/v2/profile/" + postId + "?_embed",
            }).done(function (data) {
                console.log(data);
                var teamTitle = data.title.rendered;
                var teamContent = data.content.rendered;

                var teamPhoto = data._embedded["wp:featuredmedia"]["0"].source_url;
                var preview = '<div class="preview-content-container-editorial">';
                preview += '<h2>' + teamTitle + '</h2>';
                preview += '<img src="' + teamPhoto + '">';
                preview += '<input type="button" class="popup-profile" value="Learn More"/>'
                preview += '</div>';
                $('.profile-box-preview-editorial').append(preview);

                var htmlTemplate = '<div class="sf-modal">';
                htmlTemplate += '<div class="popup-profile-content">'
                htmlTemplate += '<div id="sf-modal-close" class="sf-modal-close"><i class="fas fa-times"></i></div>';
                htmlTemplate += '<div class="content-single-profile">'
                htmlTemplate += '<h2>' + teamTitle + '</h2>';
                htmlTemplate += '<p>' + teamContent + '</p>';
                htmlTemplate += '</div>'
                htmlTemplate += '</div>'
                htmlTemplate += '<div class="popup-profile-image"><img src="' + teamPhoto + '"></div>';
                htmlTemplate += '</div>';

                $('body').append(htmlTemplate);

                $('#sf-modal-close').on('click', function () {
                    var animTiming = 250;
                    $('.sf-modal').fadeOut(animTiming);
                    setTimeout(function () {
                        $('.sf-modal').remove();
                    }, animTiming);
                });

                $('.popup-profile').on('click', function () {
                    $('.sf-modal').css("display", "flex");
                });
            })
            .fail(function (err) {
                console.log(err);
            });

    });



    //BOARD DIRECTORS
    $('.profile-picture-bd').on('click', function (event) {
        $(".sf-modal").remove();
        event.preventDefault();
        $(".preview-content-container-bd").remove();
        var postId = $(this).attr('id');
        console.log(postId);

        $.ajax({
                method: "GET",
                url: st_vars.rest_url + "wp/v2/profile/" + postId + "?_embed",
            }).done(function (data) {
                console.log(data);
                var teamContent = data.content.rendered;
                var teamTitle = data.title.rendered;
                var teamPhoto = data._embedded["wp:featuredmedia"]["0"].source_url;
                var preview = '<div class="preview-content-container-bd">';
                preview += '<h2>' + teamTitle + '</h2>';
                preview += '<img src="' + teamPhoto + '">';
                preview += '<input type="button" class="popup-profile" value="Learn More"/>'
                preview += '</div>';
                $('.profile-box-preview-bd').append(preview);

                var htmlTemplate = '<div class="sf-modal">';
                htmlTemplate += '<div class="popup-profile-content">'
                htmlTemplate += '<div id="sf-modal-close" class="sf-modal-close"><i class="fas fa-times"></i></div>';
                htmlTemplate += '<div class="content-single-profile">'
                htmlTemplate += '<h2>' + teamTitle + '</h2>';
                htmlTemplate += '<p>' + teamContent + '</p>';
                htmlTemplate += '</div>'
                htmlTemplate += '</div>'
                htmlTemplate += '<div class="popup-profile-image"><img src="' + teamPhoto + '"></div>';
                htmlTemplate += '</div>';
                htmlTemplate += '</div>';

                $('body').append(htmlTemplate);

                $('#sf-modal-close').on('click', function () {
                    var animTiming = 250;
                    $('.sf-modal').fadeOut(animTiming);
                    setTimeout(function () {
                        $('.sf-modal').remove();
                    }, animTiming);
                });

                $('.popup-profile').on('click', function () {
                    $('.sf-modal').css("display", "flex");
                });
            })
            .fail(function (err) {
                console.log(err);
            });

    });




    $('.popup-profile-init').on('click', function(e){
        e.preventDefault();
        var initPostId = $(this).data('id');
        console.log(initPostId);

        $.ajax({
            method: "GET",
            url: st_vars.rest_url + "wp/v2/profile/" + initPostId + "?_embed",
        }).done(function (data) {
            console.log(data);
            var teamContent = data.content.rendered;
            var teamTitle = data.title.rendered;
            var teamPhoto = data._embedded["wp:featuredmedia"]["0"].source_url;
        

            var htmlTemplate = '<div class="sf-modal">';
            htmlTemplate += '<div class="popup-profile-content">'
            htmlTemplate += '<div id="sf-modal-close" class="sf-modal-close"><i class="fas fa-times"></i></div>';
            htmlTemplate += '<div class="content-single-profile">'
            htmlTemplate += '<h2>' + teamTitle + '</h2>';
            htmlTemplate += '<p>' + teamContent + '</p>';
            htmlTemplate += '</div>'
            htmlTemplate += '</div>'
            htmlTemplate += '<div class="popup-profile-image"><img src="' + teamPhoto + '"></div>';
            htmlTemplate += '</div>';
            htmlTemplate += '</div>';

            $('body').append(htmlTemplate);

            $('#sf-modal-close').on('click', function () {
                var animTiming = 250;
                $('.sf-modal').fadeOut(animTiming);
                setTimeout(function () {
                    $('.sf-modal').remove();
                }, animTiming);
            });

          
                $('.sf-modal').css("display", "flex");
       
        })
        .fail(function (err) {
            console.log(err);
        });

    });





    $(".archive-story-container").hover(function(){
        $('p', this).fadeIn("fast");
        $('p', this).css("display", "block");},
        function()  { 
            $('p', this).css("display", "none");
        });
    $(".archive-story-container").hover(function(){
        $("p", this).css("text-shadow", "0.5px 0.5px 0.5px #585858");},
        function()  {
        $("p", this).css("text-shadow", "0.5px 0.5px 0.5px #585858");
        });
       
})(jQuery);