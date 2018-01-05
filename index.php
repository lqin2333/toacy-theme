<?php
/**
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		    <?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div class="post">
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<div class="entry">
							<?php the_content();?>
						</div>
					</div>
				<?php endwhile; ?>
				<?php
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentysixteen' ),
						'next_text'          => __( 'Next page', 'twentysixteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
					) );
				?>
				<?php else:?>
					<div class="post" id="post-<?php the_ID(); ?>" >
						<?php _e('Not Found');?>
					</div>
			<?php endif; ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer();
