<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Toacy
 * @since Toacy v1.0
 */
get_header(); ?>
<!-- Slder section -->
<section class="home-slider">
	<?php echo do_shortcode('[metaslider id="26"]'); ?>
</section>
<!-- Our Services section -->
<section id="services" class="services section">
	<div class="container">
		<div class="row">
			<?php 
				dynamic_sidebar( 'services-row-1' ); 
				dynamic_sidebar( 'services-row-2' ); 
			?>
		</div>
	</div>
</section>
<!-- Our Working Process section -->
<section id="why-choose" class="why-choose section">
	<div class="container-fluid fix">
		<div class="row fix">
			<?php dynamic_sidebar( 'process-block-1' ); ?>
			<?php dynamic_sidebar( 'process-block-2' ); ?>
			<?php dynamic_sidebar( 'process-block-3' ); ?>					
		</div>
	</div>
</section>
<?php get_footer(); ?>