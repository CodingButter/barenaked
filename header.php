<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-light text-gray-900 antialiased'); ?>>
	<div class="relative z-[100] text-accent h-0 mx-auto max-w-content">
		<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle" class="block absolute top-10 right-10">
			<svg id="open" width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<line x1="28" y1="1" x2="-8.74228e-08" y2="0.999998" stroke="currentColor" stroke-width="2" />
				<line x1="28" y1="12" x2="-8.74228e-08" y2="12" stroke="currentColor" stroke-width="2" />
				<line x1="28" y1="23" x2="-8.74228e-08" y2="23" stroke="currentColor" stroke-width="2" />
			</svg>
			<svg id="close" class='hidden' width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M13 13L40.5 40.5" stroke="currentColor" stroke-width="3" />
				<path d="M12.5 40.5L40 13" stroke="currentColor" stroke-width="3" />
			</svg>
		</a>
	</div>
	<?php
	wp_nav_menu(
		array(
			'container_id'    => 'primary-menu',
			'container_class' => 'hidden absolute z-[20] w-full sm:pt-[338px] pt-28 text-accent bg-primary px-xxl',
			'menu_class'      => 'flex flex-col -mx-4',
			'theme_location'  => 'primary',
			'li_class'        => 'text-6xl font-bold mx-4 mb-[37px]',
			'fallback_cb'     => false,
		)
	);
	?>
	<?php do_action('tailpress_site_before'); ?>
	<div id="page" class="min-h-screen flex flex-col">
		<?php do_action('tailpress_header'); ?>
		<header class="flex bg-<?= get_field('color'); ?> w-full">
			<div class="mx-auto flex w-full px-xxl py-xl max-w-content">
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