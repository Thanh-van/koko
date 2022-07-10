/*!
 * Theme Function
 *
 * Js Course Title
 *
 * https://arrowhitech.com
 * Copyright 5-2022 AHT
 */

(function ($) {
    "use strict";

    function loadMoreButton() {
        $('body').on('click', '.load-more-button', function() {
            var paged = $('.load-more-button').attr('data-paged');
            $.ajax({
                url: ajaxObject.ajaxurl,
                type: "POST",
                data: {
                    action: "loadmore",
                    posts_per_page: $('.content-course-items').attr('posts_per_page'),
                    paged: paged,
                },
                beforeSend: function() {
                    $('.load-more').html(
                        '<div id="overlay">'
                            + '<div class="cv-spinner">'
                                +'<span class="spinner"></span>'
                            + '</div>'
                        +'</div>'
                    )
                },
                success: function(response) {
                    console.log(response);
                    $('.load-more').remove('.load-more-'+paged);
                    $('.content-course-items .row.advice-article').append(response.data);
                },
    
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(errorThrown);
                },
            });
        })
    }

    $(document).ready(function () {
        loadMoreButton();
    });
})(jQuery);
