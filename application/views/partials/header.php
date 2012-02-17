
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $title; ?></title>
		<meta name="description" content="Laravel is a clean and classy PHP framework with minimal configuration and expressive syntax. RESTful routing; ORM; beautiful code.">
		<meta name="keywords" content="php framework, framework, restful routing, restful, clean php">
		<meta name="robots" content="index,follow">
		<meta name="application-name" content="Laravel">
		<link rel="author" href="humans.txt">
		<link rel="dns-prefetch" href="//ajax.googleapis.com">
		<link rel="shortcut icon" href="<?php echo URL::to_asset('img/favicon.png'); ?>">

		<!-- styles -->
		<link href="<?php echo URL::to_asset('css/style.css') ?>" rel="stylesheet" type="text/css">

		<!-- Js for fonts and tracking -->
		<script type="text/javascript" src="http://use.typekit.com/dlj4kfm.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src="<?php echo URL::to_asset('js/modernizr-2.5.2.min.js'); ?>"></script>

		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-23865777-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>

	<body>
		<header>
			<div class="container">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container" style="width: auto;">
							<h1><a href="http://laravel.com">Laravel</a></h1>

							<div class="nav-collapse">
								<ul class="nav pull-right">
									<li><a href="<?php echo URL::to(); ?>">HOME</a></li>
									<li><a href="#">ABOUT</a></li>
									<li><a href="http://forums.laravel.com">FORUMS</a></li>
									<li><a href="http://bundles.laravel.com">BUNDLES</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">LEARN <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo URL::to('docs'); ?>">DOCUMENTATION</a></li>
											<li><a href="#">SCREENCASTS</a></li>
											<li class="divider"></li>
											<li><a href="http://laravel.com/api">DEVELOPER API</a></li>
										</ul>
									</li>
									<li class="download"><a href="http://laravel.com/download">DOWNLOAD</a></li>
								</ul>
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar-inner -->
				</div>
			</div>
		</header>