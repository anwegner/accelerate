<?php
/**
 * Template Name: About Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page">
		<div class="about-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .about-content -->
	</div><!-- #primary -->
	
	<section class="services-section">
		<div class="services-content">
				<h4>Our Services</h4>
					<p class="about-text">We take pride in our clients and the content we create for them. 
					Here’s a brief overview of our offered services.</p>

			<ul class="service-details">
					<?php query_posts('&post_type=services'); ?>
						<?php while ( have_posts() ) : the_post();
							$icon = get_field('icon');
							$size = "medium";
						?>
							<li class="individual-services">
							<h2><?php the_title(); ?></h2>
							<a href="<?php the_permalink(); ?>">
								<figure class="service-icon">
									<?php echo wp_get_attachment_image($icon, $size); ?>
								</figure>
							</a>
							<?php the_content(); ?>
							</li>
		  				<?php endwhile; ?> 
						<?php wp_reset_query(); ?>
					</ul>
	</section>

	<div id="navigation" class="container">
		<div class="abt"><h2>Interested in working with us?</h2><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></div>
</div>	

<?php get_footer(); ?>