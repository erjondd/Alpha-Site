<?php

get_header();

/*
Template Name: Valeurs Edification
*/

?>


<?php  

$valeur_left_bold_text = get_field("valeur_left_bold_text");
$valeurs_left_normal_text = get_field("valeurs_left_normal_text");
$valeurs_box_1 = get_field("valeurs_box_1");
$valeurs_box_2 = get_field("valeurs_box_2");
$valeurs_box_3 = get_field("valeurs_box_3");
$valeurs_box_4 = get_field("valeurs_box_4");
$valeurs_slider_text_1 = get_field("valeurs_slider_text_1");
$valeurs_slider_text_2 = get_field("valeurs_slider_text_2");
$valeurs_slider_text_3 = get_field("valeurs_slider_text_3");
$valeurs_main_tittle_1 = get_field("valeurs_main_tittle_1");
$valeurs_main_tittle_2 = get_field("valeurs_main_tittle_2");
$valeurs_main_tittle_3 = get_field("valeurs_main_tittle_3");

?>
<div class="page page-enterprise enterprise-vision" current="vision">
  <div class="page-header">
    <div class="page-header-background"></div>
    <div class="page-header-content">
      <h1>
        Valeurs <br />
        <span class="vision"><?= $valeurs_main_tittle_1 ?></span>
        <span class="moyens"><?= $valeurs_main_tittle_2 ?></span>
        <span class="mission"><?= $valeurs_main_tittle_3 ?></span>
      </h1>

    </div>
  </div>
  <div class="page-content">
    <div class="page-content-info">
      <div class="page-content-info-main">
        <img src="<?= get_template_directory_uri() ?>/images/no_vals.svg">
        <p class="info-main-bold">
        <?= $valeur_left_bold_text ?>
        </p>
        <p class="info-main-normal">
          <?= $valeurs_left_normal_text ?>
        </p>
      </div>
      <div class="page-content-info-boxes">
        <div class="info-box box1">
          <div class="text-box">
            <?= $valeurs_box_1 ?>
          </div>
        </div>

        <div class="info-box box2">
          <div class="text-box">
          <?= $valeurs_box_2 ?>
          </div>
        </div>

        <div class="info-box box3">
          <div class="text-box"><?= $valeurs_box_3 ?></div>
        </div>

        <div class="info-box box4">
          <div class="text-box"><?= $valeurs_box_4 ?></div>
        </div>
      </div>
    </div>
    <div class="page-content-slider">
      <div class="svg-up valuers-arrow-up">
        <img src="<?= get_template_directory_uri() ?>/images/arrow-up.svg" alt="arrow up" />
      </div>
      <div class="content-slider-info">
        <span class="vision"><?= $valeurs_slider_text_1 ?></span>
        <span class="moyens"><?= $valeurs_slider_text_2 ?></span>
        <span class="mission"><?= $valeurs_slider_text_3 ?></span>
      </div>
      <div class="svg-down valuers-arrow-down">
        <img src="<?= get_template_directory_uri() ?>/images/arrow-down.svg" alt="arrow up" />
      </div>
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