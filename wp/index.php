<?php
/*
* Wordpress Theme
*
* Default Blog Page Template
*
* @author				LearningWorks
* @copyright			2014 LearningWorks
* @version				1.0
*/

// Render Header
get_header();
?>

			<!-- begin: module generic text -->
			<div class="module module-generic-text">
				<div class="container">

				<?php if ( have_posts() ) : ?>
					
					<h1>Blog</h1>

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
// Render Footer
get_footer();
?>