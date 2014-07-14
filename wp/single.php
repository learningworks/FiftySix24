<?php
/*
* Wordpress Theme
*
* Single Post Template
*
* @author				LearningWorks
* @copyright			2014 LearningWorks
* @version			1.0
*/


// Render Header
get_header();
?>

			<!-- begin: module generic text -->
			<div class="module module-generic-text">
				<div class="container">
					<h1 class="title"><?php echo get_the_title(); ?></h2>
					<?php echo apply_filters( 'the_content', $post->post_content ); ?>
				</div>
			</div>
			<!-- end: module generic text -->

<?php
// Render Footer
get_footer();
?>
