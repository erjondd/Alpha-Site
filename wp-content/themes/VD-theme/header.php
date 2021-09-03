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
            <svg xmlns="http://www.w3.org/2000/svg" width="66.54" height="66.679" viewBox="0 0 66.54 66.679">
                <g id="Group_4" data-name="Group 4" transform="translate(160.764 -1723.904) rotate(90)">
                    <path id="Path_10" data-name="Path 10" d="M423.588,218.1l11.856,33.218,6.17,17.3,5.72,16.026h12.341l-11.89-33.322-6.171-17.3L435.933,218.1Z" transform="translate(1300.316 -123.873)" fill="#fff" />
                    <path id="Path_11" data-name="Path 11" d="M423.8,218.1l11.71,33.218,6.095,17.3,5.65,16.026h12.189L447.7,251.316l-6.095-17.3L435.994,218.1Z" transform="translate(1331.138 -123.873)" fill="#fff" />
                </g>
            </svg>

        </div>

        <div class="menu-content menu-black">

            <div class="menu-icon-x">
                <svg xmlns="http://www.w3.org/2000/svg" width="111.723" height="111.723" viewBox="0 0 111.723 111.723">
                    <path id="Union_1" data-name="Union 1" d="M55.861,74.246,18.384,111.723,0,93.338,37.476,55.862,0,18.385,18.385,0,55.862,37.476,93.338,0l18.384,18.385L74.246,55.861l37.477,37.477L93.338,111.723Z" fill="#fff" />
                </svg>

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
                <svg xmlns="http://www.w3.org/2000/svg" width="111.723" height="111.723" viewBox="0 0 111.723 111.723">
                    <path id="Union_1" data-name="Union 1" d="M55.861,74.246,18.384,111.723,0,93.338,37.476,55.862,0,18.385,18.385,0,55.862,37.476,93.338,0l18.384,18.385L74.246,55.861l37.477,37.477L93.338,111.723Z" fill="#fff" />
                </svg>
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