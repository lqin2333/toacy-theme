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


			<!-- version2 below -->
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				    <div class="post-header">
				        <div class="date"><?php the_time( 'M j y' ); ?></div>
				        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				        <div class="author"><?php the_author(); ?></div>
				    </div><!--end post header-->
				    <div class="entry clear">
				        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
				        <?php the_content(); ?>
				        <?php edit_post_link(); ?>
				        <?php wp_link_pages(); ?>
				    </div><!--end entry-->
				    <div class="post-footer">
				        <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
				    </div><!--end post footer-->
				  </div><!--end post-->
				<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
				  <div class="navigation index">
				    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
				    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
				  </div><!--end navigation-->
				<?php else : ?>
			<?php endif; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
