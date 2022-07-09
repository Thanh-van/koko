<?php
/**
 * Generate breadcrumbs
 * 
 * @return html
 */
function get_breadcrumb() {
    ?>
        <a href="<?php home_url() ?>" rel="nofollow"><?php _e('Home')?></a>
    <?php
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_terms(get_the_ID(), 'course_cat');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                ?>
                    <span class="breadcrumb-single-title"><?php _e(the_title())?></span>
                <?php

            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        _e('<p>'.the_title().'</p>') ;
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
  }