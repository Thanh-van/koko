<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

$posts_per_page = 4;
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
                                    <a href="<?php echo $post_url;?>">
                                        <img width="264" height="214" src="<?php echo $post_img; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" sizes="(max-width: 816px) 100vw, 816px">
                                    </a>
                                </figure>
                            <?php

                            }
                            $terms = get_terms('course_cat');
                            ?>

                            <div class="course-info-item">
                                <h5 class="alignwide wp-block-post-title">
                                    <a href="<?php echo $post_url;?>" target="_self" rel=""><?php _e($post_title); ?></a>
                                </h5>
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

