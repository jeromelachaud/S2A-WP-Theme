<?php get_header(); ?>

		<!-- Webflow Content Block -->
		<div class="content-block">

			<main role="main">
				<!-- section -->
				<section>

					<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

					<?php get_template_part('loop-article-liste'); ?>

					<?php get_template_part('pagination'); ?>

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

<?php get_sidebar(); ?>
