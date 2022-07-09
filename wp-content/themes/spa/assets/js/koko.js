jQuery(document).ready(function($) {
    $('body').on('click', '#ftwp-header-control', function() {
        $('ol#ftwp-list').toggle();
    })

    $('body').on('click', '#ftwp-header-minimize', function() {
        $('ol#ftwp-list').toggle();
    })
})