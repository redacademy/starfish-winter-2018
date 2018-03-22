(function ($) {

    /**
     * Get post id and create a modal/lightbox for team members
     */

    /*
     * THIS IS FOR LOADING THE PREVIEW IMAGE
     */
    $('.profile-picture-executive').on('click', function (event) {
        event.preventDefault();
        $(".preview-content-container-executive").remove();
        var postId = $(this).attr('id');
        console.log(postId);

        $.ajax({
                method: "GET",
                url: "http://localhost:8888/starfish/wp-json/wp/v2/profile/" + postId + "?_embed",
            }).done(function (data) {
                console.log(data);
                 var teamContent = data.content.rendered;
                var teamTitle = data.title.rendered;
                var teamPhoto = data._embedded["wp:featuredmedia"]["0"].source_url;
                var preview = '<div class="preview-content-container-executive">';
                // var link = data.link;
                preview += '<h2>' + teamTitle + '</h2>';
                preview += '<img src="' + teamPhoto + '">';
                preview += '<input type="button" class="popup-profile" value="Learn More"/>'
                preview += '</div>';
                $('.profile-box-preview-executive').append(preview);

                var htmlTemplate = '<div class="sf-modal">';
                            htmlTemplate += '<div id="sf-modal-close"><i class="fas fa-times"></i></div>';
                            htmlTemplate += '<h2>' + teamTitle + '</h2>';
                            htmlTemplate += '<div>' + teamContent + '</div>';
                            htmlTemplate += '<img src="' + teamPhoto + '">';
    
                            htmlTemplate += '</div>';
    
                            $('body').append(htmlTemplate);
    
                            $('#sf-modal-close').on('click', function () {
                                var animTiming = 250;
                                $('.sf-modal').fadeOut(animTiming);
                                setTimeout(function () {
                                    $('.sf-modal').remove();
                                }, animTiming);
                            });
    
                            $('.popup-profile').on('click', function(){
                                    $('.sf-modal').css("display", "flex");
                            });



            // $(".popup-profile").on('click', function (event) {
            //     event.preventDefault();
            //     var postId = $(".profile-picture").attr('id');
            //     console.log("working");
            //     $.ajax({
            //             method: "GET",
            //             url: "http://localhost:8888/starfish/wp-json/wp/v2/profile/" + postId + "?_embed",
            //         }).done(function (data) {
            //             var teamTitle = data.title.rendered;
            //             var teamContent = data.content.rendered;
            //             var teamPhoto = data._embedded["wp:featuredmedia"]["0"].source_url;
            //             var htmlTemplate = '<div class="sf-modal">';
            //             htmlTemplate += '<div id="sf-modal-close"><i class="fas fa-times"></i></div>';
            //             htmlTemplate += '<h2>' + teamTitle + '</h2>';
            //             htmlTemplate += '<div>' + teamContent + '</div>';
            //             htmlTemplate += '<img src="' + teamPhoto + '">';

            //             htmlTemplate += '</div>';

            //             $('body').append(htmlTemplate);

            //             $('#sf-modal-close').on('click', function () {
            //                 var animTiming = 250;
            //                 $('.sf-modal').fadeOut(animTiming);
            //                 setTimeout(function () {
            //                     $('.sf-modal').remove();
            //                 }, animTiming);
            //             });

            //         }) //end of ajax function
            //         .fail(function (err) {
            //             console.log(err);
            //         });

            // }); // / .profile-picture').on('click'

            })

            
            .fail(function (err) {
                console.log(err);
            });

    });

    //EDITORIAL 
    $('.profile-picture-editorial').on('click', function (event) {
        event.preventDefault();
        $(".preview-content-container-editorial").remove();
        var postId = $(this).attr('id');
        console.log(postId);

        $.ajax({
                method: "GET",
                url: "http://localhost:8888/starfish/wp-json/wp/v2/profile/" + postId + "?_embed",
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
                            htmlTemplate += '<div id="sf-modal-close"><i class="fas fa-times"></i></div>';
                            htmlTemplate += '<h2>' + teamTitle + '</h2>';
                            htmlTemplate += '<div>' + teamContent + '</div>';
                            htmlTemplate += '<img src="' + teamPhoto + '">';
    
                            htmlTemplate += '</div>';
    
                            $('body').append(htmlTemplate);
    
                            $('#sf-modal-close').on('click', function () {
                                var animTiming = 250;
                                $('.sf-modal').fadeOut(animTiming);
                                setTimeout(function () {
                                    $('.sf-modal').remove();
                                }, animTiming);
                            });
    
                            $('.popup-profile').on('click', function(){
                                    $('.sf-modal').css("display", "flex");
                            });
                // $(".popup-profile").on('click', function (event) {
                //     event.preventDefault();
                //     var postId = $(".profile-picture").attr('id');
                //     console.log("working");
                //     $.ajax({
                //             method: "GET",
                //             url: "http://localhost:8888/starfish/wp-json/wp/v2/profile/" + postId + "?_embed",
                //         }).done(function (data) {
                //             var teamTitle = data.title.rendered;
                //             var teamContent = data.content.rendered;
                //             var teamPhoto = data._embedded["wp:featuredmedia"]["0"].source_url;
                //             var htmlTemplate = '<div class="sf-modal">';
                //             htmlTemplate += '<div id="sf-modal-close"><i class="fas fa-times"></i></div>';
                //             htmlTemplate += '<h2>' + teamTitle + '</h2>';
                //             htmlTemplate += '<div>' + teamContent + '</div>';
                //             htmlTemplate += '<img src="' + teamPhoto + '">';

                //             htmlTemplate += '</div>';

                //             $('body').append(htmlTemplate);

                //             $('#sf-modal-close').on('click', function () {
                //                 var animTiming = 250;
                //                 $('.sf-modal').fadeOut(animTiming);
                //                 setTimeout(function () {
                //                     $('.sf-modal').remove();
                //                 }, animTiming);
                //             });

                //         }) //end of ajax function
                //         .fail(function (err) {
                //             console.log(err);
                //         });

                // }); // / .profile-picture').on('click'
            })
            .fail(function (err) {
                console.log(err);
            });

    });



    //BOARD DIRECTORS
    $('.profile-picture-bd').on('click', function (event) {
        event.preventDefault();
        $(".preview-content-container-bd").remove();
        var postId = $(this).attr('id');
        console.log(postId);

        $.ajax({
                method: "GET",
                url: "http://localhost:8888/starfish/wp-json/wp/v2/profile/" + postId + "?_embed",
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
                            htmlTemplate += '<div id="sf-modal-close"><i class="fas fa-times"></i></div>';
                            htmlTemplate += '<h2>' + teamTitle + '</h2>';
                            htmlTemplate += '<div>' + teamContent + '</div>';
                            htmlTemplate += '<img src="' + teamPhoto + '">';
    
                            htmlTemplate += '</div>';
    
                            $('body').append(htmlTemplate);
    
                            $('#sf-modal-close').on('click', function () {
                                var animTiming = 250;
                                $('.sf-modal').fadeOut(animTiming);
                                setTimeout(function () {
                                    $('.sf-modal').remove();
                                }, animTiming);
                            });
    
                            $('.popup-profile').on('click', function(){
                                    $('.sf-modal').css("display", "flex");
                            });
                // $(".popup-profile").on('click', function (event) {
                //     event.preventDefault();
                //     var postId = $(".profile-picture").attr('id');
                //     console.log("working");
                //     $.ajax({
                //             method: "GET",
                //             url: "http://localhost:8888/starfish/wp-json/wp/v2/profile/" + postId + "?_embed",
                //         }).done(function (data) {
                //             var teamTitle = data.title.rendered;
                //             var teamContent = data.content.rendered;
                //             var teamPhoto = data._embedded["wp:featuredmedia"]["0"].source_url;
                //             var htmlTemplate = '<div class="sf-modal">';
                //             htmlTemplate += '<div id="sf-modal-close"><i class="fas fa-times"></i></div>';
                //             htmlTemplate += '<h2>' + teamTitle + '</h2>';
                //             htmlTemplate += '<div>' + teamContent + '</div>';
                //             htmlTemplate += '<img src="' + teamPhoto + '">';

                //             htmlTemplate += '</div>';

                //             $('body').append(htmlTemplate);

                //             $('#sf-modal-close').on('click', function () {
                //                 var animTiming = 250;
                //                 $('.sf-modal').fadeOut(animTiming);
                //                 setTimeout(function () {
                //                     $('.sf-modal').remove();
                //                 }, animTiming);
                //             });

                //         }) //end of ajax function
                //         .fail(function (err) {
                //             console.log(err);
                //         });

                // }); // / .profile-picture').on('click'
            })
            .fail(function (err) {
                console.log(err);
            });

    });


})(jQuery);