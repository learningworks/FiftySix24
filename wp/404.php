<?php
/*
* Wordpress Theme
*
* Defaut Page Template
*
* @author				LearningWorks
* @copyright			2014 LearningWorks
* @version				1.0
*/

// Render Header
get_header();
?>

			<!-- begin: module hero -->
			<div class="module module-generic-text" style="height: 250px; background-size: cover; -webkit-background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/image-hero-404.jpg)">
			</div>		
			<!-- end: module hero -->


			<!-- begin: module generic text -->
			<div class="module module-generic-text" style="text-align: center; margin-top: 2em;">
				<!-- begin: container -->
				<div class="container">
					<h1>404 - Page Not Found</h1>
					<p>The page you were looking for doesn't exist!</p>
					<p>Perhaps try using the site navigation bar to locate what you're looking for.</p>
					<br><br>
				</div>
				<!-- end: container -->
			</div>
			<!-- end: module generic text -->

		</div>

<?php
// Render Footer
get_footer();
?>
