<?php
/*
* Wordpress Theme
*
* Header Template
*
* @author				LearningWorks
* @copyright			2014 LearningWorks
* @version				1.0
*/

// Default title
global $page, $paged;

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php

	// Render the page title

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		echo sprintf(' | Page %s', max($paged, $page));
	}

	?></title>
	
	<meta name="description" content="Customer focused training resource development business working globally from New Zealand"/>
	<meta name="keywords" content="Training, content development, Moodle, Totara, customer focused, soft skills, technical writing, instructional design, IT support, web development, learning management system, LMS, professional development, graphic design, education, ESOL"/>

	<!-- Facebook Open Graph Metadata -->
	<meta property="og:title" content="Learning Works | Educational Services"> 
	<meta property="og:description" content="Customer focused training resource development business working globally from New Zealand"> 
	<meta property="og:type" content="Educational Services">
	<meta property="og:url" content="http://www.learningworks.co.nz/">
	<meta property="og:image" content="http://www.learningworks.co.nz/logo.jpg">
	<meta property="og:site_name" content="LearningWorks">
	<meta property="fb:admins" content="your-Facebook-page-user-ID">

	<!-- Twitter Cards Metadata -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="http://www.learningworks.co.nz/">
	<meta name="twitter:title" content="Learning Works | Educational Services">
	<meta name="twitter:description" content="Customer focused training resource development business working globally from New Zealand">
	<meta name="twitter:image" content="http://www.learningworks.co.nz/logo.jpg">

	<!-- Google+ Metadata -->
	<meta itemprop="name" content="Learning Works | Educational Services">
	<meta itemprop="description" content="Customer focused training resource development business working globally from New Zealand">
	<meta itemprop="image" content="http://www.learningworks.co.nz/logo.jpg">

	<!-- Viewport -->
	<meta id="metaviewport" name="viewport" content="width=device-width,initial-scale=1.0"/>
	
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-160x160.png" sizes="160x160" />
	<meta name="msapplication-TileColor" content="#da532c" />
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri(); ?>/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri(); ?>/mstile-150x150.png" />
	<meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri(); ?>/mstile-310x310.png" />

	<!--[if lt IE 9]>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
	<![endif]-->

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />

	<?php wp_head(); ?>

</head>

<body id="top">

	<!-- begin: mobile navigation -->
	<div class="mobile-nav-container">
		<div class="wrapper">
			<ul class="nav--mobile">
				<?php
					//RENDER MOBILE NAVIGATION
					$pages = get_pages(array('child_of' => 0, 'sort_column' => 'menu_order', 'hierarchical' => 0));
					foreach ($pages as $page) {
						if ($page->post_parent === 0 && get_post_meta($page->ID, 'page_visibility', true) !== 'hidden' && get_field('nav_location', $page->ID) != 3 ) {
							// Render the page item
							printf('					<li class="nav__item"><a class="nav__link %s" href="%s">%s</a>',
								!!$post && $post->ID === $page->ID ? 'active' : '',	// check $post is set, as it won't be on 404 pages
								get_permalink($page->ID),
								str_replace('Homepage', 'Home', $page->post_title)
								);
							render_child_pages($page->ID, $post);
							echo "</li>\n";
						}
					}
				?>
			</ul>
		</div>
	</div>
	<!-- end: mobile navigation -->

	<!-- begin: page -->
	<div class="page">

		<div class="mobile-nav-handler--close"></div>

		<!-- begin: HEADER -->
		<header class="global-header">
			<div class="container">
				<a href="<?php echo site_url(); ?>">
					<img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="LearningWorks Logo">
				</a>
				<nav class="nav">
					<div class="mobile-nav-handler--toggle">
						<div class="icon icon--hamburger"></div>
					</div>
					<ul class="nav--primary">
						<?php

							//RENDER CHILD NAVIGATION
							function render_child_pages($id, $thisPost) {
								
								$pages = get_pages(array('child_of' => $id, 'sort_column' => 'menu_order', 'hierarchical' => 0));

								if(is_array($pages) && 0 < count($pages)) {

									echo '<ul class="nav--child">';

									foreach ($pages as $page) {
										if ($page->post_parent === $id && get_post_meta($page->ID, 'page_visibility', true) !== 'hidden') {
											// Render the page item
											printf('					<li class="nav__item"><a class="nav__link %s" href="%s">%s</a>',
												!!$thisPost && $thisPost->ID === $page->ID ? 'active' : '',	// check $post is set, as it won't be on 404 pages
												get_permalink($page->ID),
												str_replace('Homepage', 'Home', $page->post_title)
												);
											echo "</li>\n";
										}
									}

									echo '</ul>';
								}
							}

							//RENDER PRIMARY NAVIGATION
							$pages = get_pages(array('child_of' => 0, 'sort_column' => 'menu_order', 'hierarchical' => 0));
							foreach ($pages as $page) {
								if ($page->post_parent === 0 && $page->ID !== 29 && get_post_meta($page->ID, 'page_visibility', true) !== 'hidden') {

									// Render the page item
									printf('					<li class="nav__item"><a class="nav__link %s" href="%s">%s</a>',
										!!$post && $post->ID === $page->ID || !!$post && $post->post_parent === $page->ID ? 'active' : '',	// check $post is set, as it won't be on 404 pages
										get_permalink($page->ID),
										str_replace('Homepage', 'Home', $page->post_title)
										);
										render_child_pages($page->ID, $post);
									}

									echo "</li>\n";
								}
							}
						?>
					</ul>
				</nav>
			</div>
		</header>
		<!-- begin: HEADER -->

		<!-- begin: CONTENT -->
		<div class="global-content">
			
			