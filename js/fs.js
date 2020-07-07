// init variables
var imagesTotal = 3;
var currentImage = 0;
var thumbsTotalWidth = 0;
var autoPlay = true;
var timePassed = 0;
var timeToChange = 6;
	
/* debug */ $('.timePassed').html('timePassed = '+window.timePassed);
/* debug */ $('.timeToChange').html('timeToChange = '+window.timeToChange);
var slideTimer = setInterval(function() {autoChangeSlides(); }, 1000);
$('.galleryPreviewContainer').hover(
		function(){
			window.autoPlay = false;
			$(this).removeClass('autoplay');
		},
		function(){
			window.autoPlay = true; window.timePassed = 0;
			$(this).addClass('autoplay');
		}
	);
$('a.galleryBullet' + currentImage).addClass("active");
$('a.thumbnailsimage' + currentImage).addClass("active");





// PREVIOUS ARROW CODE
$('a.previousSlideArrow').click(function() {
    $('img.previewImage' + currentImage).fadeOut(500);
    $('h2.title' + currentImage).fadeOut(500);
	$('a.thumbnailsimage' + currentImage).removeClass("active");

	currentImage--;

	if (currentImage == 0) {
		currentImage = imagesTotal;
	}

	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).fadeIn(500);
    $('h2.title' + currentImage).fadeIn(500);

	return false;
});
// ===================


// NEXT ARROW CODE
$('a.nextSlideArrow').click(function() {
    
    $('img.previewImage' + currentImage).fadeOut(500);
    $('h2.title' + currentImage).fadeOut(500);
	$('a.thumbnailsimage' + currentImage).removeClass("active");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 0;
	}

	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).fadeIn(500);
    $('h2.title' + currentImage).fadeIn(500);


	return false;
});

// ===================


// BULLETS CODE
function changeimage(imageNumber) {
    $('img.previewImage' + currentImage).fadeOut(500);
	$('h2.title' + currentImage).fadeOut(500);
	currentImage = imageNumber;
	$('img.previewImage' + currentImage).fadeIn(500);
	$('h2.title' + currentImage).fadeIn(500);	
    $('.galleryThumbnails a').removeClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
}
// ===================

// AUTOMATIC CHANGE SLIDES
function autoChangeSlides() {
	if (window.timePassed == window.timeToChange){
		window.timePassed = 0;
		if (window.autoPlay === true){
	$('img.previewImage' + currentImage).fadeOut(500);
    $('h2.title' + currentImage).fadeOut(500);	
	$('a.thumbnailsimage' + currentImage).removeClass("active");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 0;
	}

	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).fadeIn(500);
    $('h2.title' + currentImage).fadeIn(500);	
		}
		}else{
		window.timePassed += 1;
	    timePassedProgressed = timePassed*50 ;
	}
	/* debug */ $('.timePassed').html('timePassed = '+window.timePassed);
	/* debug */ $('.autoPlay').html('autoPlay = '+window.autoPlay);
	$("#progressbar").attr('value', timePassedProgressed);
}