<?php

get_header();

/*
Template Name: Homepage Template
*/

$logo = get_field("logo");
$picture = $logo['sizes']['large'];
$logo_name = get_field("logo_name");
$picture2 = $logo_name['sizes']['large'];
?>
<div class="homepage">
    <div class="homepage-logo-home"><img src="<?= get_template_directory_uri() ?>/images/logo-homepage.svg"></div>
    <div class="white-homepage">
        <div class="white-homepage-top"><img src="<?= get_template_directory_uri() ?>/images/white-top-homepage-pic.jpg"></div>
        <div class="white-homepage-bottom menu-open-white">Édifications s.a.</div>
    </div>
    <div class="black-homepage">
        <div class="black-homepage-top"><img src="<?= get_template_directory_uri() ?>/images/black-top-homepage-pic.jpg"></div>
        <div class="black-homepage-bottom menu-open-black">Bâtiment & conseil sarl</div>
    </div>
</div>

<?php
get_footer();
?>