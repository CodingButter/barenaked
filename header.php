<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-light antialiased'); ?>>
	<?php do_action('tailpress_site_before'); ?>
	<div id="page" class="min-h-screen relative bg-white">
		<?php get_template_part('template-parts/section', 'hamburger'); ?>
		<?php do_action('tailpress_header'); ?>
		<header class="flex w-full">
			<div class="mx-auto flex w-full px-md py-md max-w-content">
				<div class="flex justify-between items-center py-lg px-md text-accent">
					<div class="flex justify-between w-full items-center">
						<div>
							<?php if (get_field('main_logo', 'option')) { ?>
								<img src="<?php the_field('main_logo', 'option'); ?>" alt="<?php get_bloginfo('name'); ?> Logo">
							<?php } else { ?>
								<div class="text-lg uppercase flex items-center justify-center">
									<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
										<?php echo get_bloginfo('name'); ?>
									</a>
								</div>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>
							<?php } ?>
						</div>

						<div>

						</div>
					</div>


				</div>

			</div>
		</header>

		<main>