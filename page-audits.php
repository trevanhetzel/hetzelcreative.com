<?php get_header(); ?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>

		<section class="section --alt">
			<div class="contain">
				<h1>Learn how to make your website <em>fast</em> with a personalized speed audit</h1>
				<p>Is your website slow? Do you know how it compares to the top sites in terms of performance? Let us show you exactly how fast it is and give you actionable steps to make it <strong>super fast</strong>!</p>
			</div>
		</section>

		<section class="section">
			<div class="contain">
				<h2>Our speed audit scrutinizes your website and provides detailed instructions on ways to make it load faster.</h2>
				<p>Show our findings to your developers (or have us help) and watch your site climb search engine rankings and retain more happy visitors. A faster website helps in many ways:</p><br>

				<ul>
					<li>How you're handling images</li>
					<li>How you're loading JavaScript and&nbsp;CSS</li>
					<li>What resources are&nbsp;blocking</li>
					<li>How well you're caching</li>
					<li>Your current <em>perceived</em> performance</li>
					<li>How much CPU your site&nbsp;uses</li>
					<li>Responsive design&nbsp;bottlenecks</li>
					<li>Download sizes</li>
					<li>Problem plugins</li>
					<li>Slow running database&nbsp;queries</li>
					<li><em>And much&nbsp;more</em></li>
				</ul>
			</div>

			<div class="contain">
				<div class="cta">
					<button type="submit" class="button">Request a speed audit</button>
				</div>
			</div>
		</section>

		<section class="section --alt">
			<div class="contain">
				<blockquote>Fast websites are a must these days with Google penalizing slow sites, user patience at all time lows. Fast websites are a must these days with Google penalizing slow sites, user patience at all time lows</blockquote>
			</div>
		</section>

		<section class="section">
			<div class="contain">
				<h1>How it works</h1>

				<div class="audit-features">
					<div class="audit-list">
						<h2>1. We take a look under the hood</h2>

						<p>You give us access to your WordPress&nbsp;site and we review your theme, plugins and server. We'll specifically look at things like:</p>

						<ul>
							<li>How you're handling images</li>
							<li>How you're loading JavaScript and&nbsp;CSS</li>
							<li>What resources are&nbsp;blocking</li>
							<li>How well you're caching</li>
							<li>Your current <em>perceived</em> performance</li>
							<li>How much CPU your site&nbsp;uses</li>
							<li>Responsive design&nbsp;bottlenecks</li>
							<li>Download sizes</li>
							<li>Problem plugins</li>
							<li>Slow running database&nbsp;queries</li>
							<li><em>And much&nbsp;more</em></li>
						</ul>
					</div>

					<div class="audit-list">
						<h2>2. Then show you what's wrong</h2>

						<p>You get a detailed document with suggestions on ways to make your site faster. We'll then hop on a Google Hangout to discuss our&nbsp;findings.</p>

						<p>From there, you can either have your developers implement our suggestions or work with us on a custom consulting plan to implement them for you.</p>
					</div>
				</div>
			</div>

			<div class="contain">
				<div class="cta">
					<button type="submit" class="button">Speed up your site now</button>
				</div>
			</div>
		</section>

		<section class="section --alt">
			<div class="contain">
				<blockquote>Fast websites are a must these days with Google penalizing slow sites, user patience at all time lows. Fast websites are a must these days with Google penalizing slow sites, user patience at all time lows</blockquote>
			</div>
		</section>

		<section class="section">
			<div class="contain">
				<h1>Frequently asked questions</h1>

				<ul>
					<li>How you're handling images</li>
					<li>How you're loading JavaScript and&nbsp;CSS</li>
					<li>What resources are&nbsp;blocking</li>
					<li>How well you're caching</li>
					<li>Your current <em>perceived</em> performance</li>
					<li>How much CPU your site&nbsp;uses</li>
					<li>Responsive design&nbsp;bottlenecks</li>
					<li>Download sizes</li>
					<li>Problem plugins</li>
					<li>Slow running database&nbsp;queries</li>
					<li><em>And much&nbsp;more</em></li>
				</ul>
			</div>
		</section>

		<section class="section --alt">
			<div class="contain">
				<h1>Request a speed audit</h1>

				<p>We don't have to be concerned about it. We just have to let it fall where it will. There comes a nice little fluffer. Tree trunks grow however makes them happy. This is the way you take out your flustrations. If you do too much it's going to lose its effectiveness. This painting comes right out of your heart.</p>

				<?php the_content(); ?>
			</div>
		</section>

	<?php }
}
?>

<?php get_footer(); ?>
