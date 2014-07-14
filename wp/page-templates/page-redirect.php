<?php
/*
Template Name: Redirect
*/

/*
* Wordpress Theme
*
* Site Page Template
*
* @author				LearningWorks
* @copyright			2014 LearningWorks
* @version				1.0
*/

$subpages = get_pages(array('parent' => $post->ID, 'sort_column' => 'menu_order', 'hierarchical' => 0));

if(0 < count($subpages)) {
	$firstpage = array_shift($subpages);
	header('Location: ' . get_permalink($firstpage->ID));
} else {
	header('Location: /');
}

?>
