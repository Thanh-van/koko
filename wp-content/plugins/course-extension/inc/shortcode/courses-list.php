<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

if (!function_exists('courses_list')) {
    function courses_list($attrs)
    {
        $posts_per_page = 6;
		$paged = 1;
        $args = array(
            'post_type'       => 'course',
            'post_status'     => 'publish',
			'paged'			  => $paged,
            'orderby'         => array(
                'meta_value'  => 'DESC',
                'date'        => 'DESC'
            ),
            'posts_per_page'  => $posts_per_page,
        );
        $loop = new WP_Query($args);
        $number_of_page = $loop->max_num_pages;
        $html = '<div class="content-course-items">';


        if ($loop->have_posts()) :

            // content
            $html .= '<ul class="course-list-items">';
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


                $html .= '<li class="wp-block-post careers type-careers status-publish">';
                $html .= '<div class="wp-block-group">';
                $html .= '<div class="wp-block-group alignwide">';
                if ($post_img) {
                    $html .= '<figure class="alignwide wp-block-post-featured-image">';
                    $html .= '<a href="' . $post_url . '">';
                    $html .= '<img width="264" 
                                height="214" 
                                src="' . $post_img . '" 
                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image" 
                                alt="" 
                                loading="lazy" 
                                sizes="(max-width: 816px) 100vw, 816px">';
                    $html .= '</a>';
                    $html .= '</figure>';
                }
                $terms = get_terms('course_cat');

                $html .= '<div class="course-info-item">';
                if ($terms) {
                    foreach ($terms as $category) {
                        $html .= '<a href="' . $category->slug . '" target="_self" rel="">' . $category->name . '</a>';
                    }
                }
                $html .= '<h5 class="alignwide wp-block-post-title">';
                $html .= '<a href="' . $post_url . '" target="_self" rel="">' . $post_title . '</a>';
                $html .= '</h5>';
                $html .= '<h5>'. $excerpt .'</h5>';
                $html .= '<div class="schedule">';
                $html .= '<p>';
                $html .= '<svg style="width: 15px; margin-right: 5px; margin-bottom: -2px;" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="calendar-alt" class="svg-inline--fa fa-calendar-alt fa-w-14" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
                            </path>
                        </svg>';
                $html .= 'Lịch Khai Giảng: ' . $opening_date;
                $html .= '</p>';
                $html .= '<img width="105" height="16" src="'.WP_PLUGIN_URL.'/course-extension/assets/images/heart.png" alt="heart" />';
                $html .= '</div>';
                $html .= '<div class="">';
                $html .= '<div class="">';
                $html .= '<a href="">';
                $html .= '<div class="">';
                $html .=  '<img src="'. $avatar_url .'" alt="Teacher Avatar">';
                $html .= '<p><span>Giảng viên : </span><span>'. $teacher['user_firstname'] . ' ' . $teacher['user_lastname'] .'</span></p>';
                $html .= '</div>';
                $html .= '</a>';
                $html .= '<div class=""><span>Đăng ký ngay</span></div>';
                $html .= '</div>';
                $html .= '<div class="">';
                $html .= '<p>Số lượng: '. $number .'</p>';
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</li>';
            endwhile;
            $html .= '</ul>';
            // end content
				
			// loadmore
			if ($paged < $loop->max_num_pages) {
				$html .= '<div class="load-more-1 load-more">';
				$html .= '<button type="submit" class="load-more-button" data-max-num-pages= '. $loop->max_num_pages .' data-paged=1>';
				$html .= '<span>Xem thêm khóa học khác</span>';
				$html .= '<i class="icon-angle-right"></i>';
				$html .= '</button>';
				$html .= '</div>';
			}
            

    

        endif;
        $html .= '</div>';

        wp_reset_postdata();

        return $html;
    }
}

add_shortcode('courses_list', 'courses_list');
