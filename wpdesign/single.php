<?php
/**
 * The single post template is used when a visitor requests a single post.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/get_header/
 * @see  https://developer.wordpress.org/themes/basics/the-loop/
 * @see  https://developer.wordpress.org/reference/functions/the_post/
 * @see  https://developer.wordpress.org/reference/functions/get_the_tags/
 * @see  https://developer.wordpress.org/reference/functions/get_the_id/
 * @see  https://developer.wordpress.org/reference/functions/get_tag_link/
 * @see  https://developer.wordpress.org/reference/functions/get_footer/
 */
?>
<?php get_header(); ?>

<!-- single.php -->

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
					<hr>
					<footer>
						<?php
						$post_tags = get_the_tags( get_the_ID() );
						foreach ($post_tags as $tag) {
							echo '<a href="'.get_tag_link( $tag->term_id ).'" class="blog-tag">#'.$tag->name.'</a> ';
						}
						?>
					</footer>
				</article>
			</div>
		</main>

		<?php
	}
}
?>

<?php get_footer(); ?>
