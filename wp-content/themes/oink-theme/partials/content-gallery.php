<?php
$attachments = new Attachments( 'attachments' ); /* pass the instance name */
$total = $attachments->total();

$i=1;
if( $attachments->exist() ) {
	echo '<div class="grid-sizer"></div>';
	echo '<div class="gutter-sizer"></div>';
	while( $attachment = $attachments->get() ) {
//			print_v( $attachment );
		$thumb = wp_get_attachment_image_url($attachment->id,'large');
		$img = wp_get_attachment_image_url($attachment->id,'full');

//		if($i==1){
//			echo '<div class="row">';
//			$div=true;
//		}
//		echo '<div class="gr-6">';
		echo '<a class="fancybox" rel="gallery1" href="'.$img.'">';
		echo '<img src="'.$thumb.'" class="gallery-image masonary">';
		echo '</a>';
//		echo '</div>';

//		if($i==2){
//			$i=0;
//			echo '</div>';
//			$div=false;
//		}
		$i++;
	}
//	if($div){
//		echo '</div>';
//	}
}
