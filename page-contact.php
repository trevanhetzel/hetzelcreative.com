<?php
$pageTitle = 'Get in touch';
$pageSubtitle = get_field('page_subtitle');

get_header();
?>

<section class="content">
	<div class="contain --tiny">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

				the_content();
			}
		}
		?>
	</div>
</section>

<?php get_footer(); ?>
