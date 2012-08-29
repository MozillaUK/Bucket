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

				<section id="home-promo" class="pager pager-with-tabs pager-auto-rotate pager-no-history">

					<div class="pager-content">

						<div class="pager-page default-page" id="promo-firefox">
							<script>// &lt;![CDATA[
							document.getElementById('promo-firefox').id = 'page-promo-firefox';
							// ]]&gt;
							</script>
							<a class="container" href="//www.mozilla.org/en-US/firefox/new/">
								<img alt="Firefox for Desktop artwork" src="<?php echo base_url('asset/img/promo-beta.jpg'); ?>">
								<div>
									<h3>Different by design.</h3>
									<h4>Proudly non-profit.<br> Innovating for you.<br> Fast, flexible, secure.</h4>
									<p>Get Firefox »</p>
								</div>
							</a>
						</div>

						<div class="pager-page" id="promo-android">
							<script>// &lt;![CDATA[
							document.getElementById('promo-android').id = 'page-promo-android';
							// ]]&gt;
							</script>
							<a class="container" href="//www.mozilla.org/en-US/firefox/fx/?WT.mc_id=moandroid&amp;WT.mc_ev=click#mobile">
								<img alt="Firefox for Android artwork" src="//www.mozilla.org/media/img/home/promo-android.jpg">
								<div>
									<h3>Fast. Smart. Safe.</h3>
									<h4>Get the mobile browser that’s got your back.</h4>
									<p>Get Firefox for Android&nbsp;»</p>
								</div>
							</a>
						</div>

						<div class="pager-page" id="promo-collusion">
							<script>// &lt;![CDATA[
							document.getElementById('promo-collusion').id = 'page-promo-collusion';
							// ]]&gt;
							</script>
							<a class="container" href="//www.mozilla.org/en-US/collusion/">
								<img alt="Collusion artwork" src="//www.mozilla.org/media/img/home/promo-collusion.jpg">
								<div>
									<h3>See who’s tracking your movements online.</h3>
									<p>Add Collusion to Firefox&nbsp;»</p>
								</div>
							</a>
						</div>

						<div class="pager-page" id="promo-flicks">
							<script>
								document.getElementById('promo-flicks').id = 'page-promo-flicks';
							</script>
							<a href="https://firefoxflicks.mozilla.org/?WT.mc_id=mofxflicks&amp;WT.mc_ev=click" class="container">
								<img alt="Firefox Flicks artwork" src="//www.mozilla.org/media/img/home/promo-flicks.jpg">
								<div>
									<h3>Congratulations to all the winners of Firefox Flicks!</h3>
									<p class="go">Watch the winning videos</p>
								</div>
							</a>
						</div>
						
						<div id="page-promo-maker-video" class="default-page pager-page">
							<script>// &lt;![CDATA[
							document.getElementById('promo-maker-video').id = 'page-promo-maker-video';
							// ]]&gt;</script>
							<a class="container" href="//www.mozilla.org/en-US/webmaker/videos/">
							  <img alt="" src="//www.mozilla.org/media/img/webmaker/carousel/instructors.jpg">
							  <div>
								<h3>Meet the Webmakers</h3>
								<p><strong>Let's teach the world the web.</strong> Meet some of the global community making it happen.</p>
							  </div>
							</a>
						  </div>
					
						<div class="pager-page" id="page-promo-code-party">
							<script>// &lt;![CDATA[
							document.getElementById('promo-code-party').id = 'page-promo-code-party';
							// ]]&gt;</script>
							<a class="container" href="https://webmaker.org/events/">
							  <img alt="" src="//www.mozilla.org/media/img/webmaker/carousel/codeparty.jpg">
							  <div>
								<h3>Summer Code Party</h3>
								<p>Meet, make, and share your creations with friends to learn some code this summer. »</p>
							  </div>
							</a>
						  </div>
						
						<div class="pager-page" id="page-promo-popcorn">
							<script>// &lt;![CDATA[
							document.getElementById('promo-popcorn').id = 'page-promo-popcorn';
							// ]]&gt;</script>
							<a class="container" href="http://www.mozillapopcorn.org">
							  <img alt="" src="//www.mozilla.org/media/img/webmaker/carousel/popcorn.png">
							  <div>
								<h3>Make video pop with Popcorn</h3>
								<p>Popcorn is revolutionizing video on the web. It's free, open, and easy to use. Try it today. »</p>
							  </div>
							</a>
						  </div>
					</div>

					<ul class="pager-tabs">
						<li><a href="#p1">●</a></li>
						<li><a href="#p2">●</a></li>
						<li><a href="#p3">●</a></li>
						<li><a href="#p4">●</a></li>
						<li><a href="#p5">●</a></li>
						<li><a href="#p6">●</a></li>
						<li><a href="#p7">●</a></li>
					</ul>

				</section>

				<div id="main-content">
				<?php echo $page; ?>
				</div>

				<!--<form class="billboard" id="footer-email-form" method="post" action="//lists.mozilla.org/subscribe/community-uk">
					<h3>Join our mailing list</h3>
					<input type="hidden" name="digest" value="0" />

					<div class="form-contents">
						<div class="field field-email">
							<input name="email" type="email" id="id_email" size="30" value="" placeholder="YOUR EMAIL HERE">
						</div>
					</div>

					<div class="form-submit">
						<button type="submit" id="footer_email_submit" class="button-blue">Sign me up »</button>
					</div>
				</form>-->

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
