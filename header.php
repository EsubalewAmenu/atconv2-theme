<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atconv2-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script defer src="./login_files/runtime.js" type="module"></script>
	<script defer src="./login_files/polyfills.js" type="module"></script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<script async="" src="login_files/fbevents.js"></script>
	<script id="Facebook" async="">
		!(function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) :
					n.queue.push(arguments);
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = "2.0";
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s);
		})(
			window,
			document,
			"script",
			"https://connect.facebook.net/en_US/fbevents.js"
		);
		fbq("track", "ViewContent");
	</script>
	<link rel="preconnect" href="https://use.typekit.net/" crossorigin="" />
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<style type="text/css">
		@import url("https://p.typekit.net/p.css?s=1&k=yoj2ytp&ht=tk&f=17265.17267.17268.17269.32226.32227.32230.32231.32236.32238.10875.36601.36602.36607.36608.36617.36618.36623.36624.36633.36634.36639.36640&a=52234562&app=typekit&e=css");

		@font-face {
			font-family: "source-sans-pro";
			src: url("https://use.typekit.net/af/61f808/00000000000000003b9b3d63/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),
				url("https://use.typekit.net/af/61f808/00000000000000003b9b3d63/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),
				url("https://use.typekit.net/af/61f808/00000000000000003b9b3d63/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "source-sans-pro";
			src: url("https://use.typekit.net/af/422d60/00000000000000003b9b3d67/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff2"),
				url("https://use.typekit.net/af/422d60/00000000000000003b9b3d67/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff"),
				url("https://use.typekit.net/af/422d60/00000000000000003b9b3d67/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family: "source-sans-pro";
			src: url("https://use.typekit.net/af/9373a0/00000000000000003b9b3d68/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("woff2"),
				url("https://use.typekit.net/af/9373a0/00000000000000003b9b3d68/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("woff"),
				url("https://use.typekit.net/af/9373a0/00000000000000003b9b3d68/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("opentype");
			font-display: auto;
			font-style: italic;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family: "source-sans-pro";
			src: url("https://use.typekit.net/af/ffb1e2/00000000000000003b9b3d64/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("woff2"),
				url("https://use.typekit.net/af/ffb1e2/00000000000000003b9b3d64/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("woff"),
				url("https://use.typekit.net/af/ffb1e2/00000000000000003b9b3d64/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("opentype");
			font-display: auto;
			font-style: italic;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "din-2014";
			src: url("https://use.typekit.net/af/570287/00000000000000007735afea/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("woff2"),
				url("https://use.typekit.net/af/570287/00000000000000007735afea/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("woff"),
				url("https://use.typekit.net/af/570287/00000000000000007735afea/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("opentype");
			font-display: auto;
			font-style: italic;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "din-2014";
			src: url("https://use.typekit.net/af/c2b6e5/00000000000000007735afee/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),
				url("https://use.typekit.net/af/c2b6e5/00000000000000007735afee/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),
				url("https://use.typekit.net/af/c2b6e5/00000000000000007735afee/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "din-2014";
			src: url("https://use.typekit.net/af/efa8e9/00000000000000007735aff4/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("woff2"),
				url("https://use.typekit.net/af/efa8e9/00000000000000007735aff4/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("woff"),
				url("https://use.typekit.net/af/efa8e9/00000000000000007735aff4/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("opentype");
			font-display: auto;
			font-style: italic;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family: "din-2014";
			src: url("https://use.typekit.net/af/1fe1ce/00000000000000007735aff6/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff2"),
				url("https://use.typekit.net/af/1fe1ce/00000000000000007735aff6/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff"),
				url("https://use.typekit.net/af/1fe1ce/00000000000000007735aff6/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family: "din-2014-narrow";
			src: url("https://use.typekit.net/af/2bdaca/00000000000000007735afe5/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),
				url("https://use.typekit.net/af/2bdaca/00000000000000007735afe5/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),
				url("https://use.typekit.net/af/2bdaca/00000000000000007735afe5/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "din-2014-narrow";
			src: url("https://use.typekit.net/af/6be18e/00000000000000007735afeb/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff2"),
				url("https://use.typekit.net/af/6be18e/00000000000000007735afeb/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff"),
				url("https://use.typekit.net/af/6be18e/00000000000000007735afeb/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family: "din-condensed";
			src: url("https://use.typekit.net/af/cfbead/0000000000000000000146b3/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),
				url("https://use.typekit.net/af/cfbead/0000000000000000000146b3/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),
				url("https://use.typekit.net/af/cfbead/0000000000000000000146b3/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din";
			src: url("https://use.typekit.net/af/1f0265/00000000000000007735a839/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("woff2"),
				url("https://use.typekit.net/af/1f0265/00000000000000007735a839/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("woff"),
				url("https://use.typekit.net/af/1f0265/00000000000000007735a839/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("opentype");
			font-display: auto;
			font-style: italic;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din";
			src: url("https://use.typekit.net/af/f1d51b/00000000000000007735a83d/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),
				url("https://use.typekit.net/af/f1d51b/00000000000000007735a83d/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),
				url("https://use.typekit.net/af/f1d51b/00000000000000007735a83d/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din";
			src: url("https://use.typekit.net/af/1c5092/00000000000000007735a84b/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("woff2"),
				url("https://use.typekit.net/af/1c5092/00000000000000007735a84b/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("woff"),
				url("https://use.typekit.net/af/1c5092/00000000000000007735a84b/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("opentype");
			font-display: auto;
			font-style: italic;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din";
			src: url("https://use.typekit.net/af/cd97e9/00000000000000007735a84f/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff2"),
				url("https://use.typekit.net/af/cd97e9/00000000000000007735a84f/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff"),
				url("https://use.typekit.net/af/cd97e9/00000000000000007735a84f/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din-condensed";
			src: url("https://use.typekit.net/af/b27e1e/00000000000000007735a83b/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("woff2"),
				url("https://use.typekit.net/af/b27e1e/00000000000000007735a83b/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("woff"),
				url("https://use.typekit.net/af/b27e1e/00000000000000007735a83b/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("opentype");
			font-display: auto;
			font-style: italic;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din-condensed";
			src: url("https://use.typekit.net/af/ba5c17/00000000000000007735a83e/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),
				url("https://use.typekit.net/af/ba5c17/00000000000000007735a83e/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),
				url("https://use.typekit.net/af/ba5c17/00000000000000007735a83e/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din-condensed";
			src: url("https://use.typekit.net/af/be96d8/00000000000000007735a84d/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff2"),
				url("https://use.typekit.net/af/be96d8/00000000000000007735a84d/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff"),
				url("https://use.typekit.net/af/be96d8/00000000000000007735a84d/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din-condensed";
			src: url("https://use.typekit.net/af/3f20e7/00000000000000007735a850/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("woff2"),
				url("https://use.typekit.net/af/3f20e7/00000000000000007735a850/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("woff"),
				url("https://use.typekit.net/af/3f20e7/00000000000000007735a850/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("opentype");
			font-display: auto;
			font-style: italic;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din-semi-condensed";
			src: url("https://use.typekit.net/af/68a396/00000000000000007735a83c/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),
				url("https://use.typekit.net/af/68a396/00000000000000007735a83c/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),
				url("https://use.typekit.net/af/68a396/00000000000000007735a83c/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din-semi-condensed";
			src: url("https://use.typekit.net/af/960873/00000000000000007735a83f/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("woff2"),
				url("https://use.typekit.net/af/960873/00000000000000007735a83f/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("woff"),
				url("https://use.typekit.net/af/960873/00000000000000007735a83f/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3") format("opentype");
			font-display: auto;
			font-style: italic;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din-semi-condensed";
			src: url("https://use.typekit.net/af/f61b58/00000000000000007735a84e/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff2"),
				url("https://use.typekit.net/af/f61b58/00000000000000007735a84e/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff"),
				url("https://use.typekit.net/af/f61b58/00000000000000007735a84e/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("opentype");
			font-display: auto;
			font-style: normal;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family: "urw-din-semi-condensed";
			src: url("https://use.typekit.net/af/349829/00000000000000007735a852/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("woff2"),
				url("https://use.typekit.net/af/349829/00000000000000007735a852/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("woff"),
				url("https://use.typekit.net/af/349829/00000000000000007735a852/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3") format("opentype");
			font-display: auto;
			font-style: italic;
			font-weight: 700;
			font-stretch: normal;
		}

		.tk-source-sans-pro {
			font-family: "source-sans-pro", sans-serif;
		}

		.tk-din-2014 {
			font-family: "din-2014", sans-serif;
		}

		.tk-din-2014-narrow {
			font-family: "din-2014-narrow", sans-serif;
		}

		.tk-din-condensed {
			font-family: "din-condensed", sans-serif;
		}

		.tk-urw-din {
			font-family: "urw-din", sans-serif;
		}

		.tk-urw-din-condensed {
			font-family: "urw-din-condensed", sans-serif;
		}

		.tk-urw-din-semi-condensed {
			font-family: "urw-din-semi-condensed", sans-serif;
		}
	</style>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/gfx/favicons/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/gfx/favicons/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/gfx/favicons/favicon-16x16.png" />
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/gfx/favicons/manifest.json" />
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/gfx/favicons/safari-pinned-tab.svg" color="#5bbad5" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/gfx/favicons/favicon.ico" />
	<meta name="msapplication-config" content="/assets/gfx/favicons/browserconfig.xml" />
	<meta name="theme-color" content="#ffffff" />
	<style>
		body {
			opacity: 0;
			transition: opacity 0.3s ease-in-out;
		}
	</style>
	<!-- <link
      href="./style.css"
      rel="stylesheet"
      type="text/css"
      media="all"
      onload="this.media='all'"
    /> -->
	<!-- <noscript><link rel="stylesheet" href="./style.css" /></noscript> -->

	<!-- <script
      async=""
      src="<?php echo get_template_directory_uri(); ?>/assets/google-analytics_analytics_002.js"
    ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/rfc7zrt.js" async=""></script> -->
	<script>
		// (function (d) {
		//   var config = {
		//       kitId: "rfc7zrt",
		//       scriptTimeout: 3000,
		//       async: true,
		//     },
		//     h = d.documentElement,
		//     t = setTimeout(function () {
		//       h.className =
		//         h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
		//     }, config.scriptTimeout),
		//     tk = d.createElement("script"),
		//     f = false,
		//     s = d.getElementsByTagName("script")[0],
		//     a;
		//   h.className += " wf-loading";
		//   tk.src = "https://use.typekit.net/" + config.kitId + ".js";
		//   tk.async = true;
		//   tk.onload = tk.onreadystatechange = function () {
		//     a = this.readyState;
		//     if (f || (a && a != "complete" && a != "loaded")) return;
		//     f = true;
		//     clearTimeout(t);
		//     try {
		//       Typekit.load(config);
		//     } catch (e) {}
		//   };
		//   s.parentNode.insertBefore(tk, s);
		// })(document);
	</script>
	<style>
		@-webkit-keyframes fade-in {
			0% {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@-webkit-keyframes fade-out {
			0% {
				opacity: 1;
			}

			to {
				opacity: 0;
			}
		}

		@-webkit-keyframes spin {
			to {
				transform: rotate(360deg);
			}
		}

		@-webkit-keyframes shake {

			10%,
			90% {
				transform: translate(-1px);
			}

			20%,
			80% {
				transform: translate(2px);
			}

			30%,
			50%,
			70% {
				transform: translate(-4px);
			}

			40%,
			60% {
				transform: translate(4px);
			}
		}

		@-webkit-keyframes bounce {

			0%,
			5% {
				transform: translate(0);
			}

			10% {
				transform: translate(-30px);
			}

			12.5% {
				transform: translate(0);
			}

			15% {
				transform: translate(-10px);
			}

			20%,
			25% {
				transform: translate(0);
			}
		}

		*,
		*:before,
		*:after {
			box-sizing: border-box;
		}

		html {
			font-family: sans-serif;
			line-height: 1;
			-webkit-text-size-adjust: 100%;
			-ms-text-size-adjust: 100%;
			-ms-overflow-style: scrollbar;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}

		body {
			margin: 1rem;
			font-family: sans-serif;
			font-size: 16px;
			font-weight: 400;
			line-height: 1;
			color: #000;
			text-align: left;
			background-color: #fff;
		}

		html {
			font-size: 16px;
		}

		@media all and (max-width: 47.8125em) {
			html {
				font-size: 15px;
			}
		}

		body {
			font-family: urw-din, source-han-sans-cjk-ja,
				source-han-sans-simplified-c, simhei, Microsoft YaHei,
				\5fae\8f6f\96c5\9ed1, STXihei, \534e\6587\7ec6\9ed1, sans-serif;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility !important;
			-webkit-font-smoothing: antialiased !important;
			line-height: 1.5;
			overflow-x: hidden;
			margin: 0;
			color: #000;
		}

		body:before {
			display: none;
			border-top: 3px dashed lime;
			content: "";
			z-index: 9999;
			position: fixed;
			top: 50%;
			left: 0;
			right: 0;
			width: 100%;
		}

		@media all and (max-width: 47.8125em) {
			body:after {
				content: "breakpoint-mobile";
				display: none;
			}
		}

		@media all and (min-width: 47.875em) and (max-width: 64em) {
			body:after {
				content: "breakpoint-tablet";
				display: none;
			}
		}

		@media all and (min-width: 64.0625em) and (max-width: 81.1875em) {
			body:after {
				content: "breakpoint-desktop";
				display: none;
			}
		}

		@media all and (min-width: 81.25em) {
			body:after {
				content: "breakpoint-large-desktop";
				display: none;
			}
		}

		@-webkit-keyframes sk-bouncedelay {

			0%,
			80%,
			to {
				transform: scale(0);
			}

			40% {
				transform: scale(1);
			}
		}

		@-webkit-keyframes dotBounce {

			0%,
			99% {
				transform: translateY(0);
			}

			50% {
				transform: translateY(-10px);
			}
		}

		@-webkit-keyframes growLine {
			0% {
				height: 0;
			}

			to {
				height: 100%;
			}
		}
	</style>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles.css" media="all" onload="this.media='all'" />
	<noscript>
		<link rel="stylesheet" href="styles.css" />
	</noscript>
	<meta property="description" content="MVRDV is a global operating architecture and urbanism practice with an progressive ideal engaged in solving global issues." />
	<meta property="og:title" content="MVRDV - Architects" />
	<meta property="og:image" content="https://mvrdv.com/media/uploads/56_Depot_november_©Ossip van Duivenbode(3).jpg" />
	<meta property="og:description" content="MVRDV is a global operating architecture and urbanism practice with an progressive ideal engaged in solving global issues." />
	<meta property="twitter:card" content="summary" />
	<meta property="twitter:site" content="@MVRDV" />
	<meta property="twitter:title" content="MVRDV - Architects" />
	<meta property="twitter:description" content="MVRDV is a global operating architecture and urbanism practice with an progressive ideal engaged in solving global issues." />
	<meta property="twitter:image" content="https://mvrdv.com/media/uploads/56_Depot_november_©Ossip%20van%20Duivenbode(3).jpg?width=600&amp;height=600" />
	<style>
		[_nghost-mvrdv-c40] {
			overflow: hidden;
			height: 100vh;
			position: relative;
		}

		[_nghost-mvrdv-c40]>.router-animation[_ngcontent-mvrdv-c40] {
			position: relative;
		}

		[_nghost-mvrdv-c40] router-outlet~* {
			position: relative;
			display: block;
			width: 100%;
			height: 100%;
		}

		[_nghost-mvrdv-c40] .app[_ngcontent-mvrdv-c40] {
			position: relative;
		}
	</style>
	<style>
		.loader[_ngcontent-mvrdv-c13] {
			background: white;
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			display: block;
			height: 100%;
			width: 100%;
		}

		.loader.is--initialized[_ngcontent-mvrdv-c13] .indicator[_ngcontent-mvrdv-c13] {
			opacity: 1;
		}

		.loader[_ngcontent-mvrdv-c13] .indicator[_ngcontent-mvrdv-c13] {
			transition: opacity 0.3s 5s ease-in-out;
			opacity: 0;
		}

		.loader.is--fixed[_ngcontent-mvrdv-c13] {
			position: fixed;
		}

		.loader.type--dark[_ngcontent-mvrdv-c13] {
			background: black;
		}

		.loader.type--dark[_ngcontent-mvrdv-c13] .indicator-item[_ngcontent-mvrdv-c13] {
			background: white;
		}
	</style>
	<style>
		.tk-source-han-sans-simplified-c {
			font-family: "source-han-sans-simplified-c", sans-serif;
		}
	</style>
	<title>MVRDV - Architects</title>
	<style>
		app-image[_ngcontent-mvrdv-c34] {
			display: contents;
		}
	</style>
	<?php wp_head(); ?>
</head>

<body class="set--in" <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<script>
		/*
		 * Old Browser check
		 * More options: http://browser-update.org/customize.html
		 */
		var $buoop = {
			notify: {
				i: -5,
				f: -4,
				o: -4,
				s: -2,
				c: -4
			},
			style: "bottom",
			insecure: true,
			api: 5,
			reminder: 0,
		};

		function $buo_f() {
			var e = document.createElement("script");
			e.src = "//browser-update.org/update.min.js";
			document.body.appendChild(e);
		}
		try {
			document.addEventListener("DOMContentLoaded", $buo_f, false);
		} catch (e) {
			window.attachEvent("onload", $buo_f);
		}
	</script>
	<h1 class="ng-tns-c37-3 logo-mvrdv fill--light">
		<a routerlink="/" class="logo-mvrdv__link ng-tns-c37-3" href="https://mvrdv.nl/"><svg width="112" height="37" viewBox="0 0 112 37" class="ng-tns-c37-3">
				<title class="ng-tns-c37-3">Atcon</title>
				<g fill-rule="nonzero" class="ng-tns-c37-3">
					<path d="M16.5,0L13,18.5L10,0H0v37h6V14.9L10.5,37h4l5-22.6V37H26V0H16.5z M41.7,0l-3.4,19.5L34.8,0H28l6.8,37h5.8L48,0H41.7z
            M105.7,0l-3.4,19.5L98.8,0H92l6.8,37h5.9L112,0H105.7z M65.4,20c2.7-1.4,4.1-4.5,4.1-9.2c0-6.9-3.2-10.4-9.7-10.8H50v37h6.7V21
          h2.6L62.3,37H70C70,37,65.4,20,65.4,20z M62.3,11.3c0,2.1-1,3.3-3.1,3.6h-2.6V5.6h2.6c2.1,0,3.1,1.2,3.1,3.6V11.3z M78.3,0H72v37
          h8.3c6.2,0,9.4-3.3,9.7-10V12.1C90,4,86.1,0,78.3,0z M84.2,26.2c0,3.4-1.5,5.1-4.4,5.1h-1.5V5.6h1c3.2,0,4.9,1.7,4.9,5.1
          C84.2,10.8,84.2,26.2,84.2,26.2z" class="ng-tns-c37-3"></path>
				</g>
			</svg>
			<!---->
		</a>
	</h1>
	<button class="ng-tns-c37-3 main-nav-toggle fill--light">
		<span class="ng-tns-c37-3">Toggle nav</span>
	</button>
	<nav class="main-nav ng-tns-c37-3">
		<div class="main-nav__inner ng-tns-c37-3">
			<div class="main-nav__list ng-tns-c37-3">
				<?php
				$menu_name = 'Primary Menu';
				// primary-menu
				$menu_items = wp_get_nav_menu_items($menu_name);

				$menu_list = '	<ul class="ng-tns-c37-3">';
				foreach ((array) $menu_items as $key => $menu_item) {
					$title = $menu_item->title;
					$url = $menu_item->url;
					$menu_list .= '<li class="main-nav__list__item ng-tns-c37-3 ng-star-inserted">';
					$menu_list .= '<a class="ng-tns-c37-3 ng-star-inserted';
					if (str_ends_with($url, $_SERVER['REQUEST_URI']) && !str_ends_with(home_url('/'), $_SERVER['REQUEST_URI'])) $menu_list .= " active";
					$menu_list .= '" href="' . $url . '">' . $title . '</a>
									</li>';
				}
				$menu_list .= '</ul>';
				echo $menu_list;
				?>

				<!-- <ul class="ng-tns-c37-3">
					<li class="main-nav__list__item ng-tns-c37-3 ng-star-inserted">
						<a class="ng-tns-c37-3 ng-star-inserted" href="https://mvrdv.nl/home">Home</a>
					</li>
					<li class="main-nav__list__item ng-tns-c37-3 ng-star-inserted">
						<a class="ng-tns-c37-3 ng-star-inserted" href="https://mvrdv.nl/projects">Projects</a>
					</li>
					<li class="main-nav__list__item ng-tns-c37-3 ng-star-inserted">
						<a class="ng-tns-c37-3 ng-star-inserted" href="https://mvrdv.nl/about">About</a>
						
					</li>
					<li class="main-nav__list__item ng-tns-c37-3 ng-star-inserted">
						<a class="ng-tns-c37-3 ng-star-inserted" href="https://mvrdv.nl/updates">News &amp; Events</a>
						
					</li>
					<li class="main-nav__list__item ng-tns-c37-3 ng-star-inserted">
						
					</li>
					<li class="main-nav__list__item ng-tns-c37-3 ng-star-inserted">
						<a class="ng-tns-c37-3 ng-star-inserted" href="https://mvrdv.nl/jobs">Jobs</a>
						
					</li>
					<li class="main-nav__list__item ng-tns-c37-3 ng-star-inserted">
						<a class="ng-tns-c37-3 ng-star-inserted" href="https://mvrdv.nl/contact">Contact</a>
						
					</li>
					<li class="main-nav__list__item ng-tns-c37-3 ng-star-inserted">
						
					</li>
					<li class="main-nav__list__item ng-tns-c37-3">
						<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/15/next">NEXT</a>
					</li>
				</ul> -->
			</div>
			<?php
				$menu_name = 'Menu 2';
				// primary-menu
				$menu_items = wp_get_nav_menu_items($menu_name);

				$menu_list = '	<ul class="main-nav__theme filter ng-tns-c37-3">';
				foreach ((array) $menu_items as $key => $menu_item) {
					$title = $menu_item->title;
					$url = $menu_item->url;
					$menu_list .= '<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">';
					$menu_list .= '<a class="ng-tns-c37-3';
					if (str_ends_with($url, $_SERVER['REQUEST_URI']) && !str_ends_with(home_url('/'), $_SERVER['REQUEST_URI'])) $menu_list .= " active";
					$menu_list .= '" href="' . $url . '">' . $title . '</a>
									</li>';
				}
				$menu_list .= '</ul>';
				echo $menu_list;
				?>
			<!-- <ul class="main-nav__theme filter ng-tns-c37-3">
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/1/architecture">
						Architecture
					</a>
				</li>
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/9/urbanism">
						Urbanism
					</a>
				</li>
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/2/housing">
						Housing
					</a>
				</li>
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/3/leisure">
						Leisure
					</a>
				</li>
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/5/mixed-use">
						Mixed use
					</a>
				</li>
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/16/culture">
						Culture
					</a>
				</li>
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/4/public">
						Public
					</a>
				</li>
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/6/sustainability">
						Sustainability
					</a>
				</li>
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/8/research">
						Research
					</a>
				</li>
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/7/transformations">
						Transformations
					</a>
				</li>
				<li class="main-nav__theme__item ng-tns-c37-3 ng-star-inserted">
					<a class="ng-tns-c37-3" href="https://mvrdv.nl/themes/17/interiors">
						Interiors
					</a>
				</li>
			</ul> -->
			<!-- <app-language-selector class="ng-tns-c37-3">
				<nav class="language-selector">
					<ul class="language-selector__list mb-0">
						<li class="language-selector__list__item is--active ng-star-inserted">
							<a class="button button-icon language-selector__button" href="https://www.mvrdv.com/" title="EN">
								EN
							</a>
						</li>
						<li class="language-selector__list__item ng-star-inserted">
							<a class="button button-icon language-selector__button" href="https://www.mvrdv.asia/" title="CN">
								中文
							</a>
						</li>
						<li class="language-selector__list__item ng-star-inserted">
							<a class="button button-icon language-selector__button" href="https://mvrdv.com/themes/11/germany">
								DE
							</a>
						</li>
						<li class="language-selector__list__item ng-star-inserted">
							<a class="button button-icon language-selector__button" href="https://mvrdv.com/themes/12/netherlands">
								NL
							</a>
						</li>
						<li class="language-selector__list__item ng-star-inserted">
							<a class="button button-icon language-selector__button" href="https://mvrdv.com/themes/13/french">
								FR
							</a>
						</li>
					</ul>
				</nav>
			</app-language-selector> -->
			<button class="main-nav__search-button button type--icon-only ng-tns-c37-3" tabindex="0">
				<app-icon class="ng-tns-c37-3"><span class="icon is--icon-search"><svg class="icon-svg">
							<use xlink:href="/login_files/gfx/svg-sprite.svg#icon-search"></use>
						</svg></span></app-icon>
			</button>
		</div>
	</nav>