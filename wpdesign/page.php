<?php
/**
 * The page template is used when visitors request individual pages, which are a built-in template.
 *
 * @since 1.0.0
 * @version 1.0.0
 * 
 * @see  https://developer.wordpress.org/reference/functions/get_header/
 * @see  https://developer.wordpress.org/themes/basics/the-loop/
 * @see  https://developer.wordpress.org/reference/functions/the_post/
 * @see  https://developer.wordpress.org/reference/functions/get_the_post_thumbnail_url/
 * @see  https://developer.wordpress.org/reference/functions/the_title/
 * @see  https://developer.wordpress.org/reference/functions/the_author/
 * @see  https://developer.wordpress.org/reference/functions/the_date/
 * @see  https://developer.wordpress.org/reference/functions/the_time/
 * @see  https://developer.wordpress.org/reference/functions/the_content/
 * @see  https://developer.wordpress.org/reference/functions/get_footer/
 */
?>
<?php get_header(); ?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) { the_post(); ?>

		<div class="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
		
		<main>
			<h2><?php the_title(); ?></h2>
			<div class="flex">
				<article class="shadow">
					<header>
						<p><small>Scritto da <?php the_author(); ?> il <?php the_date(); ?></small></p>
					</header>
					<main>
						<p><?php the_content(); ?></p>
					</main>
				</article>
			</div>
		</main>

		<?php
	}
}
?>

<?php get_footer(); ?>
