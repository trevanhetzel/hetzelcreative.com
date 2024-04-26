<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if( is_front_page() ) { ?> <?php bloginfo('description'); ?> <?php } ?> <?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>

	<?php include('partials/css.php'); ?>

	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700|Merriweather:700,700i" rel="stylesheet">

	<?php include('partials/head-meta.php'); ?>

	<?php wp_head(); ?>
</head>

<?php
if ( is_front_page() ) {
	$post_slug = 'home';
} else if ( get_post_type() == 'projects' ) {
	$post_slug = 'work';
} else {
	global $post;
	$post_slug = $post->post_name;
}
?>

<body class="body-<?php echo $post_slug; ?>">
	<header class="header" id="header">
		<div class="contain">
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/hetzelcreative-logo.svg" alt="Hetzel Creative" width="150" height="48">
			</a>

			<nav>
				<ul class="nav">
					<li class="home"><a href="<?php echo get_home_url(); ?>/">Home</a></li>
					<li class="services"><a href="<?php echo get_home_url(); ?>/services">Services</a></li>
					<li class="work"><a href="<?php echo get_home_url(); ?>/projects">Work</a></li>
					<li class="about"><a href="<?php echo get_home_url(); ?>/about">About</a></li>
					<li class="contact"><a href="<?php echo get_home_url(); ?>/contact" class="nav__button">Talk to us</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section class="hero <?php if(is_front_page() ) { ?>--home<?php } ?>">
		<div class="contain">
			<h1><?php global $pageTitle; echo $pageTitle; ?></h1>
			<p class="--subtitle"><?php global $pageSubtitle; echo $pageSubtitle; ?></p>

			<?php if ( is_front_page() ) { ?>
				<a class="button --small-margin hide-medium" href="<?php echo get_home_url(); ?>/contact">Talk to us</a>
			<?php } ?>
		</div>
	</section>

	<section class="full">
