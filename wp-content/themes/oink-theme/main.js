/**
 * Created by chris on 12/04/2016.
 */
jQuery(document).ready(function($){

})

jQuery(window).load(function($){

})

jQuery(window).resize(function($){

})

function sizetorow(divheight, target, adjustment){
	var $ = jQuery;
	if($(window).width() > 800){
		var maxHeight = 0;

		$(target).css('min-height',maxHeight);
		var maxHeight = $(divheight).height() - adjustment;
		console.log(maxHeight);
		//$(target).each(function(){
		//
		//})
		setTimeout(function(){
			$(target).css('min-height',maxHeight);
		},600)
	}
}

function makesquare(target){
	var $ = jQuery;
	var width = $(target).width();
	$(target).height(width);
}