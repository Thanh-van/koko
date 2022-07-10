<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

if (!function_exists('courses_list')) {

    function courses_list($attrs)
    {
        
        $posts_per_page = (isset($attrs['count']))? $attrs['count']: 3 ;
		$posts_per_page = (isset($_POST['posts_per_page']))? $_POST['posts_per_page']  : $posts_per_page ;
        $paged = (isset($_POST['paged']))? $_POST['paged'] + 1  : 1 ;
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
        $html = (isset($_POST['paged']))? null : '<div class="content-course-items" posts_per_page='.$posts_per_page.'> <div class="row advice-article" >' ;
        if ($loop->have_posts()) :

            // content
            
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
                $item = [
                    'post_title' => $post_title,
                    'excerpt' => $excerpt,
                    'number' => $number,
                    'opening_date' => $opening_date,
                    'teacher' => $teacher,
                    'post_img' => $post_img,
                    'avatar_url' => $avatar_url,
                    'post_url' => $post_url
                ];
                $html .= Course_item($item);
                
            endwhile;

            // end content
			$html .= (isset($_POST['paged']))? null  : '</div>';	
			// loadmore
			if ($paged < $loop->max_num_pages) {
				$html .= '<div class="load-more-'.$paged.' load-more" data-paged='. $paged .'>';
                $html .= '<button type="submit" class="load-more-button" data-max-num-pages="'. $loop->max_num_pages .'" data-paged="'. $paged .'">';
                $html .= '<span>Xem thêm khóa học khác</span>';
                $html .= '<i class="icon-angle-right"></i>';
                $html .= '</button>';
                $html .= '</div>';
			}
        endif;
        $html .= (isset($_POST['paged']))? null  : '</div>';
        
        wp_reset_postdata();

        if(isset($_POST['paged']) && isset($_POST['action']) && $_POST['action'] === 'loadmore'){
            wp_send_json_success($html);
            exit;
        }else return $html;
    }
}

add_shortcode('courses_list', 'courses_list');

add_action( 'wp_ajax_loadmore', 'courses_list' );
add_action('wp_ajax_nopriv_loadmore', 'courses_list');