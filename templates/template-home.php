<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Toacy
 * @since Toacy v1.0
 */

get_header(); ?>




<!-- services section -->
<section id="services" class="services section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title">
					<?php 
						$page = get_posts(
						    array( 'name'      => 'our-services',
						           'post_type' => 'page'
						       )
							);
					?>
					<h1><?php echo get_the_title($page[0]->ID) ?></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<p><?php echo $page[0]->post_content; ?></p>
		</div>
	</div>
</section>




<?php get_footer(); ?>