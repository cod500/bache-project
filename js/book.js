
'use strict';
var result = document.getElementById('result');
var cropButton = document.getElementById('btn-crop');
var cropped = document.getElementById('cropped');
// var resizedImage = document.querySelector('.crop-image');

var crop_img
	, CROPWIDTH = 280
	, CROPHEIGHT = 330
	, resize_canvas = document.createElement('canvas');

// if (resizedImage.complete) {
// 	init();
// } else {
// 	resizedImage.onload = function () {
// 		init();
// 	};
// }


// cropButton.addEventListener('click', function () {
// 	openCropCanvasImg(-115, -57);
// });


function init() {
	var resizedImage = document.querySelector('.crop-image');
	resizedImage.dataset.isCrop = 'true';
	resizedImage.draggable = false;
	crop_img = new Image();
	crop_img.crossOrigin = resizedImage.crossOrigin;
	crop_img.src = resizedImage.src;
	crop_img.draggable = false;
	// cropped.src = crop_img;

}

function crop(leftCoord, topCoord) {
	resize_canvas.width = CROPWIDTH;
	resize_canvas.height = CROPHEIGHT;

	var ctx = resize_canvas.getContext('2d');
	ctx.drawImage(crop_img,
		leftCoord, topCoord,
		1500, 2000
	);
	console.log(ctx)
}

function openCropCanvasImg(x, y) {
	crop(x, y);

	try {
		var base64Img = resize_canvas.toDataURL('image/png', 1.0);
		result.src = base64Img;
	} catch (e) {
		alert(e);
	} finally {

	}

}

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

	// })

	// const paths = document.querySelectorAll('.panzoom');
	// paths.forEach((elem) => {
	// 	const parent = elem.parentElement;
	// 	const panzoom = Panzoom(elem, {
	// 		minScale: 1,
	// 		maxScale: 5,
	// 		contain: 'outside',
	// 		disableZoom: false,
	// 		animate: true,
	// 	});

	// 	const resetButton = document.getElementById('reset-btn');
	// 	// parent.addEventListener('wheel', panzoom.zoomWithWheel);
	// 	const zoomInButton = document.getElementById('zoom-in');
	// 	const zoomOutButton = document.getElementById('zoom-out');
	// 	// const rangeInput = document.getElementById('zoom-range');
	// 	zoomInButton.addEventListener('click', panzoom.zoomIn);
	// 	zoomOutButton.addEventListener('click', panzoom.zoomOut);
	// 	resetButton.addEventListener('click', panzoom.reset())
	// 	// rangeInput.addEventListener('input', (event) => {
	// 	// 	panzoom.zoom(event.target.valueAsNumber)
	// 	// })
	// });

	// var $section = $('#canvas');
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
	$('img[usemap]').rwdImageMaps();

	//Mapoid to highlight image areas
	var obj = {
		"fillColor": "#fff",
		"fillOpacity": .4,
		"selectOnClick": true,
		"fadeTime": 100,
		"hoverIn": function (j, e) {
			//Check if image for this map is loaded
			//Change image when using different map
			if ($('.crop-image').attr('src') != e[0].offsetParent.firstChild.src) {
				$(".crop-image").attr("src", e[0].offsetParent.firstChild.src);
				init();
			}
		},
		"click": function (j, e) {
			//Find coordinates of area and pass to be cropped
			console.log(e[0]);
			let coords = e[0].coords.split(',')
			let leftCoord = coords[0] * -3.3;
			let topCoord = coords[1] * -3.3;
			setTimeout(function () {
				openCropCanvasImg("-678", "-1331");
				$('#image-info').text(e.attr('data-information'));
			}, 700)
		}
	}

	$("map").mapoid(obj);
}, 500)
