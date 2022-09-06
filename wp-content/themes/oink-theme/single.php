<?php
get_header();

?>
<?php
// Start the loop.
if(have_posts()){
	while ( have_posts() ){
		the_post();

		$image = (get_the_post_thumbnail_url())? get_the_post_thumbnail_url() : get_stylesheet_directory_uri().'/imgs/image.jpg';
		$title = get_the_title();
		$id = get_the_ID();
		$bodyclass = get_body_class();

		?>
		<?php the_content() ?>
		<?php
		// End of the loop.
	}
}
?>

<?php
get_footer();