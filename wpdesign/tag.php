<?php
/**
 * The tag template is used when visitors request posts by tag
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/get_header/
 * @see  https://developer.wordpress.org/themes/basics/the-loop/
 * @see  https://developer.wordpress.org/reference/functions/the_post/
 * @see  https://developer.wordpress.org/reference/functions/get_footer/
 *
 * @todo  We still need to update this file later, it's far from being OK as it's still showing static HTML informations
 */
?>
<?php get_header(); ?>

<!-- tag.php -->

<main>
	<h2>Tag: #<?php single_tag_title(); ?></h2>
	<div class="flex">
		
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				
				<article class="shadow">
					<header>
						<h2>Titolo del post</h2>
						<p><small>Scritto da Mohole il 25/12/19 alle 00:00</small></p>
						<img src="https://via.placeholder.com/800x400.png?text=WordPress+Design" alt="titolo del post">
						<p class="blog-category"><a href="category.html">natale</a></p>
					</header>
					<main>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto maxime tempora id natus eveniet, ratione. Nihil mollitia veritatis voluptatibus optio. Molestiae voluptatem quaerat, modi rem, dolor asperiores harum sint, enim ex consequuntur, pariatur. <a href="single.html">Read more</a></p>
					</main>
					<hr>
					<footer>
						<p><a href="tag.html" class="blog-tag">#natale</a> <a href="tag.html" class="blog-tag">#babbonatale</a> <a href="tag.html" class="blog-tag">#regali</a></p>
					</footer>
				</article>

				<?php
			}
		}
		?>

	</div>
</main>

<?php get_footer(); ?>
