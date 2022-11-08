'use strict';

var result = document.getElementById('result'); //Image where user selected silhouette will populate

// Size of selected silhouette  around the coordinates
var crop_img
	, CROPWIDTH = 280
	, CROPHEIGHT = 330
	, resize_canvas = document.createElement('canvas');

//Creation of canvas and new image to be cropped
function init() {
	var resizedImage = document.querySelector('.crop-image'); //Hidden image in DOM 
	resizedImage.dataset.isCrop = 'true';
	resizedImage.draggable = false;
	crop_img = new Image();
	crop_img.crossOrigin = resizedImage.crossOrigin;
	crop_img.src = resizedImage.src; //New image will be given src of image the user selects
	crop_img.draggable = false;

}

// Image is cropped and given width and height
function crop(leftCoord, topCoord) {
	resize_canvas.width = CROPWIDTH;
	resize_canvas.height = CROPHEIGHT;

	var ctx = resize_canvas.getContext('2d');
	ctx.drawImage(crop_img,
		leftCoord, topCoord,
		1500, 2000 //All silhouette pages have same resolution 
	);
}

//Values of coordinates od user selected iamge is passed to crop function
function openCropCanvasImg(x, y) {
	crop(x, y);

	try {
		var base64Img = resize_canvas.toDataURL('image/png', 2.0); //Image is created and populated in result img in DOM
		result.src = base64Img;
	} catch (e) {
		alert(e);
	} finally {

	}

}

//
setTimeout(function () {

	//Attatches tooltip to body so it stays relevant to page and not image
	//Attatching to mouse 
	$('.tooltipLink').hover(function () {
		var title = $(this).attr('data-tooltip');
		$(this).data('tipText', title);
		if (title == '') { }
		else {
			$('<p class="tooltip" style="z-index:9000"></p>').fadeIn(200).text(title).appendTo('body');
		}
	}, function () {
		$(this).attr('data-tooltip', $(this).data('tipText'));
		$('.tooltip').fadeOut(200);
	}).mousemove(function (e) {
		var mousex = e.pageX;
		var mousey = e.pageY;
		$('.tooltip').css({
			top: mousey,
			left: mousex,
			position: 'absolute'
		})
	});

	//Even page Zoom
	$('.panzoom-even').panzoom({
		$zoomIn: $("#zoom-in-even"),
		$zoomOut: $("#zoom-out-even"),
		$zoomRange: $(".zoom-range"),
		$reset: $("#reset-even"),
		startTransform: 'scale(1)',
		increment: 0.1,
		minScale: 1,
		contain: 'invert',
		maxScale: 5,
		animate: true,
		onEnd: function () {

		}
	}).panzoom('zoom', true);

	//Odd page zoom
	$('.panzoom-odd').panzoom({
		$zoomIn: $("#zoom-in-odd"),
		$zoomOut: $("#zoom-out-odd"),
		$zoomRange: $(".zoom-range"),
		$reset: $("#reset-odd"),
		startTransform: 'scale(1)',
		increment: 0.1,
		minScale: 1,
		contain: 'invert',
		maxScale: 5,
		animate: true,
		onEnd: function () {
		}
	}).panzoom('zoom', true);

	//Keep image map resposive for firefox
	// $('img[usemap]').rwdImageMaps();

	//Mapoid to highlight image areas
	var obj = {
		"fillColor": "#fff",
		"fillOpacity": .4,
		"selectOnClick": true,
		"fadeTime": 100,
		"hoverIn": function (j, e) {
			if ($('.crop-image').attr('src') != e[0].offsetParent.firstChild.src) { //Check if image for this map is loaded
				$(".crop-image").attr("src", e[0].offsetParent.firstChild.src); //Change image when using different map
				init();
			}
		},
		"click": function (j, e) {
			let coords = e.attr('data-coords').split(',') //Find coordinates of area and pass to be cropped
			let leftCoord = coords[0];
			let topCoord = coords[1];
			setTimeout(function () {
				openCropCanvasImg(-leftCoord, -topCoord); //Send coordinates of this area to be cropped
				$('#image-info').text(e.attr('data-information'));
			}, 700)
		}
	}

	$("map").mapoid(obj);
}, 500)
