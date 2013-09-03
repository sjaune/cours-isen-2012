<?php
$idx = isset($_GET['c']) ? $_GET['c'] : null;
if (is_null($idx))
	die();

?>
<!doctype html>
<html lang="fr">

	<head>
		<meta charset="utf-8">

		<title>Cours ISEN</title>

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/simple.css" id="theme">

		<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
		<link rel="stylesheet" href="css/isen.css">
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<script>
			document.write( '<link rel="stylesheet" href="css/print/' + ( window.location.search.match( /print-pdf/gi ) ? 'pdf' : 'paper' ) + '.css" type="text/css" media="print">' );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->

	</head>

	<body>

		<div class="reveal">
			<div class="state-background"></div>

			<div class="slides">

				<?php include(sprintf('cours/%s.html', $idx)); ?>

			</div>

			<!-- The navigational controls UI -->
			<aside class="controls">
				<a class="left" href="#">&#x25C4;</a>
				<a class="right" href="#">&#x25BA;</a>
				<a class="up" href="#">&#x25B2;</a>
				<a class="down" href="#">&#x25BC;</a>
			</aside>

			<!-- Presentation progress bar -->
			<div class="progress"><span></span></div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
			    mouseWheel: false,

				theme: Reveal.getQueryHash().theme || 'beige', // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/linear(2d)

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: 'lib/js/highlight.js', async: true, callback: function() { window.hljs.initHighlightingOnLoad(); } },
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'lib/js/showdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'lib/js/data-markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: '/socket.io/socket.io.js', async: true, condition: function() { return window.location.host === 'localhost:1947'; } },
					{ src: 'plugin/speakernotes/client.js', async: true, condition: function() { return window.location.host === 'localhost:1947'; } },
				]
			});

		</script>

	</body>
</html>