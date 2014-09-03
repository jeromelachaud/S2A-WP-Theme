 <?php $query = new WP_Query( 'tag=modernisation' ); ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


	<!-- article -->
	<div class="w-row product-summary-row">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="w-col w-col-6 w-clearfix">

					<!-- post title & details-->
					<div class="article-nom-liste">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</div>
					<?php html5wp_excerpt('html5wp_index'); ?>
					<!-- /post title & details -->

			</div>

			<div class="w-col w-col-6 w-clearfix center">

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(200,200)); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

			<?php edit_post_link(); ?>


			</div>

			<?php // html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

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
