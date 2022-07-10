<?php
$themeDirectory = get_template_directory();
include_once("$themeDirectory/utilities/ThemeManager.php");

$themeJsonPath = $themeDirectory . '/theme.json';
$themeManager = new ThemeManager($themeJsonPath);
function barenaked_set_theme_colors($wp_customize)
{
    global $themeManager;
    $colors = $themeManager->getColors();
    $wp_customize->add_section('barenaked_theme_setttings', array(
        'title' => __('Theme Colors', 'barenaked'),
        'priority' => 30
    ));

    foreach ($colors as $color) {
        $slug = $color["slug"];
        $wp_customize->add_setting($slug, array(
            'default' => $color["default"],
            'transport' => 'refresh'
        ));


        $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            $slug . "_control",
            array(
                'label' => __($color["name"], 'CodingButter'),
                'section' => 'barenaked_theme_setttings',
                'settings' => $slug
            )
        ));
    }
}

add_action('customize_register', 'barenaked_set_theme_colors');

function barenaked_customize_css()
{
    global $themeManager;
    $palette = $themeManager->getColors();

?>
    <style type="text/css" data-name="Custom Theme Colors">
        @layer base {
            :root {
                <?php
                foreach ($palette as $color) {
                    $slug = $color["slug"];
                    $value = get_theme_mod($slug, $color["default"]);
                    $rgb = $themeManager->hexToRgb($value);
                    $css_variable_name = $color["slug"];
                    echo "--$css_variable_name: " . $rgb["r"] . ", " . $rgb["g"] . ", " . $rgb["b"] . ";\n";
                }
                ?>
            }
        }
    </style>
<?php
}

add_action('admin_head', 'barenaked_customize_css');
add_action('wp_head', 'barenaked_customize_css');
