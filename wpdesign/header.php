<?php
/**
 * The header template file usually contains your site’s document type, meta information, links to stylesheets and scripts, and other data.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/wp_head/
 * @see  https://developer.wordpress.org/reference/functions/body_class/
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<!-- WP HEAD SCRIPTS -->

	<?php
	/**
	 * the wp_head() function lets WordPress execute all the pre-body operations including the injection of important styles and scripts.
	 * This function call should always be inside your <head> tag
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/wp_head/
	 */
	wp_head();
	?>

	<!-- END WP HEAD SCRIPTS -->

</head>
<body <?php body_class(); ?>>
	<header>
		<div class="logo">
			<h1>WordPress Design</h1>
		</div>
		<nav>
			<ul>
				<li><a href="#" class="active">Home</a></li>
				<li><a href="blog.html">Blog</a></li>
			</ul>
		</nav>
	</header>

<!-- END MENU -->

<!-- START WEBSITE BODY -->
