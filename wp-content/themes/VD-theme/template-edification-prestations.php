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
        <?php if (!wp_is_mobile()) { ?>
            <div class="prestations-info">
                <img class="prestations-video-play-icon" src="<?= get_template_directory_uri() ?>/images/video-play.svg" alt="">
                <img class="prestations-video-pause-icon" src="<?= get_template_directory_uri() ?>/images/video-pause.svg" alt="">

                <span class="prestations-video-label">vidéo</span>
                <span class="genie_civil">
                    <video class="prestations-video " src="<?= $edification_prestations_subtittle_1_video['url'] ?>"></video>
                </span>
                <span class="batiment">
                    <video class="prestations-video " src="<?= $edification_prestations_subtittle_2_video['url'] ?>"></video>
                </span>
                <span class="artisans_macon">
                    <video class="prestations-video " src="<?= $edification_prestations_subtittle_3_video['url'] ?>"></video>
                </span>
            </div>
            <div class="prestations-all-boxes">
                <div class="prestations-boxes-left">
                    <div class="prestations-box1-left">
                        <span class="genie_civil"><?= $edification_prestations_subtittle_1_box_left_1 ?>
                    </span>
                        <span class="batiment">
                            <?= $edification_prestations_subtittle_2_box_left_1 ?>
                        </span>
                        <span class="artisans_macon">
                            <?= $edification_prestations_subtittle_3_box_left_1 ?>
                        </span>
                    </div>
                    <div class="prestations-box2-left"> 
                        <span class="genie_civil"><?= $edification_prestations_subtittle_1_box_left_2 ?>
                    </span>
                        <span class="batiment">
                            <?= $edification_prestations_subtittle_2_box_left_2 ?>
                        </span>
                        <span class="artisans_macon">
                            <?= $edification_prestations_subtittle_2_box_left_3 ?>
                        </span>
                    </div>
                    <div class="prestations-box3-left">
                        <span class="genie_civil"><?= $edification_prestations_subtittle_3_box_left_1 ?>
                    </span>
                        <span class="batiment">
                            <?= $edification_prestations_subtittle_3_box_left_2 ?>
                        </span>
                        <span class="artisans_macon">
                            <?= $edification_prestations_subtittle_3_box_left_3 ?>
                        </span>
                    </div>
                </div>
                <div class="prestations-boxes-right">
                    <div class="prestations-box1-right">
                        <span class="genie_civil"><?= $edification_prestations_subtittle_1_box_right_1 ?>
                    </span>
                        <span class="batiment">
                            <?= $edification_prestations_subtittle_2_box_right_1 ?>
                        </span>
                        <span class="artisans_macon">
                            <?= $edification_prestations_subtittle_3_box_right_1 ?>
                        </span>
                    </div>
                    <div class="prestations-box2-right">
                        <span class="genie_civil"><?= $edification_prestations_subtittle_1_box_right_2 ?>
                    </span>
                        <span class="batiment">
                            <?= $edification_prestations_subtittle_2_box_right_2 ?>
                        </span>
                        <span class="artisans_macon">
                            <?= $edification_prestations_subtittle_3_box_right_2 ?>
                        </span>
                    </div>
                    <div class="prestations-box3-right box-slide-click">
                        <span class="batiment">
                            <?= $edification_prestations_subtittle_1_box_right_3 ?>

                        </span>
                        <span class="artisans_macon">
                            <?= $edification_prestations_subtittle_2_box_right_3 ?>

                        </span>
                        <span class="genie_civil">
                            <?= $edification_prestations_subtittle_3_box_right_3 ?>

                        </span>
                        <svg id="Group_56143" data-name="Group 56143" xmlns="http://www.w3.org/2000/svg" width="20.092" height="55.849" viewBox="0 0 20.092 55.849">
                            <path id="Path_36303" data-name="Path 36303" d="M20.06,27.881H9.829L5.209,14.774l-.09-.257-.032-.087L0,0H10.234l4.71,13.368Z" transform="translate(20.092 27.881) rotate(180)" fill="#fff" />
                            <path id="Path_36304" data-name="Path 36304" d="M20.092,0,14.976,14.516v0L10.263,27.881l-.029.087H0l.032-.087,5.087-14.43.029-.087L9.858,0Z" transform="translate(20.092 55.849) rotate(180)" fill="#fff" />
                        </svg>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="prestations-info prestations-info-mobile">
        <span class="genie_civil">
            <!-- <img class="prestations-video-play-icon-mobile" src="<?= get_template_directory_uri() ?>/images/video-play.svg" alt="">
            <span class="prestations-video-label-mobile"></span> -->
            <video class="prestations-video prestations-video-mobile" src="<?= $edification_prestations_subtittle_1_video['url'] ?>"></video>
        </span>
        <span class="batiment">
            <!-- <img class="prestations-video-play-icon-mobile" src="<?= get_template_directory_uri() ?>/images/video-play.svg" alt="">
            <span class="prestations-video-label-mobile"></span> -->
            <video class="prestations-video prestations-video-mobile" src="<?= $edification_prestations_subtittle_2_video['url'] ?>"></video>
        </span>
        <span class="artisans_macon">
            <!-- <img class="prestations-video-play-icon-mobile" src="<?= get_template_directory_uri() ?>/images/video-play.svg" alt="">
            <span class="prestations-video-label-mobile"></span> -->
            <video class="prestations-video prestations-video-mobile" src="<?= $edification_prestations_subtittle_3_video['url'] ?>"></video>
        </span>
        
        </div>
        <div class="prestations-all-boxes-mobile">

            <div class="prestations-box1-mobile prestations-boxes-mobile"><span class="genie_civil"><?= $edification_prestations_subtittle_1_box_left_1 ?></span>
                <span class="batiment"><?= $edification_prestations_subtittle_2_box_left_1 ?></span>
                <span class="artisans_macon"><?= $edification_prestations_subtittle_3_box_left_1 ?></span>
            </div>
            <div class="prestations-box2-mobile prestations-boxes-mobile"> <span class="genie_civil"><?= $edification_prestations_subtittle_1_box_left_2 ?></span>
                <span class="batiment"><?= $edification_prestations_subtittle_2_box_left_2 ?></span>
                <span class="artisans_macon"><?= $edification_prestations_subtittle_2_box_left_3 ?></span>
            </div>
            <div class="prestations-box3-mobile prestations-boxes-mobile"><span class="genie_civil"><?= $edification_prestations_subtittle_3_box_left_1 ?></span>
                <span class="batiment"><?= $edification_prestations_subtittle_3_box_left_2 ?></span>
                <span class="artisans_macon"><?= $edification_prestations_subtittle_3_box_left_3 ?></span>
            </div>


            <div class="prestations-box4-mobile prestations-boxes-mobile"><span class="genie_civil"><?= $edification_prestations_subtittle_1_box_right_1 ?></span>
                <span class="batiment"><?= $edification_prestations_subtittle_2_box_right_1 ?></span>
                <span class="artisans_macon"><?= $edification_prestations_subtittle_3_box_right_1 ?></span>
            </div>
            <div class="prestations-box5-mobile prestations-boxes-mobile"><span class="genie_civil"><?= $edification_prestations_subtittle_1_box_right_2 ?></span>
                <span class="batiment"><?= $edification_prestations_subtittle_2_box_right_2 ?></span>
                <span class="artisans_macon"><?= $edification_prestations_subtittle_3_box_right_2 ?></span>
            </div>
            <div class="prestations-box6-mobile box-slide-click prestations-boxes-mobile">
                <span class="batiment">
                    <?= $edification_prestations_subtittle_1_box_right_3 ?>

                </span>
                <span class="artisans_macon">
                    <?= $edification_prestations_subtittle_2_box_right_3 ?>

                </span>
                <span class="genie_civil">
                    <?= $edification_prestations_subtittle_3_box_right_3 ?>

                </span>
                <svg id="Group_56143" data-name="Group 56143" xmlns="http://www.w3.org/2000/svg" width="20.092" height="55.849" viewBox="0 0 20.092 55.849">
                    <path id="Path_36303" data-name="Path 36303" d="M20.06,27.881H9.829L5.209,14.774l-.09-.257-.032-.087L0,0H10.234l4.71,13.368Z" transform="translate(20.092 27.881) rotate(180)" fill="#fff" />
                    <path id="Path_36304" data-name="Path 36304" d="M20.092,0,14.976,14.516v0L10.263,27.881l-.029.087H0l.032-.087,5.087-14.43.029-.087L9.858,0Z" transform="translate(20.092 55.849) rotate(180)" fill="#fff" />
                </svg>
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