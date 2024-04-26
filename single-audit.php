<?php get_header(); ?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>

		<section class="section">
			<div class="contain">
				<h1 class="text-center"><?php the_title(); ?></h1>
				<h2 class="text-center"><em>WordPress theme design &amp; development</em></h2>

				<img class="main-image" src="http://hetzelcreative.com/wp-content/uploads/2013/05/kaneko1.jpg">

				<p>Let's get crazy. Exercising the imagination, experimenting with talents, being creative; these things, to me, are truly the windows to your soul. That's the way I look when I get home late; black and blue. In your world you have total and absolute power. These things happen automatically. All you have to do is just let them happen. In life you need colors.</p>

				<p>We don't have to be concerned about it. We just have to let it fall where it will. There comes a nice little fluffer. Tree trunks grow however makes them happy. This is the way you take out your flustrations. If you do too much it's going to lose its effectiveness. This painting comes right out of your heart.</p>

				<p>You can get away with a lot. This is a happy place, little squirrels live here and play. Everything's not great in life, but we can still find beauty in it. Talent is a pursued interest. That is to say, anything you practice you can do. Anything you want to do you can do here.</p>

				<p>We must be quiet, soft and gentle. We don't really know where this goes - and I'm not sure we really care. Let the paint work. You have to allow the paint to break to make it beautiful.</p>

				<p>This piece of canvas is your world. Everybody's different. Trees are different. Let them all be individuals. If it's not what you want - stop and change it. Don't just keep going and expect it will get better. Let that brush dance around there and play. The only thing worse than yellow snow is green snow. If we're going to have animals around we all have to be concerned about them and take care of them.</p>

				<p>For the lack of a better word I call them hangy downs. A big strong tree needs big strong roots. I sincerely wish for you every possible joy life could bring.</p>

				<p>Life is too short to be alone, too precious. Share it with a friend. The more we do this - the more it will do good things to our heart. Those great big fluffy clouds. A beautiful little sunset.</p>
			</div>
		</section>
	<?php }
}
?>

<section class="section">
	<div class="contain">
		<div class="cta --no-margin">
			<button type="submit" class="button">Have a project in mind?</button>
		</div>
	</div>
</section>

<?php get_footer(); ?>
