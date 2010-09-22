jQuery(function ($) {
	/* Configuration options */
	var fullscreenBaseUrl = $(".slideshow-fullscreen").attr("href");
	var flickrUserId = "47034115@N04";
	var flickrTags = "gallery";
	var flickrFeedBaseUrl = "http://api.flickr.com/services/feeds/photos_public.gne";

	/* Fetch feed from Flickr */
	$.getJSON(flickrFeedBaseUrl + "?id=" + flickrUserId + "&tags=" + flickrTags + "&format=json&jsoncallback=?", function (data) {
		var slideshowList = [];
		$.each(data.items, function (i, item) {

			/* Parse the Flickr image URL. */
			var match = item.media.m.match(/^http:\/\/farm([a-z0-9]+)\.static.flickr.com\/([a-z0-9]+)\/(\d+)_([a-z0-9]+)(_[omstbz])?\.(jpg|gif|png)$/i);
			if (match) {
				var farm = match[1],
					server = match[2],
					photo = match[3],
					secret = match[4],
					scale = match[5],
					fileType = match[6];

				/* Generate data structure for Galleria. */
				slideshowList.push({
					image: "http://farm" + farm + ".static.flickr.com/" + server + "/" + photo + "_" + secret + "_b." + fileType,
					thumb: "http://farm" + farm + ".static.flickr.com/" + server + "/" + photo + "_" + secret + "_s." + fileType
				});
			}
		});

		/* Create the slideshow with Galleria. */
		$(".block-bttgallery").galleria({
			autoplay: true,
			clicknext: true,
			data_source: slideshowList
		});
	});
});
