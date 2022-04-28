var windowWidth;
var colWidth;
var colPercent;
var columNum;

$(window).on('load', function(){
	windowWidth = $(window).width();
	masonry(getColNum(windowWidth));
})

$(window).resize(function(){
	windowWidth = $(window).width();
	masonry(getColNum(windowWidth));
})

function masonry(colNum){
	$('.masonry-column').each(function(index){
		if (index > colNum-1){
			var calcIndex = index - colNum; 
			var prevItem = $('.masonry-column')[calcIndex];
			var prevHeight = $(prevItem).find('.masonry-item').height();
			var prevOffset = $(prevItem).find('.masonry-item').offset().top;
			var gutter = $('.grid').width() / 100;
			$(this).css('top',prevHeight + gutter + prevOffset-10);
		}
		else{
			$(this).css('top',0);
		}
	})
}

function getColNum(windowWidth){
	colWidth = $($('.masonry-column')[0]).width();
	colPercent = Math.ceil((colWidth / windowWidth)*100);
	return Math.floor(100 / colPercent);
}