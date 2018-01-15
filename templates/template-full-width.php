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
									<div class="content">
										<h1 class="page-title"><?php the_title(); ?></h1>
										<?php the_content(); ?>
										<?php edit_post_link(); ?>
										<?php wp_link_pages(); ?>
									</div>
							  </div><!--end post-->
							<?php endwhile; /* rewind or continue if all posts have been fetched */ ?> 
						<?php endif; ?>	
					</div>
				</div>	
			</div>	
		</section>
<?php get_footer(); ?>