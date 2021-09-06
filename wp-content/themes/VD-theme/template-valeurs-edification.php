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
$valeurs_slider_1 = get_field("valeurs_slider_1");
$valeurs_slider_2 = get_field("valeurs_slider_2");
$valeurs_slider_3 = get_field("valeurs_slider_3");
$valeurs_submain_tittle_1 = get_field("valeurs_submain_tittle_1");
$valeurs_submain_tittle_2 = get_field("valeurs_submain_tittle_2");
$valeurs_submain_tittle_3 = get_field("valeurs_submain_tittle_3");

?>
<div class="page page-enterprise enterprise-vision" current="vision">
  <div class="page-header">
    <div class="page-header-background"></div>
    <div class="page-header-content">
      <h1>
        Valeurs <br />
        <span class="vision"><?= $valeurs_submain_tittle_1 ?></span>
        <span class="moyens"><?= $valeurs_submain_tittle_2 ?></span>
        <span class="mission"><?= $valeurs_submain_tittle_3 ?></span>
      </h1>

    </div>
  </div>
  <div class="page-content">
    <div class="page-content-info">
      <div class="page-content-info-main">
        <div class="main-valuers-titleque">
          nos<br/>
          valeurs
        </div>
        <!-- <img src="<?= get_template_directory_uri() ?>/images/no_vals.svg"> -->
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

        <svg xmlns="http://www.w3.org/2000/svg" width="62.43" height="22.459" viewBox="0 0 62.43 22.459">
          <g id="Group_8" data-name="Group 8" transform="translate(62.43 22.459) rotate(180)">
            <path id="Path_31" data-name="Path 31" d="M22.423,31.166H10.987L5.823,16.515l-.1-.288-.036-.1L0,0H11.44l5.265,14.943Z" transform="translate(31.263 22.459) rotate(-90)" fill="#fff" />
            <path id="Path_32" data-name="Path 32" d="M22.459,0,16.741,16.227v0L11.472,31.166l-.032.1H0l.036-.1,5.686-16.13.032-.1L11.019,0Z" transform="translate(0 22.459) rotate(-90)" fill="#fff" />
          </g>
        </svg>
      </div>
      <div class="content-slider-info">
        <span class="vision"><?= $valeurs_slider_1 ?></span>
        <span class="moyens"><?= $valeurs_slider_2 ?></span>
        <span class="mission"><?= $valeurs_slider_3 ?></span>
      </div>
      <div class="svg-down valuers-arrow-down">
        <svg id="Group_9" data-name="Group 9" xmlns="http://www.w3.org/2000/svg" width="62.43" height="22.459" viewBox="0 0 62.43 22.459">
          <path id="Path_31" data-name="Path 31" d="M22.423,31.166H10.987L5.823,16.515l-.1-.288-.036-.1L0,0H11.44l5.265,14.943Z" transform="translate(31.263 22.459) rotate(-90)" fill="#fff" />
          <path id="Path_32" data-name="Path 32" d="M22.459,0,16.741,16.227v0L11.472,31.166l-.032.1H0l.036-.1,5.686-16.13.032-.1L11.019,0Z" transform="translate(0 22.459) rotate(-90)" fill="#fff" />
        </svg>
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