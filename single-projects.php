<?php
$pageTitle = get_the_title();
$pageSubtitle = get_field('page_subtitle');

get_header();
?>

<?php
if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<section class="content">
			<div class="contain --narrow">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} ?>
			</div>
		</section>

		<section class="content">
			<div class="contain copy">
				<h2 class="copy__title"><?php the_field('title_1'); ?></h2>

				<div>
					<?php the_field('content_1'); ?><br>

					<a href="<?php the_field('live_site_link'); ?>" class="button">View live site</a>
				</div>
			</div>
		</section>

		<?php
		$image1 = get_field('image_1');
		$image2 = get_field('image_2');
		$image3 = get_field('image_3');
		$image4 = get_field('image_4');
		$image5 = get_field('image_5');
		$image6 = get_field('image_6');
		?>

		<?php if ( !empty($image1) && !empty($image2) ): ?>
			<section class="projects">
				<div class="projects__item --static">
					<?php
					$img1_src = wp_get_attachment_image_url( $image1['id'], 'project' );
					$img1_srcset = wp_get_attachment_image_srcset( $image1['id'], 'project' );
					?>

					<img src="<?php echo esc_url( $img1_src ); ?>" srcset="<?php echo esc_attr( $img1_srcset ); ?>" sizes="(max-width: 50em) 87vw, 768px" >

					<p class="projects__caption"><?php echo $image1['caption']; ?></p>
				</div>

				<div class="projects__item --static">
					<?php
					$img2_src = wp_get_attachment_image_url( $image2['id'], 'project' );
					$img2_srcset = wp_get_attachment_image_srcset( $image2['id'], 'project' );
					?>

					<img src="<?php echo esc_url( $img2_src ); ?>" srcset="<?php echo esc_attr( $img2_srcset ); ?>" sizes="(max-width: 50em) 87vw, 768px" >

					<p class="projects__caption"><?php echo $image2['caption']; ?></p>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( get_field('content_2') ): ?>
			<section class="content">
				<div class="contain copy">
					<h2 class="copy__title"><?php the_field('title_2'); ?></h2>

					<div>
						<?php the_field('content_2'); ?>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( !empty($image3) && !empty($image4) ): ?>
			<section class="projects">
				<div class="projects__item --static">
					<?php
					$img3_src = wp_get_attachment_image_url( $image3['id'], 'project' );
					$img3_srcset = wp_get_attachment_image_srcset( $image3['id'], 'project' );
					?>

					<img src="<?php echo esc_url( $img3_src ); ?>" srcset="<?php echo esc_attr( $img3_srcset ); ?>" sizes="(max-width: 50em) 87vw, 768px" >

					<p class="projects__caption"><?php echo $image3['caption']; ?></p>
				</div>

				<div class="projects__item --static">
					<?php
					$img4_src = wp_get_attachment_image_url( $image4['id'], 'project' );
					$img4_srcset = wp_get_attachment_image_srcset( $image4['id'], 'project' );
					?>

					<img src="<?php echo esc_url( $img4_src ); ?>" srcset="<?php echo esc_attr( $img4_srcset ); ?>" sizes="(max-width: 50em) 87vw, 768px" >

					<p class="projects__caption"><?php echo $image4['caption']; ?></p>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( get_field('content_3') ): ?>
			<section class="content">
				<div class="contain copy">
					<h2 class="copy__title"><?php the_field('title_3'); ?></h2>

					<div>
						<?php the_field('content_3'); ?>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( !empty($image5) && !empty($image6) ): ?>
			<section class="projects">
				<div class="projects__item --static">
					<?php
					$img5_src = wp_get_attachment_image_url( $image5['id'], 'project' );
					$img5_srcset = wp_get_attachment_image_srcset( $image5['id'], 'project' );
					?>

					<img src="<?php echo esc_url( $img5_src ); ?>" srcset="<?php echo esc_attr( $img5_srcset ); ?>" sizes="(max-width: 50em) 87vw, 768px" >
					<p class="projects__caption"><?php echo $image5['caption']; ?></p>
				</div>

				<div class="projects__item --static">
					<?php
					$img6_src = wp_get_attachment_image_url( $image6['id'], 'project' );
					$img6_srcset = wp_get_attachment_image_srcset( $image6['id'], 'project' );
					?>

					<img src="<?php echo esc_url( $img6_src ); ?>" srcset="<?php echo esc_attr( $img6_srcset ); ?>" sizes="(max-width: 50em) 87vw, 768px" >

					<p class="projects__caption"><?php echo $image6['caption']; ?></p>
				</div>
			</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<section class="content --light">
	<div class="contain text-center">
		<a href="<?php echo get_home_url(); ?>/contact" class="button">Let's talk about your project</a>
	</div>
</section>

<?php get_footer(); ?>
