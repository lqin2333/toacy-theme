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
<?php get_footer(); ?>