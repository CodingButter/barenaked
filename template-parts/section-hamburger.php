   <?php
    $current_page_id = get_the_ID();
    $menu_name = 'primary';
    $locations = get_nav_menu_locations();
    $menu_id = $locations[$menu_name];
    $menu_items = wp_get_nav_menu_items($menu_id);
    ?>
   <section class="nav-menu relative text-white z-[100]">
       <a id="primary-menu-toggle" href=" #" class="hamberger-icon z-40 absolute p-5 bg-white text-primary shadow-md top-5 right-5 sm:top-0 sm:right-0">
           <svg class="hamberger fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
               <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
           </svg>
           <svg class="hidden close fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 53 53">
               <path d="M13 13L40.5 40.5" stroke="currentColor" stroke-width="3" />
               <path d="M12.5 40.5L40 13" stroke="currentColor" stroke-width="3" />
           </svg>
       </a>
       <section id="primary-menu" class="pt-40 pr-24 pb-16 menu-wrapper fixed top-0 left-0 w-screen h-screen pointer-events-auto opacity-0 bg-primary transition-all ease-out duration-200">
           <div class="menu-inner w-full transition-all flex justify-end duration-1000 ease-linear sm:text-right">
               <div>
                   <?php foreach ($menu_items as $menu_item) : ?>
                       <?php
                        $current = ($menu_item->object_id == get_queried_object_id());
                        $url = $menu_item->url;
                        $label = strtolower($menu_item->title);
                        ?>
                       <a class="<?= $current ? 'current-page' : ''; ?> visited:text-white/60 relative block py-3 px-0 mb-1 text-5xl font-thin leading-[46px] text-white decoration-0 before:content[' '] <?= $current ? "before:h-8" : ""; ?> hover:before:h-8 before:absolute before:z-1 before:bottom-0 before:left-0 before:w-full before:h-0 before:bg-primary before:transition-all before:duration-200 before:pointer-events-none" href="<?= $url; ?>"><?= $label; ?></a>
                   <?php endforeach; ?>
               </div>
           </div>
       </section>

   </section>