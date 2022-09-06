<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 3/05/2016
 * Time: 2:54 PM
 */
?>
<section id="single-features">
	<div class="row">
		<div class="gr-12 no-gutter-top no-gutter-bottom headings"><h2>Recent Articles</h2></div>
	</div>
	<div class="row">
		<?php
		$recent_posts = wp_get_recent_posts(array('numberposts' => 2,'post_type' => 'post','category' => 8,'exclude' => get_the_ID()));
		foreach($recent_posts as $post){
			$img=(get_the_post_thumbnail_url($post['ID']))?get_the_post_thumbnail_url($post['ID']):'';
			echo '<a href="'.get_the_permalink($post['ID']).'"><div class="gr-4 recent-post" style="background: url(\''.$img.'\') no-repeat center center">
			<h3 class="widgettitle">'.$post['post_title'].'</h3>
			</div></a>';
		}
		?>
		<div class="filled gr-4">
			<?php if ( is_active_sidebar( 'single-feature' ) ) : ?>
				<?php dynamic_sidebar( 'single-feature' ); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
