<?php /* Template Name: S2A-Actualités */ get_header(); ?>

<?php get_header(); ?>

			<main role="main">
				<!-- section -->
				<section>

					<!-- Webflow Content Block -->
					<div class="content-block">
						<h1><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
					</div>
					<!-- / Webflow Content Block -->

					<!-- Webflow Content Block -->
					<div class="content-block">
							<?php get_template_part('loop-actualite-liste'); ?>
					</div>
					<!-- / Webflow Content Block -->

					<!-- Webflow Content Block -->
					<div class="content-block">
						<?php get_template_part('pagination'); ?>
					</div>
					<!-- / Webflow Content Block -->

				</section>
				<!-- /section -->
			</main>

			<!-- Webflow Flooter -->
			<div class="footer-section">
				<?php get_footer(); ?>
			</div>

	<!-- /Webflow Righ Col -->
	</div>

<?php get_sidebar(); ?>