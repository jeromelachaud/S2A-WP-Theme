<?php get_header(); ?>

			<!-- Webflow Content Block -->
			<div class="content-block">

				<main role="main">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- section -->
				<section>
					<div class="w-row product-summary-row">


					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post title -->
						<h1>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h1>
						<!-- /post title -->

						<!-- Webflow product block -->
						<div class="w-row block-article">


							<!-- Webflow Product Block Left Col for Post Details and Content-->
							<div class="w-col w-col-6">

								<div class="article-designation">
									<?php the_content(); // Dynamic Content ?>
								</div>

								<div class="article-edit">
									<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
								</div>

							<!-- / Webflow Product Block Left Col for Post Details and Content-->
							</div>

							<!-- Webflow Product Block Right Col for Image-->
							<div class="w-col w-col-6 center">

								<!-- post thumbnail -->
									<?php
									if ( has_post_thumbnail() ) {
										$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
										echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
										the_post_thumbnail('post-thumbnail', array( 'class'	=> "produit-image-fiche"));
										echo '</a>';
									}
									?>
								<!-- /post thumbnail -->

							<!-- /Webflow Product Block Right Col for Image -->
							</div>

						<!-- / Webflow product block -->
						</div>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>

				</div>
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