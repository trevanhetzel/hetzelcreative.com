<?php
$pageTitle = 'Our work';
$pageSubtitle = 'A few of our recent partnerships';

get_header();
?>

<?php
if ( have_posts() ) : ?>
	<section class="projects">
		<?php while ( have_posts() ) : the_post(); ?>
			<a href="<?php echo get_the_permalink(); ?>" class="projects__item">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('project');
				} ?>

				<div class="projects__hidden">
					<h2><?php the_title(); ?></h2>
					<h4><?php the_field('page_subtitle'); ?></h4>
				</div>
			</a>
		<?php endwhile; ?>
	</section>
<?php endif; ?>

<section class="content --light">
	<div class="contain text-center">
		<a href="<?php echo get_home_url(); ?>/contact" class="button">Let's talk about your project</a>
	</div>
</section>

<?php get_footer(); ?>
