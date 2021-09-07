<?php

get_header();

/*
Template Name: Batiment Prestations
*/

?>
<?php
$batiment_prestations_subtittle_1 = get_field("batiment_prestations_subtittle_1");
$ebatiment_prestations_subtittle_2 = get_field("batiment_prestations_subtittle_2");
$batiment_prestations_subtittle_3 = get_field("batiment_prestations_subtittle_3");

$batiment_prestations_subtittle_1_box_left_1 = get_field("batiment_prestations_subtittle_1_box_left_1");
$batiment_prestations_subtittle_1_box_left_2 = get_field("batiment_prestations_subtittle_1_box_left_2");
$batiment_prestations_subtittle_1_box_left_3 = get_field("batiment_prestations_subtittle_1_box_left_3");
$batiment_prestations_subtittle_1_box_right_1 = get_field("batiment_prestations_subtittle_1_box_right_1");
$batiment_prestations_subtittle_1_box_right_2 = get_field("batiment_prestations_subtittle_1_box_right_2");
$batiment_prestations_subtittle_1_box_right_3 = get_field("batiment_prestations_subtittle_1_box_right_3");

$batiment_prestations_subtittle_2_box_left_1 = get_field("batiment_prestations_subtittle_2_box_left_1");
$batiment_prestations_subtittle_2_box_left_2 = get_field("batiment_prestations_subtittle_2_box_left_2");
$batiment_prestations_subtittle_2_box_left_3 = get_field("batiment_prestations_subtittle_2_box_left_3");
$batiment_prestations_subtittle_2_box_right_1 = get_field("batiment_prestations_subtittle_2_box_right_1");
$batiment_prestations_subtittle_2_box_right_2 = get_field("batiment_prestations_subtittle_2_box_right_2");
$batiment_prestations_subtittle_2_box_right_3 = get_field("batiment_prestations_subtittle_2_box_right_3");

$batiment_prestations_subtittle_3_box_left_1 = get_field("batiment_prestations_subtittle_3_box_left_1");
$batiment_prestations_subtittle_3_box_left_2 = get_field("batiment_prestations_subtittle_3_box_left_2");
$batiment_prestations_subtittle_3_box_left_3 = get_field("batiment_prestations_subtittle_3_box_left_3");
$batiment_prestations_subtittle_3_box_right_1 = get_field("batiment_prestations_subtittle_3_box_right_1");
$batiment_prestations_subtittle_3_box_right_2 = get_field("batiment_prestations_subtittle_3_box_right_2");
$batiment_prestations_subtittle_3_box_right_3 = get_field("batiment_prestations_subtittle_3_box_right_3");
?>
<div class="page page-prestations prestation-genie_civil" current="genie_civil">
    <div class="page-header">
        <div class="page-header-background"></div>
        <div class="page-header-content">
            <h1>Prestations</h1>
            <!-- <img src="<?= get_template_directory_uri() ?>/images/logo_icon.svg" alt="Logo" /> -->
        </div>
    </div>
    <div class="page-content">
        <?php if (!wp_is_mobile()) { ?>
            <div class="prestations-info">
            </div>
            <div class="prestations-all-boxes">
                <div class="prestations-boxes-left">
                    <div class="prestations-box1-left">
                        <?= $batiment_prestations_subtittle_1_box_left_1 ?>
                    </div>
                    <div class="prestations-box2-left">
                        <?= $batiment_prestations_subtittle_1_box_left_2 ?>
                    </div>
                    <div class="prestations-box3-left">
                        <?= $batiment_prestations_subtittle_1_box_left_3 ?>
                    </div>
                </div>
                <div class="prestations-boxes-right">
                    <div class="prestations-box1-right">
                        <?= $batiment_prestations_subtittle_1_box_right_1 ?>
                    </div>
                    <div class="prestations-box2-right">
                        <?= $batiment_prestations_subtittle_1_box_right_2 ?>
                    </div>
                    <div class="prestations-box3-right box-slide-click">
                        <span>
                            <?= $batiment_prestations_subtittle_1_box_right_3 ?>
                        </span>
                        <svg id="Group_56143" data-name="Group 56143" xmlns="http://www.w3.org/2000/svg" width="20.092" height="55.849" viewBox="0 0 20.092 55.849">
                            <path id="Path_36303" data-name="Path 36303" d="M20.06,27.881H9.829L5.209,14.774l-.09-.257-.032-.087L0,0H10.234l4.71,13.368Z" transform="translate(20.092 27.881) rotate(180)" fill="#fff" />
                            <path id="Path_36304" data-name="Path 36304" d="M20.092,0,14.976,14.516v0L10.263,27.881l-.029.087H0l.032-.087,5.087-14.43.029-.087L9.858,0Z" transform="translate(20.092 55.849) rotate(180)" fill="#fff" />
                        </svg>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="batiment-presation-info-mobile">
            amo</br>
            Avant-projet<br />
            Surveillance de travaux<br />
            Clés en main<br />
            Immobilier
        </div>

        <div class="prestations-all-boxes-mobile">
            <div class="prestations-box1-mobile prestations-boxes-mobile">
                <span>
                    <?= $batiment_prestations_subtittle_1_box_left_1 ?>
                </span>
            </div>
            <div class="prestations-box2-mobile prestations-boxes-mobile">
                <span>
                    <?= $batiment_prestations_subtittle_1_box_left_2 ?>
                </span>
            </div>
            <div class="prestations-box3-mobile prestations-boxes-mobile">
                <span>
                    <?= $batiment_prestations_subtittle_1_box_left_3 ?>
                </span>
            </div>
            <div class="prestations-box4-mobile prestations-boxes-mobile">
                <span>
                    <?= $batiment_prestations_subtittle_1_box_right_1 ?>
                </span>
            </div>
            <div class="prestations-box5-mobile prestations-boxes-mobile">
                <span>
                    <?= $batiment_prestations_subtittle_1_box_right_2 ?>
                </span>
            </div>
            <div class="prestations-box6-mobile box-slide-click prestations-boxes-mobile">
                <?= $batiment_prestations_subtittle_1_box_right_3 ?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('body').attr('page-color', 'black');
        });
    </script>
    <?php
    get_footer();
    ?>