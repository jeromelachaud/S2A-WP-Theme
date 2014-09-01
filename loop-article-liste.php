<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div class="w-row product-summary-row">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="w-col w-col-4 w-clearfix">

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(200,200)); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

			</div>

			<div class="w-col w-col-4 w-clearfix col2-liste-left-margin">

					<!-- post title & details-->
					<div class="article-nom-liste">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</div>
					<div>
						<?php echo custom_taxonomies_terms_links(); ?>
					</div>
					<!-- /post title & details -->

			</div>

			<div class="w-col w-col-4 col2-liste-left-margin">

				<!-- post link -->
					<a class="button-article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Voir le produit</a>
				<!-- /post link -->

			</div>

			<?php // html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

			<?php edit_post_link(); ?>

		</article>
	<!-- /article -->
	</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
