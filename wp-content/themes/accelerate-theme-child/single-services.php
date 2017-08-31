<?php
/**
 * The template for displaying services pages
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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field('image_1');

				$size = "full"
			;?>
				
			<article class="services">
				<h2><?php the_title(); ?></h2>
					<div class="services-icon">
						<?php if($image_1){
							echo wp_get_attachment_image( $image_1, $size );
						} ?>
					</div>
					<?php the_content(); ?>

					<p class="read-more-link"><strong><a href="<?php echo $link; ?>">Visit Live Site &rsaquo;</a></strong></a></p>			
			</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>

