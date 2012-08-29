<!doctype html>
<html lang="en-GB" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>" type="text/css">
		<link href="//www.mozilla.org/tabzilla/media/css/tabzilla.css" rel="stylesheet">
		<script src="//www.mozilla.org/media/js/site-min.js?build=ff582c5"></script>

		<title>Mozilla United Kingdom Community</title>
	</head>
	<body id="home" class="html-ltr bucket">
		<div id="outer-wrapper">
			<div id="wrapper">

				<header id="masthead">
					<a href="http://www.mozilla.org/" id="tabzilla">Mozilla</a>

					<nav id="nav-main" role="menubar">
						<span class="toggle" role="button" aria-controls="nav-main-menu" tabindex="0">Menu</span>
						<ul role="menu" id="nav-main-menu">
							<li role="menuitem" class="first"><?php echo anchor('', 'Home'); ?></li>
							<li role="menuitem"><?php echo anchor('about', 'About'); ?></li>
							<li role="menuitem"><?php echo anchor('events', 'Events'); ?></li>
							<li role="menuitem" class="last"><?php echo anchor('planet', 'Planet'); ?></li>
						</ul>
					</nav>

					<h2><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url('asset/img/mozilla-uk-logo-h.png'); ?>" alt="mozilla uk"></a></h2>

				</header>

				<div id="main-content">
					<?php echo $page; ?>
				</div>

			</div>

			<footer id="colophon">
				<div class="row">

					<div class="footer-logo">
						<a href="<?php echo site_url(); ?>"><img src="<?php echo base_url('asset/img/mozilla-uk-wordmark-red.png'); ?>" alt="mozilla"></a>
					</div>

					<div class="footer-license">
						<p>Portions of this content are &copy; by individual mozilla.org.uk contributors. Content available under <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons License</a>.</p>
					</div>
					<ul class="footer-nav">
						<li><?php echo anchor('contact', 'Contact Us'); ?></li>
						<li><?php echo anchor('privacy', 'Privacy Policy'); ?></li>
						<li><?php echo anchor('legal', 'Legal Notices'); ?></li>
						<li><a href="http://www.mozilla.org/en-US/about/mozilla-spaces/">Visit Us</a></li>
					</ul>

					<ul class="footer-nav">
						<li><?php echo anchor('about', 'About'); ?></li>
						<li><?php echo anchor('events', 'Events'); ?></li>
						<li><?php echo anchor('planet', 'Planet'); ?></li>
					</ul>

				</div>
			</footer>
			<script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
		</div>
		<script src="//www.mozilla.org/media/js/mozorg-resp-min.js?build=ff582c5"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="//www.mozilla.org/media/js/pager-min.js?build=ff582c5"></script>
		<script>Mozilla.Pager.AUTO_ROTATE_INTERVAL = 10000;</script>
	</body>
</html>
