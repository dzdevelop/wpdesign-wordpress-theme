<?php
/**
 * The main template file. It is required in all themes.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/get_header/
 * @see  https://developer.wordpress.org/reference/functions/get_footer/
 */
?>
<?php
	/**
	 * get_header() is the function that goes to call the header.php template
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/get_header/
	 */
	get_header();
?>

	<div class="banner"></div>

	<main>
		<h2>Articoli recenti</h2>
		<div class="flex">
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
			<article class="shadow">
				<header>
					<h2>Titolo del post</h2>
					<p><small>Scritto da Mohole il 25/12/19 alle 00:00</small></p>
					<img src="https://via.placeholder.com/800x400.png?text=WordPress+Design" alt="titolo del post">
					<p class="blog-category"><a href="category.html">natale</a></p>
				</header>
				<main>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, blanditiis dicta, rem corporis molestias tempora. Atque culpa laboriosam iure nulla nisi! <a href="single.html">Read more</a></p>
				</main>
				<hr>
				<footer>
					<p><a href="tag.html" class="blog-tag">#feste</a> <a href="tag.html" class="blog-tag">#panettone</a> <a href="tag.html" class="blog-tag">#vacanze</a> <a href="tag.html" class="blog-tag">#ferie</a> <a href="tag.html" class="blog-tag">#neve</a></p>
				</footer>
			</article>
		</div>
		<a href="blog.html" class="button">Tutti gli articoli</a>
	</main>

	<aside>
		<h2>categorie</h2>
		<ul>
			<li><a href="category.html">natale</a></li>
			<li><a href="category.html">festività</a></li>
			<li><a href="category.html">cosa fare a natale</a></li>
			<li><a href="category.html">i regali migliori</a></li>
			<li><a href="category.html">cosa mangiare a natale</a></li>
			<li><a href="category.html">mercatini</a></li>
			<li><a href="category.html">vestiti da cerimonia</a></li>
			<li><a href="category.html">giochi di società</a></li>
		</ul>
	</aside>

<?php
	/**
	 * get_footer() is the function that goes to call the footer.php template
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/get_footer/
	 */
	get_footer();
?>
