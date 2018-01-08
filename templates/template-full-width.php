<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Toacy
 * @since Toacy v1.0
 */

get_header(); ?>


	<?php if(has_post_thumbnail()): ?>
		<section class="breadcrumbs" style="background: url('<?php echo get_the_post_thumbnail_url()?>')">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h2><?php echo get_the_title() ?></h2>
						<?php get_breadcrumb(true); // has featured image ?> 
					</div>
				</div>
			</div>
		</section>
	<?php else:?>
		<section class="breadcrumbs-no-image">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<?php get_breadcrumb(false); // no featured image ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>


<?php get_footer(); ?>