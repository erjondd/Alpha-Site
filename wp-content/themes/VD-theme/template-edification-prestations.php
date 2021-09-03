<?php

get_header();

/*
Template Name: Edification Prestations
*/

?>
<?php

$edification_prestations_subtittle_1 = get_field("edification_prestations_subtittle_1");
$edification_prestations_subtittle_2 = get_field("edification_prestations_subtittle_2");
$edification_prestations_subtittle_3 = get_field("edification_prestations_subtittle_3");

$edification_prestations_subtittle_1_box_left_1 = get_field("edification_prestations_subtittle_1_box_left_1");
$edification_prestations_subtittle_1_box_left_2 = get_field("edification_prestations_subtittle_1_box_left_2");
$edification_prestations_subtittle_1_box_left_3 = get_field("edification_prestations_subtittle_1_box_left_3");
$edification_prestations_subtittle_1_box_right_1 = get_field("edification_prestations_subtittle_1_box_right_1");
$edification_prestations_subtittle_1_box_right_2 = get_field("edification_prestations_subtittle_1_box_right_2");
$edification_prestations_subtittle_1_box_right_3 = get_field("edification_prestations_subtittle_1_box_right_3");

$edification_prestations_subtittle_2_box_left_1 = get_field("edification_prestations_subtittle_2_box_left_1");
$edification_prestations_subtittle_2_box_left_2 = get_field("edification_prestations_subtittle_2_box_left_2");
$edification_prestations_subtittle_2_box_left_3 = get_field("edification_prestations_subtittle_2_box_left_3");
$edification_prestations_subtittle_2_box_right_1 = get_field("edification_prestations_subtittle_2_box_right_1");
$edification_prestations_subtittle_2_box_right_2 = get_field("edification_prestations_subtittle_2_box_right_2");
$edification_prestations_subtittle_2_box_right_3 = get_field("edification_prestations_subtittle_2_box_right_3");

$edification_prestations_subtittle_3_box_left_1 = get_field("edification_prestations_subtittle_3_box_left_1");
$edification_prestations_subtittle_3_box_left_2 = get_field("edification_prestations_subtittle_3_box_left_2");
$edification_prestations_subtittle_3_box_left_3 = get_field("edification_prestations_subtittle_3_box_left_3");
$edification_prestations_subtittle_3_box_right_1 = get_field("edification_prestations_subtittle_3_box_right_1");
$edification_prestations_subtittle_3_box_right_2 = get_field("edification_prestations_subtittle_3_box_right_2");
$edification_prestations_subtittle_3_box_right_3 = get_field("edification_prestations_subtittle_3_box_right_3");


$edification_prestations_subtittle_1_video = get_field("edification_prestations_subtittle_1_video");
$edification_prestations_subtittle_2_video = get_field("edification_prestations_subtittle_2_video");
$edification_prestations_subtittle_3_video = get_field("edification_prestations_subtittle_3_video");

?>


<div class="page page-prestations prestation-genie_civil" current="genie_civil">
    <div class="page-header">
        <div class="page-header-background"></div>
        <div class="page-header-content">
            <h1>Prestations
                <br />
                <span class="genie_civil"><?= $edification_prestations_subtittle_1 ?></span>
                <span class="batiment"><?= $edification_prestations_subtittle_2 ?></span>
                <span class="artisans_macon"><?= $edification_prestations_subtittle_3 ?></span>
            </h1>

            <!-- <img src="<?= get_template_directory_uri() ?>/images/logo_icon.svg" alt="Logo" /> -->
        </div>
    </div>
    <div class="page-content">
        <div class="prestations-info">
            <img class="prestations-video-play-icon" src="<?= get_template_directory_uri() ?>/images/video-play.svg" alt="">
            <span class="prestations-video-label">vidéo</span>
            <video class="prestations-video" src="<?= $edification_prestations_subtittle_1_video['url'] ?>"></video>
        </div>
        <div class="prestations-all-boxes">
            <div class="prestations-boxes-left">
                <div class="prestations-box1-left"><span class="genie_civil"><?= $edification_prestations_subtittle_1_box_left_1 ?></span>
                    <span class="batiment"><?= $edification_prestations_subtittle_2_box_left_1 ?></span>
                    <span class="artisans_macon"><?= $edification_prestations_subtittle_3_box_left_1 ?></span>
                </div>
                <div class="prestations-box2-left"> <span class="genie_civil"><?= $edification_prestations_subtittle_1_box_left_2 ?></span>
                    <span class="batiment"><?= $edification_prestations_subtittle_2_box_left_2 ?></span>
                    <span class="artisans_macon"><?= $edification_prestations_subtittle_2_box_left_3 ?></span>
                </div>
                <div class="prestations-box3-left"><span class="genie_civil"><?= $edification_prestations_subtittle_3_box_left_1 ?></span>
                    <span class="batiment"><?= $edification_prestations_subtittle_3_box_left_2 ?></span>
                    <span class="artisans_macon"><?= $edification_prestations_subtittle_3_box_left_3 ?></span>
                </div>
            </div>
            <div class="prestations-boxes-right">
                <div class="prestations-box1-right"><span class="genie_civil"><?= $edification_prestations_subtittle_1_box_right_1 ?></span>
                    <span class="batiment"><?= $edification_prestations_subtittle_2_box_right_1 ?></span>
                    <span class="artisans_macon"><?= $edification_prestations_subtittle_3_box_right_1 ?></span>
                </div>
                <div class="prestations-box2-right"><span class="genie_civil"><?= $edification_prestations_subtittle_1_box_right_2 ?></span>
                    <span class="batiment"><?= $edification_prestations_subtittle_2_box_right_2 ?></span>
                    <span class="artisans_macon"><?= $edification_prestations_subtittle_3_box_right_2 ?></span>
                </div>
                <div class="prestations-box3-right box-slide-click"><img src="<?= get_template_directory_uri() ?>/images/batiment.svg" alt=""></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('body').attr('page-color', 'white');
        });
    </script>
    <?php
    get_footer();
    ?>