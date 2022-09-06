<?php
$link = get_the_permalink();
$img = (get_the_post_thumbnail_url())? get_the_post_thumbnail_url(null,'large') : get_home_url().'/wp2016/wp-content/uploads/2016/05/Blog-Post.jpg';
?>

<div class="gr-4 no-gutter post-card">
	<?php
	echo '<a href="'.$link.'"><div class="post-thumbnail w-bg-img" style="background: url('.$img.') no-repeat center center"></div></a>';
	?>
	<div class="the-excerpt">
		<?php
		$excerpt = substr(get_the_excerpt(), 0,175);
		echo '<h3><a href="'.$link.'">'.get_the_title().'</a></h3>';
		echo '<p class="date">'.get_the_date('jS M Y').'</p>';
		echo '<p>'.trim_string($excerpt).'</p>';
		echo '<p><a href="'.$link.'" class="button">Read More</a></p>';
		?>
	</div>
</div>
