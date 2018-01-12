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
			<?php dynamic_sidebar( 'services-section' ); ?>
		</div>
	</div>
</section>
<!-- Our Working Process section -->
<section id="why-choose" class="why-choose section">
	<div class="container-fluid fix">
		<div class="row fix">
			<?php dynamic_sidebar( 'process-section' ); ?>			
		</div>
	</div>
</section>
<!--Our Work section -->
<section id="projects" class="projects section">
</section>
<!-- -->
<div id="counter" class="counter section" data-stellar-background-ratio="0.5" style="background-position: 0% -35.5px;">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar( 'counter-section' ); ?>
		</div>
	</div>
</div>
<!--Our Team section -->
<section id="team" class="team section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title">
					<h1>Meet The Team</h1>
					<p>Contry to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece Distinctio tenetur, dolores aperiam, quasi perferendis nemo mollitia</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Testimonials section -->
<section id="testimonials" class="testimonials section">
	<div class="container">
		<div class="row">
		</div>
	</div>
</section>
<?php get_footer(); ?>