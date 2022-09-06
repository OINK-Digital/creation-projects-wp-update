<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
if(have_posts()){

	// Start the Loop.
	$i=1;
	while(have_posts()) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		if ($i == 1) {
			echo '<div class="row">';
			$div = true;
		}
		get_template_part('partials/content', 'cat-snippet');

		if ($i == 3) {
			echo '</div>';
			$div = false;
			$i = 0;
		}
		$i++;
		// End the loop.
	}
	if($div){
		echo '</div>';
		$div=false;
	}

	// If no content, include the "No posts found" template.
}else{
	echo '<div class="row"><div class="gr-12"><h2>Sorry, there are no posts for this category.</h2></div></div>';
}
?>
<?php get_footer();
