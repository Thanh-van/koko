<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-inner <?php flatsome_blog_article_classes(); ?>">
		<?php
			if(flatsome_option('blog_post_style') == 'default' || flatsome_option('blog_post_style') == 'inline'){
				get_template_part('template-parts/posts/partials/entry-header', flatsome_option('blog_posts_header_style') );
			}
		?>
		<?php get_template_part( 'template-parts/posts/content', 'single' ); ?>
	</div>
</article>

<div class="rating">
	<?php echo do_shortcode('[ratemypost id='.the_ID().'] ')?>
	<?php echo do_shortcode('[ratemypost-result id='.the_ID().'″] ')?>
</div>

<?php else : ?>

	<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>