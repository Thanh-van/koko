
<li class="wp-block-post careers type-careers status-publish">
	<div class="wp-block-group">
		<div class="wp-block-group alignwide">
			<?php 
		if ($post_img) {
			?>
			<figure class="alignwide wp-block-post-featured-image">
				<a href="' . $post_url . '">
					<img width="264" height="214" src="' . $post_img . '"
						class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"
						sizes="(max-width: 816px) 100vw, 816px">
				</a>
			</figure>
			<?php
		}
		$terms = get_terms('course_cat');
	?>

			<div class="course-info-item">
				<?php 
		if ($terms) {
			foreach ($terms as $category) {
				?>
				<a href="' . $category->slug . '" target="_self" rel="">
					<?php _e($category->name); ?>
				</a>
				<?php
			}
		}
	?>
				<h5 class="alignwide wp-block-post-title">
					<a href="' . $post_url . '" target="_self" rel="">
						<?php _e($post_title);?>
					</a>
				</h5>
				<div class="schedule">
					<p>
						<svg style="width: 15px; margin-right: 5px; margin-bottom: -2px;" aria-hidden="true"
							focusable="false" data-prefix="fas" data-icon="calendar-alt"
							class="svg-inline--fa fa-calendar-alt fa-w-14" role="img"
							xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
							<path fill="currentColor"
								d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12
									12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 
									128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.
									4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 
									12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 
									6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 
									12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 
									12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400
									64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8
									0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z">
							</path>
						</svg>
						<?php _e('Lịch Khai Giảng: ')?>
						<?php _e($opening_date)?>
					</p>
					<img width="105" height="16" src="'.WP_PLUGIN_URL.'/course-extension/assets/images/heart.png"
						alt="heart" />
				</div>
				<div class="">
					<div class="">
						<a href="">
							<div class="">
								<?php $teacher['user_avatar'];?>
								<p><span>
										<?php _e('Giảng viên :')?>
									</span><span>
										<?php _e($teacher['user_firstname'])?>
										<?php _e($teacher['user_lastname'])?>
									</span></p>
							</div>
						</a>
						<div class=""><span>
								<?php _e('Đăng ký ngay')?>
							</span></div>
					</div>
					<div class="">
						<p>
							<?php _e('Số lượng: ' . $number);?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</li>
