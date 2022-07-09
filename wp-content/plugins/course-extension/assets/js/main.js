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
            console.log(paged);
            $.ajax({
                url: ajaxObject.ajaxurl,
                type: "POST",
                data: {
                    action: "loadmore",
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
                    $('.load-more').remove('.load-more-'+paged);
                    $('.content-course-items').append(response);
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
