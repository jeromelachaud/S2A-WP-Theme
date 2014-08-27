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

							<!-- Webflow product block Left Col for Image-->
							<div class="w-col w-col-6">

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

							<!-- /Webflow product block Left Col for Image-->
							</div>

							<!-- Webflow product block Left Col for Post Details and Content-->
							<div class="w-col w-col-6 col2-left-margin">

								<!-- post details -->
								<p class="article-code">
									<strong><em>Ref. :</em></strong>
									<?php $values = get_post_custom_values("code"); echo $values[0]; ?>
								</p>
								<div>
									<?php echo custom_taxonomies_terms_links(); ?>
								</div>
								<!-- /post details -->

								<div class="article-designation">
									<?php the_content(); // Dynamic Content ?>
									<?php //echo $post->post_content; ?>
								</div>

								<div class="article-edit">
									<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
								</div>

							<!-- / Webflow product block Left Col for Post Details and Content-->
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