<?php
function addFonts()
{ ?>
    <style data-action="adding-local-fonts">
        @font-face {
            font-family: "Inter";
            src: url("<?= get_template_directory_uri() ?>/inc/fonts/Inter/Inter-VariableFont_slnt,wght.ttf") format("truetype");
        }
    </style>
<?php }
add_action('wp_head', 'addFonts');
