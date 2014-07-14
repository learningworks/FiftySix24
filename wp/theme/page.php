<?php
/*
* Wordpress Theme
*
* Default Page Template
*
* @author				LearningWorks
* @copyright			2014 LearningWorks
* @version				1.0
*/


// Render Header
get_header();
?>

	<div class="module module-generic-text">
		<div class="container">
			<h1><?php echo $post->post_title; ?></h1>
			<?php echo apply_filters('the_content', $post->post_content); ?>
		</div>
	</div>
	

<?php
// Render Footer
get_footer();
?>
