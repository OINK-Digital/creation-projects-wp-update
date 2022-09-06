<?php
//* Template Name: About us
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');
get_header();

?>
<?php
// Start the loop.
if(have_posts()){
	while ( have_posts() ){
		the_post();
		$image = get_the_post_thumbnail_url();
		$title = get_the_title();
//		$content = get_the_content();
		$theme = get_field('page_class');
		$id = get_the_ID();

		$background = ($image)? "style='background: url(\"$image\") no-repeat center center;'" : '';
		?>
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