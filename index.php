<?php get_header(); ?>

<div class="entry-content">
	<?php if (have_posts()) : ?>

		<div class="flex flex-wrap justify-between items-start">
			<?php
			while (have_posts()) :
				the_post();
			?>
				<?php get_template_part('template-parts/content', get_post_format()); ?>

			<?php endwhile; ?>
		</div>
	<?php else : ?>
		<?php get_template_part('template-parts/content', 'single'); ?>
	<?php endif; ?>
</div>
<?php
get_footer();
