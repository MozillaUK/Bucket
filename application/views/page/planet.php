<div class="row">

	<div class="main-column">
		<h1>Planet UK</h1>

		<?php foreach($articles as $post): ?>
		<article class="post">
			<h2 class="post-title"><?php echo $post->title; ?></h2>
			<div class="post-details">
				Posted
				<time datetime="<?php echo date('Y-m-d G:i', $post->datetime); ?>">
					<span class="calendar post-time">
						<span class="calendar-month"><?php echo date('M', $post->datetime); ?></span>
						<span class="calendar-date"><?php echo date('d', $post->datetime); ?></span>
						<span class="calendar-year"><?php echo date('Y', $post->datetime); ?></span>
					</span>
					at <span class="post-detail"><?php echo date('G:i', $post->datetime); ?></span>
				</time>
				By <span class="post-detail"><?php echo $post->feed_title; ?></span>
			</div>
			<div class="post-content">
				<?php echo strip_tags($post->content, "<a><img><audio><video><source><object><p><h1><h2><h3><h4><h5><h6><ul><ol><li><blockquote><b><i><em><strong><small><iframe>"); ?>
			</div>
		</article>
		<?php endforeach; ?>

	</div>

	<aside class="sidebar">
		<section>
			<h4>Disclaimer</h4>
			<p>Collected here are the most recent blog posts from all over the Mozilla UK Community. The content here is unfiltered and uncensored, and represents the views of individual community members. Individual posts are owned by their authors -- see original source for licensing information.</p>
		</section>

		<section>
			<h4>Feeds</h4>
			<ul>
				<?php foreach ($feeds as $feed): ?>
				<li><a href="<?php echo $feed->feed_url; ?>"><?php echo $this->planet->get_feed_title($feed->feed_url); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</section>

		<section>
			<h4>Subscribe</h4>
			<p>Coming soon!</p>
		</section>

		<section>
			<h4>Other Planets</h4>
			<ul>
				<li><a href="http://planet.mozilla.org/">Planet Mozilla</a></li>
				<li><a href="http://planet.mozilla.org/projects/">Projects</a></li>
				<li><a href="http://education.mozilla.org/planet/">Mozilla Education</a></li>
				<li><a href="http://planet.mozilla.org/interns/">Mozilla Interns</a></li>
				<li><a href="http://planet.mozillamessaging.com/">Mozilla Messaging</a></li>
				<li><a href="http://mozilla.com.cn/topic/3/">Mozilla Online (Chinese)</a></li>
				<li><a href="http://planet.mozilla.org/research/">Mozilla Research</a></li>
				<li><a href="http://planet.bugzilla.org/">Planet Bugzilla</a></li>
				<li><a href="http://planet.firefox.com/">Planet Firefox</a></li>
				<li><a href="http://planet.firefox.com/mobile/">Planet Firefox Mobile</a></li>
				<li><a href="http://ux.firefox.com/">Planet UX</a></li>
				<li><a href="http://quality.mozilla.org/community">Planet QMO</a></li>
				<li><a href="http://planet.mozilla.org/ateam/">Planet Automation</a></li>
			</ul>
		</section>
	</aside>
</div>
