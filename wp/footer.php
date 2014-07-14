<?php
/*
* Wordpress Theme
*
* Footer Template
*
* @author				LearningWorks
* @copyright			2014 LearningWorks
* @version				1.0
*/

?>
		</div>
		<!-- end: CONTENT -->

		<!-- begin: FOOTER -->
		<footer class="global-footer">
			<div class="container">
				<!-- TODO -->
			</div>
		</footer>
		<!-- end: FOOTER -->

	</div>
	<!-- end: page -->

	<!-- LOAD jQuery -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script>
	
	<script type="text/javascript">
 		var ajaxURL = '<?php echo admin_url('admin-ajax.php'); ?>';
 	</script>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/site.js"></script>

	<?php wp_footer();?>

</body>

</html>