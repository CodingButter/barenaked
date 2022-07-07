<section class="flex-col flex hero-banner text-light flex-grow w-full md:flex-row">
    <div class="bg-<?= the_sub_field("background_color"); ?> w-full pb-[84px] padded-element pt-[158px]">
        <div class="px-10 w-full h-full flex flex-col justify-space-between items-center">
            <div class=' flex justify-start w-[100px]'>
                <?php include(get_template_directory() . '/page-objects/title/title.php'); ?>
            </div>
            <p><?= get_sub_field('text_area'); ?></p>
        </div>
    </div>
    </div>
</section>