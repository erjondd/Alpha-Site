<?php
$logo = get_field("main_logo", "options");
$has_page_banner = get_field("has_page_banner");
if (!$has_page_banner) {
    $header_color_class =  "dark-background";
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index,follow" />

    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name.
        bloginfo('name');
        //Add the blog description for the home/fron page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            echo " | $site_description";
        }
        ?>
    </title>
    <?php wp_head(); ?>


</head>

<body class="<?= is_front_page() ? 'body-homepage' : '' ?>" page-color="white">

    <div class="menu-wrapper">
        <div id="menu-open-trigger" class="menu-icon">
            <img src="<?= get_template_directory_uri() ?>/images/menu-icon.svg" alt="Menu Open" />
        </div>

        <div class="menu-content menu-black">

            <div class="menu-icon-x">
                <img src="<?= get_template_directory_uri() ?>/images/menu-icon-x.svg" alt="Menu Close" />
            </div>
            <div class="menu-links">
                <div class="menu-batiment menu-open-black"><img src="<?= get_template_directory_uri() ?>/images/batiment-homepage.svg" alt=""></div>
                <div class="menu-edification menu-open-white"><img src="<?= get_template_directory_uri() ?>/images/edification-homepage.svg" alt=""></div>
            </div>

            <?php
            echo wp_nav_menu(array(
                'menu'   => 'Batiment Menu',
                'container' => false,
            ));
            ?>
        </div>

        <div class="menu-content menu-white">

            <div class="menu-icon-x">
                <img src="<?= get_template_directory_uri() ?>/images/menu-icon-x.svg" alt="Menu Close" />
            </div>
            <div class="menu-links">
                <div class="menu-batiment menu-open-black"><img src="<?= get_template_directory_uri() ?>/images/batiment-homepage.svg" alt=""></div>
                <div class="menu-edification menu-open-white"><img src="<?= get_template_directory_uri() ?>/images/edification-homepage.svg" alt=""></div>
            </div>

            <?php
            echo wp_nav_menu(array(
                'menu'   => 'Edification Menu',
                'container' => false,
            ));
            ?>
        </div>
    </div>