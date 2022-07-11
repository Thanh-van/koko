jQuery(document).ready(function($) {
    $('.rmp-results-widget').appendTo($('.single-course .single-page'))

    $('body').on('click', '#ftwp-header-control', function() {
        $('ol#ftwp-list').toggle();
    })

    $('body').on('click', '#ftwp-header-minimize', function() {
        $('ol#ftwp-list').toggle();
    })
})