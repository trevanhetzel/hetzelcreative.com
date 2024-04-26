<?php
$pageTitle = 'About&nbsp;us';
$pageSubtitle = get_field('page_subtitle');

get_header();
?>

<section class="content">
	<div class="contain copy">
		<h2 class="copy__title"><?php the_field('title_1'); ?></h2>

		<div>
			<?php the_field('content_1'); ?>
		</div>
	</div>
</section>

<section class="content">
	<div class="contain --narrow">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('featured');
		} ?>
	</div>
</section>

<section class="content">
	<div class="contain copy">
		<h2 class="copy__title"><?php the_field('title_2'); ?></h2>

		<div>
			<?php the_field('content_2'); ?>
		</div>
	</div>
</section>

<section class="content --light">
	<div class="contain about">
		<div class="about-content">
			<h2 class="--top-margin">The team</h2>

			<?php the_field('partners'); ?>
		</div>

		<div class="about-team">
			<div class="about__split">
				<div class="about__split-col">
					<img src="<?php echo get_template_directory_uri(); ?>/images/trevan@2x.jpg" class="about__avatar" width="92" height="102">

					<p class="related">
						<strong><small>Trevan Hetzel</small></strong><br>
						<a href="//trevan.co" class="fancylink">Personal blog</a><br>
						<a href="//twitter.com/trevanhetzel" class="fancylink">Twitter</a><br>
						<a href="//linkedin.com/in/trevan-hetzel-03635527/" class="fancylink">LinkedIn</a><br>
						<a href="//github.com/trevanhetzel" class="fancylink">GitHub</a>
					</p>
				</div>
			</div>

			<svg class="about__path" xmlns="http://www.w3.org/2000/svg"x="0px" y="0px" viewBox="0 0 92 102.4">
				<defs>
					<clipPath id="photo_clip">
						<path class="st0" d="M85.9,21.1L52.1,1.6c-3.8-2.2-8.4-2.2-12.1,0L6.1,21.1C2.3,23.3,0,27.3,0,31.6v39.1c0,4.3,2.3,8.4,6.1,10.5 l33.9,19.6c3.8,2.2,8.4,2.2,12.1,0l33.9-19.6C89.7,79,92,75.1,92,70.7V57V45.5V31.7C92,27.3,89.6,23.3,85.9,21.1z"/>
					</clipPath>
				</defs>
			</svg>
		</div>
	</div>
</section>

<?php get_footer(); ?>
