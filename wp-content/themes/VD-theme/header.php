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

        <?php if (wp_is_mobile()) { ?>
            <div class="menu-responsive-logo">
                <a href="<?= get_home_url()  ?>"><svg xmlns="http://www.w3.org/2000/svg" width="57.448" height="57.448" viewBox="0 0 57.448 57.448">
                        <g id="Group_56179" data-name="Group 56179" transform="translate(-695.625 -22.626)">
                            <g id="Calque_1" data-name="Calque 1" transform="translate(695.625 22.626)">
                                <path id="Rectangle_70" data-name="Rectangle 70" d="M4.865,4.865V52.583H52.583V4.865H4.865M0,0H57.448V57.448H0Z" transform="translate(0)" fill="#fff" />
                            </g>
                            <g id="Calque_2" data-name="Calque 2" transform="translate(712.206 39.993)">
                                <path id="Path_36305" data-name="Path 36305" d="M888.68,213.539c.6-1.556,1.132-3.131,1.7-4.7a.184.184,0,0,1,.205-.144c1.643.016,3.285-.022,4.927.017-1.152,3.535-3.059,7.011-3.83,10.576,1.529,3.721,3.071,7.435,4.58,11.163-1.73.022-3.457,0-5.187.012a.232.232,0,0,1-.26-.183c-.712-1.908-1.4-3.815-2.132-5.717-4.173,10.506-15.688,7.028-16.589-3.291-.733-5.457,1.9-12.217,7.994-12.929C884.028,207.629,887.162,210.045,888.68,213.539ZM877.2,219.62a8.545,8.545,0,0,0,2.259,6.266c1.946,2,4.873.814,5.856-1.533a21.672,21.672,0,0,0,2.018-5.174c-.9-2.083-1.578-4.425-3.234-6.055C879.767,210.006,876.94,215.817,877.2,219.62Z" transform="translate(-871.978 -208.219)" fill="#fff" />
                            </g>
                        </g>
                    </svg></a>

            </div>
        <?php } ?>
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

            <?php if (!wp_is_mobile()) { ?>
                <div class="menu-links">
                    <div class="menu-batiment menu-open-black"><img src="<?= get_template_directory_uri() ?>/images/batiment-homepage.svg" alt=""></div>
                    <div class="menu-edification menu-open-white"><img src="<?= get_template_directory_uri() ?>/images/edification-homepage.svg" alt=""></div>
                </div>
            <?php } ?>

            <?php if (wp_is_mobile()) { ?>

                <div class="menu-links-mobile">
                    <div class="menu-mobile-batiment menu-open-black">Bâtiment & conseil sarl</div>
                    <div class="menu-mobile-edification menu-open-white">Édifications s.a.</div>
                </div>

            <?php } ?>

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

            <?php if (!wp_is_mobile()) { ?>
                <div class="menu-links">
                    <div class="menu-batiment menu-open-black"><img src="<?= get_template_directory_uri() ?>/images/batiment-homepage.svg" alt=""></div>
                    <div class="menu-edification menu-open-white"><img src="<?= get_template_directory_uri() ?>/images/edification-homepage.svg" alt=""></div>
                </div>
            <?php } ?>

            <?php if (wp_is_mobile()) { ?>

                <div class="menu-links-mobile">
                <div class="menu-mobile-edification menu-open-white">Édifications s.a.</div>
                    <div class="menu-mobile-batiment menu-open-black">Bâtiment & conseil sarl</div>

                </div>

            <?php } ?>

            <div class="menu-references-content">
                <div class="references-batiment">
                    Villa à Arare<br />
                    5 villas à Gy<br />
                    4 villas à Veyrier<br />
                    2 villas à Chéserex<br />
                    Maison individuelle<br />
                    5 maison contigües à Thônex<br />
                    5 villas à Bernex<br />
                    Maison individuelle au Grand-Lancy<br />
                    5 villas à Thônex<br />
                    Piscine à Veyrier<br />
                    Villa individuelle à Soral<br />
                    Villa individuelle à Chancy<br />
                    Maison villageoise à Onex<br />
                    Villas Conches<br />
                    2 Villas Siamoises à Veyrier<br />
                    2 Villas mitoyennes à Charrot<br />
                </div>
                <div class="references-genie-civil">
                    <?= get_field("footer_content", "options")  ?>
                    Centre de quartier à la Gradelle<br />
                    Maison à Nyon<br />
                    Maison à Confignon<br />
                    CO des Coudriers<br />
                    Ancienne ferme à Avully<br />
                    Maison individuelle à Collonge-Bellerive<br />
                    Ferme de Budé<br />
                    Genève Aéroport<br />
                    Immeuble de logements à Chancy<br />
                    Bâtiment principal de l’OMS<br />
                    Manufacture Vacheron Constantin<br />
                    Laboratoires de Covance<br />
                    CO de la Golette<br />
                    CO Pinchat<br />
                    Foyer Le Lagnon<br />
                    Grand Théâtre de Genève<br />
                    Propriété privée à Lancy<br />
                    Maison individuelle à Veyrier<br />
                    Arcade commerciale à Genève<br />
                    Cafeteria TPG<br />
                    Restaurant à Genève<br />
                    Bâtiment administratif à PLO<br />
                    Bâtiment industriel à Plan-Les-Ouates<br />
                    École à Carouge<br />
                    Façades à Avully<br />
                    Bâtiment classé à Genève<br />
                    Bâtiment hospitalier à Belle Idée<br />
                    DIP<br />
                    DIP<br />
                    Centre de quartier à la Gradelle<br />
                    Maison à Nyon<br />
                    Maison à Confignon<br />
                    CO des Coudriers<br />
                    Ancienne ferme à Avully<br />
                    Maison individuelle à Collonge-Bellerive<br />
                    Ferme de Budé<br />
                    Genève Aéroport<br />
                    Immeuble de logements à Chancy<br />


                </div>
                <div class="references-artisans-macon">
                    Villa à Arare<br />
                    5 villas à Gy<br />
                    4 villas à Veyrier<br />
                    2 villas à Chéserex<br />
                    Maison individuelle<br />
                    5 maison contigües à Thônex<br />
                    5 villas à Bernex<br />
                    Maison individuelle au Grand-Lancy<br />
                    5 villas à Thônex<br />
                    Piscine à Veyrier<br />
                    Villa individuelle à Soral<br />
                    Villa individuelle à Chancy<br />
                    Maison villageoise à Onex<br />
                    Villas Conches<br />
                    2 Villas Siamoises à Veyrier<br />
                    2 Villas mitoyennes à Charrot<br />
                </div>
            </div>

            <?php
            echo wp_nav_menu(array(
                'menu'   => 'Edification Menu',
                'container' => false,
            ));
            ?>
        </div>
    </div>