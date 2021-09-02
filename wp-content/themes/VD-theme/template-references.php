<?php

get_header();

/*
Template Name: References
*/

?>

<?php
$bold_text_1 = get_field("bold_text_1");
$normal_text_1 = get_field("normal_text_1");
$bold_text_2 = get_field("bold_text_2");
$normal_text_2 = get_field("normal_text_2");
$bold_text_3 = get_field("bold_text_3");
$normal_text_3 = get_field("normal_text_3");
$bold_text_4 = get_field("bold_text_4");
$normal_text_4 = get_field("normal_text_4");
$bold_text_5 = get_field("bold_text_5");
$normal_text_5 = get_field("normal_text_5");

?>

<div class="page page-references">
    <div class="page-header">
        <div class="page-header-background"></div>
        <div class="page-header-content">
            <h1>
                References <br />
                Cern
            </h1>
            <!-- <img src="<?= get_template_directory_uri() ?>/images/logo_icon.svg" alt="Logo" /> -->
        </div>
    </div>
    <div class="page-content">
        <div class="references-info">
            <div class="references-info-left">
                <div class="references-info-tittle"><?= $bold_text_1 ?></div>
                <div class="references-info-subtittle">
                <?= $normal_text_1 ?>
                </div>
                <div class="references-info-tittle"> <?= $bold_text_2 ?></div>
                <div class="references-info-subtittle">
                <?= $normal_text_2 ?>
                </div>
            </div>
            <div class="references-info-right">
                <div class="references-info-tittle"><?= $bold_text_3 ?></div>
                <div class="references-info-subtittle"> <?= $normal_text_3 ?></div>
                <div class="references-info-tittle"><?= $bold_text_4 ?></div>
                <div class="references-info-subtittle"> <?= $normal_text_4 ?></div>
                <div class="references-info-tittle"><?= $bold_text_5 ?></div>
                <div class="references-info-subtittle"> <?= $normal_text_5 ?></div>
            </div>
        </div>
        <div class="references-picture">
            <img src="<?= get_template_directory_uri() ?>/images/references-picture1.jpg" alt="References Picture" />
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