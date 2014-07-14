<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 *
 * @author				LearningWorks
 * @copyright			2014 LearningWorks
 * @version				1.0
*/

get_header(); ?>

			<!-- begin: module generic text -->
			<div class="module module-generic-text">
				<div class="container">

				<?php if ( have_posts() ) : ?>
					
					<h1>
						<?php
							if ( is_day() ) :
								printf( '/ <a class="link active">%s</a>', get_the_date() );

							elseif ( is_month() ) :
								printf( '/ <a class="link active">%s</a>', get_the_date( 'F Y' ) );

							elseif ( is_year() ) :
								printf( '/ <a class="link active">%s</a>', get_the_date( 'Y' ) );

							else :
								echo '/ <a class="link active">Archives</a>';

							endif;
						?>
					</h1>

					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							// LOOP THROUGH ARCHIVED POSTS
							// TODO: output blog posts

						endwhile;

					else :
						// If no content
						// TODO

					endif;
					?>

				</div>
			</div>
			<!-- end: module generic text -->
<?php
get_footer();
