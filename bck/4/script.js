﻿// Speed of the automatic slideshow
var slideshowSpeed = 6000;

// Variable to store the images we need to set as background
// which also includes some text and url's.
var photos = [ {
		"title" : "Stairs",
		"image" : "1.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "1",
		"secondline" : ""
	}, {
		"title" : "Office Appartments",
		"image" : "2.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "2",
		"secondline" : ""
	}, {
		"title" : "Mountainbiking",
		"image" : "3.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "3",
		"secondline" : ""
	}, {
		"title" : "Mountains Landscape",
		"image" : "4.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "4",
		"secondline" : ""
	}, {
		"title" : "Italian pizza",
		"image" : "5.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "5",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "6.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "6",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "7.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "7",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "8.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "8",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "9.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "9",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "10.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "10",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "11.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "11",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "12.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "12",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "13.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "13",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "14.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "14",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "15.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "15",
		"secondline" : ""
	}
	, {
		"title" : "Italian pizza",
		"image" : "16.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "16",
		"secondline" : ""
	}, {
		"title" : "Italian pizza",
		"image" : "17.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "17",
		"secondline" : ""
	}, {
		"title" : "Italian pizza",
		"image" : "18.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "18",
		"secondline" : ""
	}, {
		"title" : "Italian pizza",
		"image" : "19.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "19",
		"secondline" : ""
	}, {
		"title" : "Italian pizza",
		"image" : "20.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "20",
		"secondline" : ""
	}, {
		"title" : "Italian pizza",
		"image" : "21.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "21",
		"secondline" : ""
	}, {
		"title" : "Italian pizza",
		"image" : "22.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "22",
		"secondline" : ""
	}, {
		"title" : "Italian pizza",
		"image" : "23.jpg",
		"url" : "http://romatti-demo.ru/",
		"firstline" : "23",
		"secondline" : ""
	}
];



$(document).ready(function() {
		
	// Backwards navigation
	$("#back").click(function() {
		stopAnimation();
		navigate("back");
	});
	
	// Forward navigation
	$("#next").click(function() {
		stopAnimation();
		navigate("next");
	});
	
	var interval;
	$("#control").toggle(function(){
		stopAnimation();
	}, function() {
		// Change the background image to "pause"
		$(this).css({ "background-image" : "url(../4/btn_pause.png)" });
		
		// Show the next image
		navigate("next");
		
		// Start playing the animation
		interval = setInterval(function() {
			navigate("next");
		}, slideshowSpeed);
	});
	
	
	var activeContainer = 1;	
	var currentImg = 0;
	var animating = false;
	var navigate = function(direction) {
		// Check if no animation is running. If it is, prevent the action
		if(animating) {
			return;
		}
		
		// Check which current image we need to show
		if(direction == "next") {
			currentImg++;
			if(currentImg == photos.length + 1) {
				currentImg = 1;
			}
		} else {
			currentImg--;
			if(currentImg == 0) {
				currentImg = photos.length;
			}
		}
		
		// Check which container we need to use
		var currentContainer = activeContainer;
		if(activeContainer == 1) {
			activeContainer = 2;
		} else {
			activeContainer = 1;
		}
		
		showImage(photos[currentImg - 1], currentContainer, activeContainer);
		
	};
	
	var currentZindex = -1;
	var showImage = function(photoObject, currentContainer, activeContainer) {
		animating = true;
		
		// Make sure the new container is always on the background
		currentZindex--;
		
		// Set the background image of the new active container
		$("#headerimg" + activeContainer).css({
			"background-image" : "url(../4/" + photoObject.image + ")",
			"display" : "block",
			"z-index" : currentZindex
		});
		
		// Hide the header text
		$("#headertxt").css({"display" : "none"});
		
		// Set the new header text
		$("#firstline").html(photoObject.firstline);
		$("#secondline")
			.attr("href", photoObject.url)
			.html(photoObject.secondline);
		$("#pictureduri")
			.attr("href", photoObject.url)
			.html(photoObject.title);
		
		
		// Fade out the current container
		// and display the header text when animation is complete
		$("#headerimg" + currentContainer).fadeOut(function() {
			setTimeout(function() {
				$("#headertxt").css({"display" : "block"});
				animating = false;
			}, 500);
		});
	};
	
	var stopAnimation = function() {
		// Change the background image to "play"
		$("#control").css({ "background-image" : "url(../4/btn_play.png)" });
		
		// Clear the interval
		clearInterval(interval);
	};
	
	// We should statically set the first image
	navigate("next");
	
	// Start playing the animation
	interval = setInterval(function() {
		navigate("next");
	}, slideshowSpeed);
	
});