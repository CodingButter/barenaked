<?php
if (have_rows('main_flexible_content')) : ?>
  <section class="flex flex-col justify-center items-center h-full w-full">

    <?php while (have_rows('main_flexible_content')) : the_row(); ?>
      <?php $row_layout = get_row_layout(); ?>
      <?php include(dirname(dirname(__FILE__)) . '/' . $row_layout . '/' . $row_layout . '.php'); ?>
    <?php endwhile; ?>

  </section>
<?php endif; ?>