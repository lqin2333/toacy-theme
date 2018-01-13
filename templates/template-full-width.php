<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Toacy
 * @since Toacy v1.0
 */

get_header(); ?>
		<section class="breadcrumbs" <?php if(has_post_thumbnail()){ echo 'style="background:url('.get_the_post_thumbnail_url().');"'; }?> >
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h2><?php echo get_the_title() ?></h2>
						<?php get_breadcrumb(true); // has featured image ?> 
					</div>
				</div>
			</div>
		</section>
		<?php $pageTitle = get_the_title(); ?>
		<section id="<?php echo $pageTitle;?>" class="<?php echo $pageTitle;?> section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
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
					</div>
				</div>	
			</div>	
		</section>
<?php get_footer(); ?>