<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Toacy
 * @since Toacy v1.0
 */

get_header(); ?>


<section class="home-slider">
	<?php echo do_shortcode('[metaslider id="26"]'); ?>
</section>

<!-- services section -->
<section id="services" class="services section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				
					<?php 
						$ourServicePage = get_posts(
						    array( 'name'      => 'our-services',
						           'post_type' => 'page'
						       )
							);
					?>
					<?php 
						if($ourServicePage)
						{
							echo "<div class='section-title'><h1>". get_the_title($ourServicePage[0]->ID) ."</h1></div>";
							echo "<div class='row'><p>".$ourServicePage[0]->post_content."</p></div>";
						}
					?>
				
			</div>
		</div>
	</div>
</section>




<?php get_footer(); ?>