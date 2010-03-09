jQuery(function ($) {
	/* Configuration options */
	var fullscreenBaseUrl = $(".slideshow-fullscreen").attr("href");
	var flickrUserId = "47034115@N04";
	var flickrTags = "slideshow";
	var flickrFeedBaseUrl = "http://api.flickr.com/services/feeds/photos_public.gne";
	var maxThumbCount = 7;

	/* Fetch feed from Flickr */
	$.getJSON(flickrFeedBaseUrl + "?id=" + flickrUserId + "&tags=" + flickrTags + "&format=json&jsoncallback=?", function (data) {
		var slideshowList = $(".slideshow-list");
		$.each(data.items, function (i, item) {
			/* Limit number of photos. */
			if (i >= maxThumbCount)
				return;

			/* Parse the Flickr image URL. */
			var match = item.media.m.match(/^http:\/\/farm([a-z0-9]+)\.static.flickr.com\/([a-z0-9]+)\/(\d+)_([a-z0-9]+)(_[omstb])?\.(jpg|gif|png)$/i);
			if (match) {
				var farm = match[1],
					server = match[2],
					photo = match[3],
					secret = match[4],
					scale = match[5],
					fileType = match[6];

				/* Generate an HTML structure for Galleria. */
				var thumb = $("<img/>").attr("src", "http://farm" + farm + ".static.flickr.com/" + server + "/" + photo + "_" + secret + "_s." + fileType);
				var anchor = $("<a/>").attr("href", "http://farm" + farm + ".static.flickr.com/" + server + "/" + photo + "_" + secret + "." + fileType);
				var li = $("<li/>").append(anchor.append(thumb)).addClass(i === 0 ? "active" : "");
				slideshowList.append(li);
			}
		});

		/* Create the slideshow with Galleria. */
		slideshowList.galleria({
			history: false, // activates the history object for bookmarking, back-button etc.
			clickNext: true, // helper for making the image clickable
			insert: '.slideshow-big', // the containing selector for our main image
			onImage: function (image, caption, thumb) { // let's add some image effects for demonstration purposes
				// update the fullscreen button to point at the current photo
				$(".slideshow-fullscreen").attr("href", fullscreenBaseUrl + "with/" + image.attr("src").match(/(\d+)_[a-zA-Z0-9]+\.jpg$/i)[1] + "/");

				// fade in the image & caption
				image.css('display', 'none').fadeIn(800);
				caption.css('display', 'none').fadeIn(800);

				// fetch the thumbnail container
				var _li = thumb.parents('li');

				// fade out inactive thumbnail
				_li.siblings().children('img.selected').fadeTo(500, 0.3);

				// fade in active thumbnail
				thumb.fadeTo('fast', 1).addClass('selected');

				// add a title for the clickable image
				image.attr('title', 'Next image >>');
			},
			onThumb : function (thumb) { // thumbnail effects goes here
				// fetch the thumbnail container
				var _li = thumb.parents('li');

				// if thumbnail is active, fade all the way.
				var _fadeTo = _li.is('.active') ? '1' : '0.3';

				// fade in the thumbnail when finnished loading
				thumb.css({display: 'none', opacity: _fadeTo}).fadeIn(800);

				// hover effects
				thumb.hover(
					function () {thumb.fadeTo('fast', 1);},
					function () {_li.not('.active').children('img').fadeTo('fast', 0.3);} // don't fade out if the parent is active
				);
				thumb.click(function () {
					continueCycle = false;
				});
			}
		});
		/* Automatically move through the photos and pause if user intervenes. */
		var continueCycle = true;
		setInterval(function () {if (continueCycle) $.galleria.next();}, 5000);
		/* Set up navigation area. */
		$(".slideshow-controls").css("display", "block");
		$(".slideshow-back").click(function () {$.galleria.prev(); return continueCycle = false;});
		$(".slideshow-forward").click(function () {$.galleria.next(); return continueCycle = false;});
	});
});
