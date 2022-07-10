<?php $theme_path = get_template_directory(); ?>


<?php if (is_search() || is_archive()) : ?>
	<?php $background_image = get_post_thumbnail_id(); ?>
	<?php $post_url = get_permalink(); ?>
	<a href="<?= $post_url; ?>" class='post ease-out delay-100 transition-all duration-500 text-white p-2 flex-grow relative w-full flex aspect-[9/5] sm:w-1/2'>
		<div class="w-full h-full transition-all ease-out delay-100 duration-500 relative flex flex-col justify-end rounded shadow overflow-hidden hover:shadow-md ">
			<div class="dark-overlay transition-all delay-100 duration-500 z-10 w-full h-full absolute top-0 left-0 bg-gradient-to-t from-black/80 to-transparent via-black/40"></div>
			<img class="z-0 project-featured-image will-change-auto object-cover transition-all ease-out delay-100 duration-500 lazyload w-full h-full absolute top-0 right-0" id="post-<?= get_the_ID() ?>" <?php responsive_img($background_image); ?> />
			<div class='z-10 w-full h-full absolute top-0 left-0 flex flex-col justify-end items-center'>
				<h3 class="text-4xl duration-500 transition-all delay-100 text-center break-words font-bold"><?php the_title(); ?></h3>
			</div>
		</div>
	</a>
<?php else : ?>


	<?php
	include("$theme_path/page-objects/flexible-content/main-flexible-content.php");


	wp_link_pages(
		array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		)
	);
	?>

<?php endif; ?>