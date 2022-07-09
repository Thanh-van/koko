<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

$posts_per_page = 6;
$args = array(
    'post_type'       => 'course',
    'post_status'     => 'publish',
    'orderby'         => array(
        'meta_value'  => 'DESC',
        'date'        => 'DESC'
    ),
    'posts_per_page'  => $posts_per_page,
);
$loop = new WP_Query($args);
?>
<div class="content-course-items">
    <?php
    if ($loop->have_posts()) :
    ?>
        <ul class="course-list-items">
            <?php
            while ($loop->have_posts()) : $loop->the_post();
                $post_id = get_the_ID();
                $post_title = get_the_title();
                $post_url = get_the_permalink();
                $terms = get_the_terms($post_id, 'course_cat');
                $excerpt = get_the_excerpt();
                $opening_date = get_field('opening_date');
                $teacher = get_field('teacher');
                $number = get_field('number');
                $avatar_url = get_field('teacher_avatar');
                $image_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'archive-project-img');
                $post_img = $image_arr[0];
            ?>
                <li class="wp-block-post careers type-careers status-publish">
                    <div class="wp-block-group">
                        <div class="wp-block-group alignwide">
                            <?php
                            if ($post_img) {
                            ?>
                                <figure class="alignwide wp-block-post-featured-image">
                                    <a href="' . $post_url . '">
                                        <img width="264" height="214" src="<?php echo $post_img; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" sizes="(max-width: 816px) 100vw, 816px">
                                    </a>
                                </figure>
                            <?php

                            }
                            $terms = get_terms('course_cat');
                            ?>

                            <div class="course-info-item">
                                <h5 class="alignwide wp-block-post-title">
                                    <a href="' . $post_url . '" target="_self" rel=""><?php _e($post_title); ?></a>
                                </h5>
                                <div class="schedule">
                                    <p>
                                        <svg style="width: 15px; margin-right: 5px; margin-bottom: -2px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-alt" class="svg-inline--fa fa-calendar-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 
                                            48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4
                                             12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4
                                              12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12
                                               12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0
                                                128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 
                                                0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 
                                                12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 
                                                12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 
                                                0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 
                                                0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                                            </path>
                                        </svg>
                                        <?php _e('Lịch Khai Giảng: ' . $opening_date); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php

            endwhile;
            ?>
        </ul>
    <?php
    endif;
    ?>
</div>
<?php

wp_reset_postdata();


