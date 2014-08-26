<?php /* Template Name: S2A-Home */ get_header(); ?>

			<!-- Webflow Content Block -->
			<div class="w-clearfix content-block">

				<main role="main">

				<!-- section -->
				<section>

					<h1><?php the_title(); ?></h1>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<br class="clear">

						<?php edit_post_link(); ?>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>

				</section>
				<!-- /section -->

				</main>

			</div>
			<!-- / Webflow Content Block -->

			<!-- Webflow Flooter -->
			<div class="footer-section">
				<?php get_footer(); ?>
			</div>

	<!-- /Webflow Righ Col -->
	</div>