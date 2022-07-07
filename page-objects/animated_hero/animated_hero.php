<section class="flex-col flex animated-hero text-light flex-grow w-full md:flex-row">
    <div class="bg-secondary w-full pb-[84px] padded-element flex justify-center md:justify-end pt-[158px] md:w-1/2">
        <div class="px-10 w-full h-full flex  justify-center max-w-[640px]">
            <div class="flex flex-col space-y-3 px-8 sm:px-[43px] py-[42px] w-full max-w-[560px] border-white border-solid border-[1px]">
                <?php while (has_sub_field('left_side')) : ?>
                    <div class=' flex justify-start w-[100px]'>
                        <?php include(get_template_directory() . '/page-objects/title/title.php'); ?>
                    </div>
                    <p><?= get_sub_field('text_area'); ?></p>
                    <div>
                        <?php include(get_template_directory() . '/page-objects/dark_button/dark_button.php'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <div class="bg-primary w-full pb-[84px] padded-element flex justify-center md:justify-start pt-[158px] md:w-1/2">
        <div class="px-10 w-full h-full flex justify-center items-center max-w-[640px]">
            <div class="flex flex-col space-y-3 px-8 sm:px-[43px] py-[42px] w-full max-w-[560px] border-white border-solid border-[1px]">
                <?php while (has_sub_field('right_side')) : ?>
                    <div class=' flex justify-start w-[250px]'>
                        <?php include(get_template_directory() . '/page-objects/title/title.php'); ?>
                    </div>
                    <p><?= get_sub_field('text_area'); ?></p>
                    <div>
                        <?php include(get_template_directory() . '/page-objects/dark_button/dark_button.php'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>