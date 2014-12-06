<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
	<!-- <meta name="robots" content="index,follow"> -->
	<meta name="author" content="Site Author">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

	<!-- ### Stylesheets ### -->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>light/style.css" media="screen" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>light/media-queries.css" media="screen" />
	<!-- Fancybox styles -->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>light/fancybox.min.css" media="screen" />
	<!--  Revolution Slider styles -->
	<link rel="stylesheet" href="<?php echo JS_PATH;?>light/rs-plugin/css/settings.css" media="screen" />
	<!-- Google fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,800italic,400,800" />
	<!-- ### JavaScripts ### -->
	<script src="<?php echo JS_PATH;?>light/jquery.min.js"></script>
	<!-- Add HTML5 support for older IE browsers -->
	<!--[if lt IE 9]> 
		<script src="<?php echo JS_PATH;?>light/html5.min.js"></script>
		<script src="<?php echo JS_PATH;?>light/selectivizr-and-extra-selectors.min.js"></script>
	<![endif]-->
	<script src="<?php echo JS_PATH;?>light/modernizr.custom.js"></script>
	<!-- sound manager -->
	<script src="<?php echo JS_PATH;?>light/jquery.mplayer.min.js"></script>
	<!-- /sound manager -->
	<script src="<?php echo JS_PATH;?>light/respond.min.js"></script>
	<script src="<?php echo JS_PATH;?>light/jquery.fitvids.js"></script>
	<!-- Sliders -->
	<!-- jQuery Nivo slider -->
	<script src="<?php echo JS_PATH;?>light/jquery.nivo.slider.pack.js"></script>
	 <!-- jQuery Revolution Slider  -->	
	<script type="text/javascript" src="<?php echo JS_PATH;?>light/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>			
    <script type="text/javascript" src="<?php echo JS_PATH;?>light/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- /Sliders -->
	<script src="<?php echo JS_PATH;?>light/jquery.countdown.js"></script>
	<script src="<?php echo JS_PATH;?>light/jquery.easing-1.3.min.js"></script>
	<script src="<?php echo JS_PATH;?>light/jquery.isotope.min.js"></script>
	<script src="<?php echo JS_PATH;?>light/jquery.touchSwipe-1.2.5.min.js"></script>
	<script src="<?php echo JS_PATH;?>light/jquery.sharrre-1.3.2.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo JS_PATH;?>light/jquery.gmap.min.js"></script>
	<!-- Fancybox -->
	<script src="<?php echo JS_PATH;?>light/jquery.fancybox-1.3.4.pack.js"></script>
	<!-- /Fancybox -->
	<!-- custom scripts -->
	<script src="<?php echo JS_PATH;?>light/custom.js"></script>
</head>
<body class="page-index">
<!--[if lte IE 7]>
   <div id="ie-message"><p>You are using Internet Explorer 7.0 or older to view this site. Your browser is an eight year old browser which does not display modern web sites properly. Please upgrade to a newer browser to fully enjoy the web. <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Upgrade your browser</a></p></div>
<![endif]-->
<!-- header -->
<header id="header">
    <div class="container">
    	<!-- logo -->
    	<a href="index.html" id="logo">
    	    <img src="img/logo.png" alt="Logo">
    	</a>
    	<!-- /logo -->
	<!-- nav -->
	<nav id="main-nav">
		<ul>
			<li class="current">
				<a href="index.html">Home</a>
			</li>
			<li>
				<a href="#">Pages</a>
				<ul>
					<li>
						<a href="#">Homepages</a>
						<ul>
							<li>
								<a href="index.html">Homepage Revolution</a>
							</li>
							<li>
								<a href="home-fullslider.html">Homepage Fullslider</a>
							</li>
							<li>
								<a href="home-masonry.html">Homepage Masonry</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Artists</a>
						<ul>
							<li>
								<a href="artists.html">Arists 01</a>
							</li>
							<li>
								<a href="artists2.html">Arists 02</a>
							</li>
							<li>
								<a href="artist.html">Single Artist 01</a>
							</li>
							<li>
								<a href="artist2.html">Single Artist 02</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Releases</a>
						<ul>
							<li>
								<a href="releases3.html">Releases 3 Columns</a>
							</li>
							<li>
								<a href="releases.html">Releases 4 Columns</a>
							</li>
							<li>
								<a href="release.html">Single Release 01</a>
							</li>
							<li>
								<a href="release2.html">Single Release 02</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Events</a>
						<ul>
							<li>
								<a href="events.html">Events</a>
							</li>
							<li>
								<a href="event.html">Single Event</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Gallery</a>
						<ul>
							<li>
								<a href="gallery.html">Gallery</a>
							</li>
							<li>
								<a href="gallery-album.html">Single Gallery Album</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Blog</a>
						<ul>
							<li>
								<a href="blog.html">Blog Entries</a>
							</li>
							<li>
								<a href="blog-single.html">Single Entry</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="grid.html">Grid</a>
					</li>
					<li>
						<a href="elements.html">Elements</a>
					</li>
					<li>
						<a href="404.html">404</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="artists.html">Artists</a>
			</li>
			<li>
				<a href="releases.html">Releases</a>
			</li>
			<li>
				<a href="events.html">Events</a>
			</li>
			<li>
				<a href="gallery.html">Gallery</a>
			</li>
			<li>
				<a href="blog.html">Blog</a>
			</li>
			<li>
				<a href="contact.html">Contact</a>
			</li>
		</ul>
	</nav>
	<!-- /nav -->
    </div>
   </header>
  <!-- /header -->