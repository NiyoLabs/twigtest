( function( $ ) {

	function loadPartial(url, tpl, selector) {


		//get template
	    var template = twig({
	        // id: "post",
	        href: tplDir + "/" + tpl + ".twig",
	        async: false,
	        debug: false
	    });

		//get json from url
	    $.ajax({
	        url: url,
	        method: 'GET',
	        dataType: 'json',
	        async: false
	    }).done(function( response ) {
            post = response;
            console.log(response);
        });

		//populate template with json data
	    var postHTML = template.render({post: post});

		//replace selector with populated template
	    selector.parent().html(postHTML);

	}

	//make partials load when clicking back/next buttons in browser
	window.onpopstate = function(event) {
		// console.log(location.pathname);
		loadPartial("/wp-json" + location.pathname, "single", $(".type-post"));
	};

	$( document ).ready( function() {
		//only operate on sidenav links
		$('#recent-posts-2 a').click( function ( event) {
			event.preventDefault();

			// alert(this.href);
			pathArray = this.href.split( '/' );

			var href = "/" + pathArray[3] + "/" + pathArray[4];

			// console.log(pathArray);
			loadPartial("/wp-json" + href, "single", $(".type-post"));

			window.history.pushState(href, 'New URL: '+href, href);

		});

	} );


} )( jQuery );


//find all links with /posts/xxx in it
